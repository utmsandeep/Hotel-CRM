<?php

namespace App\Http\Controllers\super_admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\super_admin\BusinessOwner;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\UniqueExceptSelf;

use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;

use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;

use App\Model\Tenant\Admin;
use App\Events\NewBrandAddedEvent;

class BusinessownerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = BusinessOwner::where('isDeleted' , 0)->paginate(10);
		return view('super_admin.pages.business-owner.businessowner-list',$data);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin.pages.business-owner.add-businessowner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$request->validate([
            'businessname'      => 'string|required',
            'firstname'         => 'string|required',
            'lastname'          => 'string|required',
            'gender'            => 'integer|required|min:1',
            'subdomain'         => 'required|regex:/(^[A-Za-z0-9-]+$)+/|unique:business_owners',
            'primary_mobile'    => 'unique:business_owners|digits:10|nullable',
            'secondary_mobile'  => 'unique:business_owners|digits:10|nullable',
            'email'             => 'required|email|unique:business_owners',
            'password'          => 'required|confirmed|min:8',
            'street'            => 'required',
            'city'              => 'required',
            'state'             => 'required',
            'postal_code'       => 'required|digits:6',
            'country'           => 'required|integer|min:1',
        ]);
		unset($request['_token']);
        unset($request['password_confirmation']);
        $request['password'] = Hash::make($request['password']);
        $request['subdomain'] = strtolower(($request['subdomain']));
        $owner = BusinessOwner::create(array_merge($request->all() , ['created_by'=>Auth::user()->id]));
        event(new NewBrandAddedEvent($owner));
        $website = new Website;
        $site = $request['subdomain'];
        $website->uuid = $site;
        //$website->managed_by_database_connection = 'system.asia';
        app(WebsiteRepository::class)->create($website);

        $hostname = new Hostname;
        $hostname->fqdn = $site.".".request()->getHttpHost() ;
        $hostname = app(HostnameRepository::class)->create($hostname);
        app(HostnameRepository::class)->attach($hostname, $website);

        config(['database.connections.tenant.database' => $site]);
        config(['database.default' => 'tenant']);
        DB::purge('mysql');

        unset($request['businessname'] , $request['subdomain']);

        Admin::create(array_merge($request->all() , ['role'=>1]));

        config(['database.connections.tenant.database' => 'tenancy']);
        config(['database.default' => 'system']);
        DB::purge('mysql');
       
        return redirect()->route('businessownerList')->with('success','Add Successfully.');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessowner = BusinessOwner::find($id);
		if($businessowner){
			return view('super_admin.pages.business-owner.edit-businessowner',compact('businessowner'));
		}

        return redirect()->route('businessownerList')->withErrors('Record Not Found.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
			$request->validate([
            'firstname'         => 'string|required',
            'lastname'          => 'string|required',
            'gender'            => 'integer|required|min:1',
            'primary_mobile'    => ['digits:10','nullable' , new UniqueExceptSelf(BusinessOwner::class, 'primary_mobile', $request->primary_mobile, $id)],
            'secondary_mobile'  => ['digits:10','nullable' , new UniqueExceptSelf(BusinessOwner::class, 'secondary_mobile', $request->secondary_mobile, $id)],
            'email'             => ['required','email',new UniqueExceptSelf(BusinessOwner::class, 'email', $request->email, $id)],
            'password'          => 'confirmed|min:8|nullable',
            'street'            => 'required',
            'city'              => 'required',
            'state'             => 'required',
            'postal_code'       => 'required|digits:6',
            'country'           => 'required|integer|min:1',
        ]);
        $businessowner = BusinessOwner::find($id);
        if($businessowner){
            unset($request['_token']);
            unset($request['password_confirmation']);
            if(isset($request['password']) && $request['password'] == '')
                unset($request['password']);
            else
            $request['password'] = Hash::make($request['password']);
    		$businessowner->update($request->all());	
    		return redirect()->route('businessownerList')->with('success','Updated Successfully.'); 
        }

        return redirect()->back()->withErrors('Record Not Found.');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,  $id)
    {
		     $request->validate([
                'isDeleted' => 'required_without:isBlocked|in:1',
                'isBlocked' => 'required_without:isDeleted|in:1,0',
            ]);

          $businessowner = BusinessOwner::find($id);
          if($businessowner){
            if(isset($request['isDeleted'])){
                $website = Website::where('uuid' , $businessowner->subdomain)->first();
                if(!empty( $website)){
                    $hostname = Hostname::where('website_id' , $website->id)->first();
                    if(!empty($hostname)){
                        app(HostnameRepository::class)->delete($hostname, true);
                        app(WebsiteRepository::class)->delete($website, true);
                    }
                }
                $businessowner->delete();
                return redirect()->route('businessownerList')->with('success','Record Deleted Successfully.');
            }

            $businessowner->update(['isBlocked'=>$request['isBlocked']]);
            return redirect()->route('businessownerList')->with('success','Action Performed Successfully.');
          }

        return redirect()->route('businessownerList')->withErrors('Record Not Found.');

    }
}
