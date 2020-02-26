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

    	$lead = Lead::where('hotel_id' , hotelIdByCode($hotel_code)->id)->where('id' , $lead_id)->first();
    	return view('tenant.admin.leads.lead_show' , compact('lead' , 'hotel_code'));
    }
}
