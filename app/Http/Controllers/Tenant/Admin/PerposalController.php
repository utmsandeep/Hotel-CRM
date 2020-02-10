<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\PerposalTemplate;
use App\Model\Tenant\Admin\Perposal;
use App\Model\Tenant\Admin\Lead;

class PerposalController extends Controller
{
    public function showPerposalTemplate($lead_id){
        $template = PerposalTemplate::first();
        $lead = Lead::find($lead_id);
        if(!$lead)
            return redirect()->back()->withErrors("Sorry , Lead not found.");

    	return view('tenant.admin.perposal.perposal-template' , compact('template' , 'lead'));
    }
    public function editPerposal($booking_id){
    	$perposal = Perposal::where('booking_id' , $booking_id)->first();
    	if(empty($perposal))
    		die("Perposal not found.");
    	return view('tenant.admin.perposal.edit-perposal');
    }
     public function showPerposal($booking_id){
     	$perposal = Perposal::where('booking_id' , $booking_id)->first();
    	if(empty($perposal))
    		die("Perposal not found.");
    	//  var_dump(json_decode($perposal->room_commitment_data));
    	//  die;
    	// return json_decode($perposal->room_commitment_data->price);
    	return view('tenant.admin.perposal.show-perposal' , compact('perposal'));
    }

    public function storePerposal(Request $request , $lead_id){
    	
    	
    	$room_data = array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price);
    	Perposal::create(array_merge($request->all() , ["room_commitment_data"=>json_encode($room_data)]));

    	dd(json_decode(json_encode ($room_data)) , true);



    	return json_encode (array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price));
    }
}
