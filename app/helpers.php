<?php
use Hyn\Tenancy\Models\Website;
use App\super_admin\BusinessOwner;
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