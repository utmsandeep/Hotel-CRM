<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\HotelSetting;

class HotelSettingsTemController extends Controller
{
    //
    public function storenearby(Request $request , $hotel_code){
    	$hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

    	$data = $request->all();
    	$temarr = [];
			for($i = 0 ; $i<count($data['name']) ; $i++){
			$temarr[] = [
					"name"=>$data['name'][$i],
					"distance"=>$data['distance'][$i],
					"time"=>$data['time'][$i]
					];
			} 
		$tem = json_encode($temarr);
		if(!empty($hotelsetting)){
       		$hotelsetting->update(['near_by'=>$tem]);
       		return back()->withSuccess('Near By Places updated successfully');
        }
        else{
        	HotelSetting::create(['near_by'=>$tem]);
        	return back()->withSuccess('Near By Places added successfully');
        }
    }

    public function importHotelSettings($hotel_code){

        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
        return view('tenant.admin.hotel-setting.import-hotel-setting' , compact('hotel_code' , 'hotelsetting'));

    }

    public function importHotelSettingsStore(Request $request , $hotel_code){

        return $request;

    }
}
