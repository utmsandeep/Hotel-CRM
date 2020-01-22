<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\super_admin\Role;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Hotel;
use App\Notifications\Tenant\Admin\NewHotelNotification;
use App\Model\Tenant\Admin\HotelAdmin;
use App\Events\Tenant\Admin\NewStaffAddedEvent;
use Illuminate\Support\Str;
use App\Model\Tenant\Admin\AdminPasswordReset;

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

        $url = route('tenant.admin.hotel.contract');
        $finance_manager->notify(new NewHotelNotification($hotel , $url));

    	return redirect()->route('tenant.admin.hotel.list')->withSuccess('Invitation Sent.');

    }

    public function showContract(){
        $hotel = Hotel::find(13);
       
        $admins = $hotel->hotelAdmins->filter(function ($admin) {
            return $admin->admin->role == 7 || $admin->admin->role == 9; 
        });
        return view('tenant.admin.hotels.hotel-contract' , compact('hotel' , 'admins'));
    }
}
