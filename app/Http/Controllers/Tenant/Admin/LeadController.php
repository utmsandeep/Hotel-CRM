<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\Lead;

class LeadController extends Controller
{
    public function index($hotel_code){

    	$leads = Lead::where('hotel_id' , hotelIdByCode($hotel_code)->id)->orderBy('id' , 'desc')->paginate(10);
    	return view('tenant.admin.leads.lead_listing' , compact('leads' , 'hotel_code'));

    }

    public function show($hotel_code , $lead_id){
    	try{
	    	$lead = Lead::where('hotel_id' , hotelIdByCode($hotel_code)->id)->where('id' , $lead_id)->first();
	    	$request_data = json_decode($lead->request_data);
    	    return view('tenant.admin.leads.lead_show' , compact('lead' , 'hotel_code' , 'request_data'));
	    		
    	}
    	catch(\Exception $exception){
    		 throw new \App\Exceptions\ResourceNotFoundException($exception);
    	}
    	

    }
}
