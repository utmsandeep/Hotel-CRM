<?php
use Hyn\Tenancy\Models\Website;
use App\super_admin\BusinessOwner;
use App\Model\Tenant\Admin\HotelAdmin;
use App\Model\Tenant\Admin\Hotel;
if (! function_exists('lookfortenant')) {
    function lookfortenant($slug) {
    	$website = Website::where('uuid' , $slug)->first();
    	if(!empty($website)){

            $owner = BusinessOwner::where('subdomain' , $slug)->where('isBlocked' , 0)->first();

            if(!empty($owner)){
                
               return true; 
            }

    		// config(['database.connections.tenant.database' => $website->uuid]);
    		// config(['database.default' => 'tenant']);
    		// DB::purge('mysql');

    		
    	}
        return false;
    }
}

if(! function_exists('adminAsignedHotels')){
    function adminAsignedHotels(){
       $hotels = HotelAdmin::where('admin_id' , auth('admin')->user()->id)->get();
        $hotels = $hotels->unique('hotel_id'); 
        return $hotels;
    }
}

if(! function_exists('hotelIdByCode')){
    function hotelIdByCode($hotel_code){
        return Hotel::where('hotel_code' , $hotel_code)->first();
    }
}