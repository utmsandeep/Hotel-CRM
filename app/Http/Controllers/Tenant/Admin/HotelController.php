<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\super_admin\Role;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Hotel;
use App\Notifications\Tenant\Admin\NewHotelNotification;

class HotelController extends Controller
{
    public function index(){
    	$hotels  = Hotel::paginate(10);
    	return view('tenant.admin.hotels.hotels' , compact('hotels'));
    }

    public function create(){
    	$staff = Admin::get();
    	return view('tenant.admin.hotels.hotel-create'  , compact('staff') );
    }

    public function store(Request $request){

    	$request->validate([
    		'name'       		=>	'bail|required',
    		'region'			=>	'bail|required',
    		'cluster_manager'	=>	'bail|required|numeric',
    		'general_manager'	=>	'bail|required|numeric',
    		'director_of_sales'	=>	'bail|required|numeric',
    		'coordinator'		=>	'bail|required|numeric',
    	]);

    	$hotel = Hotel::create($request->all());
    	$hotelData = $hotel;
    	$notifyHotel = $hotel->load('clusterManager' , 'generalManager' , 'DirectorOfSales' , 'Coordinator');
        $url = route('tenant.admin.hotel.show-form');
    	$notifyHotel->clusterManager->notify(new NewHotelNotification($hotelData , $url));
        $notifyHotel->generalManager->notify(new NewHotelNotification($hotelData , $url));
        $notifyHotel->DirectorOfSales->notify(new NewHotelNotification($hotelData , $url));
        $notifyHotel->Coordinator->notify(new NewHotelNotification($hotelData , $url));
    	return redirect()->route('tenant.admin.hotel.list')->withSuccess('Invitation Sent.');

    }
}
