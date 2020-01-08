<?php

namespace App\Http\Controllers\super_admin\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\super_admin\website\Business;
use DB;
use Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = Business::paginate(10);
		return view('super_admin.pages.business',$data);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin.pages.add-business');
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
            'name' => 'required',
            'small_description' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		unset($request['_token']);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/business/'), $imageName);
		
        Business::create(array_merge($request->all() , ['created_by'=>Auth::user()->id,'image'=>$imageName]));
        return redirect()->route('businessList')->with('success','Add Successfully.');        //
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
        $business = Business::find($id);
		if($business){
			return view('super_admin.pages.edit-business',compact('business'));
		}else{
			with('error','Error.');
		}		
        //
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
        $business = Business::find($id);
		if($business){
			
			$request->validate([
				'name' => 'required',
				'small_description' => 'required',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			
			if(!empty($request->hasFile('image'))){
				$imageName = time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/business/'), $imageName);
				$business->update(array_merge($request->all() , ['image'=>$imageName]));
			}else{
				$business->update($request->all());
			}
			
			return redirect()->route('businessList')->with('success','Update Successfully.');        //
		}else{
			with('error','Error.');
		}
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$businessimage = Business::find($id);
        $business = Business::where('id',$id)->delete();
		return redirect()->route('businessList')->with('success','Delete Successfully.');        //
    }
}
