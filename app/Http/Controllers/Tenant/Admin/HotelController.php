<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\super_admin\Role;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Hotel;
use App\Notifications\Tenant\Admin\NewHotelNotification;
use App\Notifications\Tenant\Admin\ContractConfirmationNotification;
use App\Model\Tenant\Admin\HotelAdmin;
use App\Events\Tenant\Admin\NewStaffAddedEvent;
use Illuminate\Support\Str;
use App\Model\Tenant\Admin\AdminPasswordReset;
use App\Model\Tenant\Admin\ContractSignature;
use App\Model\Tenant\Admin\ContractContent;
use App\super_admin\BusinessOwner;

class HotelController extends Controller
{
    public function index(){
    	$hotels  = Hotel::paginate(10);
    	return view('tenant.admin.hotels.hotels' , compact('hotels'));
    }

    public function create(){
    	$staff = Admin::get();
    	return view('tenant.admin.hotels.hotel-create'  , compact('staff'));
    }

    public function store(Request $request){

    	$request->validate([
    		'name'       		=>	'bail|required',
    		'region'			=>	'bail|required',
            'hotel_code'        =>  'bail|required',
            'f_f_name'          =>  'bail|required',
            'f_l_name'          =>  'bail|required',
            'f_email'           =>  'bail|required|email',
            'f_mobile'          =>  'bail|required|digits:10',
            'g_f_name'          =>  'bail|required',
            'g_l_name'          =>  'bail|required',
            'g_email'           =>  'bail|required|email',
            'g_mobile'          =>  'bail|required|digits:10',

    		// 'cluster_manager'	=>	'bail|required|numeric',
    		// 'general_manager'	=>	'bail|required|numeric',
    		// 'director_of_sales'	=>	'bail|required|numeric',
    		// 'coordinator'		=>	'bail|required|numeric',
    	]);

    	$hotel = Hotel::create($request->all());
        $hotel->hotelContract()->create();

        $finance_manager = Admin::where('email' , $request->f_email)
                            ->first();

        if(empty($finance_manager)){

            $finance_manager = Admin::create([
                'firstname'=>$request->f_f_name , 
                'lastname'=>$request->f_l_name ,
                'email'=>$request->f_email , 
                'primary_mobile'=>$request->f_mobile , 
                'role'=>9
            ]);
            event(new NewStaffAddedEvent($finance_manager->load('adminRole')));
        }


        $general_manager = Admin::where('email' , $request->g_email)
                            ->first();

        if(empty($general_manager)){

            $general_manager = Admin::create([
                'firstname'=>$request->g_f_name , 
                'lastname'=>$request->g_l_name ,
                'email'=>$request->g_email , 
                'primary_mobile'=>$request->g_mobile , 
                'role'=>7
            ]);

             event(new NewStaffAddedEvent($general_manager->load('adminRole')));
        }

        HotelAdmin::create(
            ['hotel_id'=>$hotel->id , 'admin_id'=>auth('admin')->user()->id]
        );

         HotelAdmin::create(
            ['hotel_id'=>$hotel->id , 'admin_id'=>$finance_manager->id]
        );

          HotelAdmin::create(
            ['hotel_id'=>$hotel->id , 'admin_id'=>$general_manager->id]
        );

        $url = route('tenant.admin.hotel.contract' , ['hotel_code'=>$hotel->hotel_code]);
        $finance_manager->notify(new NewHotelNotification($hotel , $url));

    	return redirect()->route('tenant.admin.hotel.list')->withSuccess('Invitation Sent.');

    }

    public function showContract($hotel_code){
        $hotel = Hotel::where('hotel_code' , $hotel_code)->first();
        $hotel_admin = HotelAdmin::where('hotel_id' , $hotel->id)->where('admin_id' , auth('admin')->user()->id)->first();
        $owner = BusinessOwner::where('subdomain' , explode('.' , request()->getHttpHost())[0])->first();
        //dd($owner);

        // $hotelAdmins = HotelAdmin::where('hotel_id' , $hotel->id)->get();
        // $hotelAdmins = $hotelAdmins->map(function ($admin) {
        //     return collect($admin->admin);
        // });
        // return $hotelAdmins->where('role' , 4)->first()->get('firstname');

        if(!empty($hotel_admin)){
        $signatures = ContractSignature::where('hotel_id' , $hotel->id)->get();
        //if(count($signatures) && ($admin->admin->role == 4 || $admin->admin->role == 9))
        $admins = $hotel->hotelAdmins->filter(function ($admin) {
            return $admin->admin->role == 7 || $admin->admin->role == 9; 
        });
        //if (!$admins->contains('name', $service->name))
        $content = ContractContent::first();
        return view('tenant.admin.hotels.hotel-contract' , compact('hotel' , 'admins' , 'signatures' , 'content', 'hotel_code' , 'owner'));
        }
        return "Unauthorized Person";
    }

    public function storeContract(Request $request , $hotel_code){
        $role = auth('admin')->user()->role;
        $hotel = Hotel::where('hotel_code' , $hotel_code)->first();
        $hotelAdmins = HotelAdmin::where('hotel_id' , $hotel->id)->get();
        $hotelAdmins = $hotelAdmins->map(function ($admin) {
            return collect($admin->admin);  
        });
        $url = route('tenant.admin.hotel.contract' , ['hotel_code'=>$hotel->hotel_code]);

        if($role === 9){
            $request->validate([
                'sign'     => 'bail|required',
                // 'signature'     => 'bail|required',
                'address'       => 'bail|required' , 
                'gst_no'        => 'bail|required',
                'pan_card'      => 'bail|required'
            ]);
            if(!empty($hotel))
            {
                $hotel->update($request->all());
            }

            $gm = Admin::find($hotelAdmins->where('role' , 7)->first()->get('id'));
            $gm->notify(new NewHotelNotification($hotel , $url));
        }

        else{

             $request->validate([
             'sign'     => "bail|required",   
             // 'signature'     => "bail|required",
         ]);


            $cm = Admin::find($hotelAdmins->where('role' , 4)->first()->get('id'));
            $cm->notify(new ContractConfirmationNotification($hotel , $url));
        }
        ContractSignature::create(['hotel_id'=>$hotel->id , 'hotel_contract_id'=>$hotel->hotelContract->id , 'admin_id'=>auth('admin')->user()->id , 'sign'=>$request->sign , 'role'=>$role]);
        return redirect()->route('tenant.admin.hotel.contract' , ['hotel_code'=>$hotel_code]);   

    }

    public function hotelDashboard($hotel_code){  
        return view('tenant.admin.hotels.hotel-dashboard' , compact('hotel_code'));
    }

    public function test(){
         $hotels = HotelAdmin::where('admin_id' , auth('admin')->user()->id)->get();
         $hotels = $hotels->unique('hotel_id'); 
         dd($hotels);
         foreach ($hotels as $key =>$hotel) {
            return $hotel->Hotel->name;
         }
        return $hotels->Hotel->name;
    }
}
                                                                                                                                                        