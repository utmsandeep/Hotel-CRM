<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\PerposalTemplate;
use App\Model\Tenant\Admin\Perposal;
use App\Model\Tenant\Admin\Lead;
use Illuminate\Support\Str;

class PerposalController extends Controller
{
    public function showPerposalTemplate($hotel_code  , $lead_id){
        $template = PerposalTemplate::first();
        $lead = Lead::find($lead_id);
        $hotel = hotelIdByCode($hotel_code);
        if(!$lead){
            return redirect()->back()->withErrors("Sorry , Lead not found.");
        }
        $request_data = json_decode($lead->request_data);
    	return view('tenant.admin.perposal.perposal-template' , compact('template' , 'lead' , 'hotel' , 'request_data' , 'hotel_code'));
    }
    public function editPerposal($hotel_code , $booking_id ){
    	$perposal = Perposal::where('booking_id' , $booking_id)->first();
    	if(empty($perposal))
    		die("Perposal not found.");
    	return view('tenant.admin.perposal.edit-perposal');
    }
    public function showPerposal($hotel_code , $perposal_id){
        $hotel = hotelIdByCode($hotel_code);
     	$perposal = Perposal::where('id' , $perposal_id)->where('hotel_id' , $hotel->id)->first();
    	if(empty($perposal))
    		die("Perposal not found.");
        $lead = Lead::find($perposal->lead_id);
        $request_data = json_decode($lead->request_data);
    	return view('tenant.admin.perposal.show-perposal' , compact('perposal' , 'hotel' , 'lead' , 'request_data' , 'hotel_code'));
    }

    public function storePerposal(Request $request  , $hotel_code  , $lead_id){
    	
    	
    	$room_data = array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price);
        $temarr = array();
        foreach($request->all() as $key => $value){
            if(!is_array($value))
            $temarr = array_merge($temarr , [$key => html_entity_decode($value)]);
        }
        // Perposal::create(["payment_packages_other"=>$request->payment_packages_other]);
    	$perposal = Perposal::create(array_merge($temarr , ["room_commitment_data"=>json_encode($room_data) , 'lead_id'=>$lead_id , 'hotel_id'=>hotelIdByCode($hotel_code)->id , 'booking_id'=>Str::random(15)]));
        $perposal->perposalRoomHistory()->create(["room_commitment_data"=>json_encode($room_data) , "isActive"=>true , "modified_by"=>1]);
        return redirect()->route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]);

    	// return json_encode (array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price));
    }

    public function updateRoomCommitmentData(Request $request , $hotel_code , $perposal_id){
        $perposal = Perposal::findOrFail($perposal_id);
        if($perposal){
             $room_data = array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price);
            $perposal->update(array_merge($request->all() , ["room_commitment_data"=>json_encode($room_data)]));
            $perposal->perposalRoomHistory()->update(['isActive'=>false]);

            $perposal->perposalRoomHistory()->create(["room_commitment_data"=>json_encode($room_data) , "isActive"=>true , "modified_by"=>1]);
            return redirect()->route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]);
        }

        return "Proposal not found.";
    }

    public function perposalLoginPage(Request $request , $hotel_code ,  $booking_id){

        return view('tenant.admin.perposal.client-perposal-login');                                                                                                                                                
    }

     public function perposalLogin(Request $request , $hotel_code , $booking_id){



    }

    public function showClientPerposal(Request $request , $hotel_code , $booking_id){



    }

    public function updateClientRoomCommitmentData(Request $request , $hotel_code , $booking_id){



    }
}
