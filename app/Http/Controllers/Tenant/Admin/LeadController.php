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
            $hotel = hotelIdByCode($hotel_code);
	    	$lead = Lead::where('hotel_id' , $hotel->id)->where('id' , $lead_id)->first();
	    	$request_data = json_decode($lead->request_data);
    	    return view('tenant.admin.leads.lead_show' , compact('lead' , 'hotel_code' , 'request_data' , 'hotel'));
	    		
    	}
    	catch(\Exception $exception){
             \Log::error($exception);
    		 throw new \App\Exceptions\ResourceNotFoundException($exception);
    	}
    }

    public function changeLeadOwner(Request $request , $hotel_code , $lead_id ){
        //try{

            $hotel = hotelIdByCode($hotel_code);
            $lead  = Lead::where('hotel_id' , $hotel->id)->where('id' , $lead_id)->first();
            $lead->leadOwners()->first()->update(["admin_id"=> $request->admin_id]);
            return redirect()->route('tenant.admin.lead.listing' , ["hotel_code"=>$hotel_code])->withSuccess("Lead assigned to specified manager.");

        // }catch(\Exception $exception){
        //      \Log::error($exception);
        //      throw new \App\Exceptions\ResourceNotFoundException($exception);
        // }
    }
}
