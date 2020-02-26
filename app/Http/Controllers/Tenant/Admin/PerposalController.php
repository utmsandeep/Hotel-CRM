<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\PerposalTemplate;
use App\Model\Tenant\Admin\Perposal;
use App\Model\Tenant\Admin\Lead;
use Illuminate\Support\Str;
use App\Mail\Tenant\Admin\PerposalOtpLogin;
use App\Mail\Tenant\Admin\PerposalGeneratedMail;
use App\Mail\Tenant\Admin\PerposalRoomPriceChangedAdminMail;
use App\Model\Tenant\Admin\LeadOtp;
use Mail;

class PerposalController extends Controller
{
    public function index($hotel_code){
        $perposals = Perposal::where('hotel_id' , hotelIdByCode($hotel_code)->id)->orderBy('id' , 'desc')->paginate(10);
        return view('tenant.admin.perposal.perposal_listing' , compact('perposals' , 'hotel_code'));
    }
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
    	$perposal = Perposal::create(array_merge($temarr , ["room_commitment_data"=>json_encode($room_data) , 'lead_id'=>$lead_id , 'hotel_id'=>hotelIdByCode($hotel_code)->id , 'booking_id'=>Str::random(15) , 'isAdminApproved'=>true , 'isClientApproved'=>false]));
        $perposal->perposalRoomHistory()->create(["room_commitment_data"=>json_encode($room_data) , "isActive"=>true , "modified_by"=>1]);

        $detail = [
            "perposal"=>$perposal,
            "url" => route('tenant.showPerposal' , ['hotel_code'=>$hotel_code , 'booking_id'=>$perposal->booking_id]),
            "to"  => $perposal->lead->email

        ];
        Mail::to($perposal->lead->email)->send(new PerposalGeneratedMail($detail));
        return redirect()->route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]);
    }

    public function updateRoomCommitmentData(Request $request , $hotel_code , $perposal_id){
        $perposal = Perposal::findOrFail($perposal_id);
        if($perposal){
             $room_data = array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price);
            $perposal->update(array_merge($request->all() , ["room_commitment_data"=>json_encode($room_data) , 'isAdminApproved'=>true , 'isClientApproved'=>false]));
            $perposal->perposalRoomHistory()->update(['isActive'=>false]);

            $perposal->perposalRoomHistory()->create(["room_commitment_data"=>json_encode($room_data) , "isActive"=>true , "modified_by"=>1 ]);
            
             $detail = [
            "perposal"=>$perposal,
            "url" => route('tenant.showPerposal' , ['hotel_code'=>$hotel_code , 'booking_id'=>$perposal->booking_id]),
            "to"  => $perposal->lead->email

        ];
        Mail::to($perposal->lead->email)->send(new PerposalRoomPriceChangedAdminMail($detail));
            return redirect()->route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]);
        }

        return "Proposal not found.";
    }

    public function approvePerposal(Request $request , $hotel_code , $perposal_id){
        $perposal = Perposal::findOrFail($perposal_id);
        if($perposal){
            $perposal->update(['isAdminApproved'=>true]);
            return redirect()->route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]);
        }
        return "Proposal not found.";
    }

    public function fetchPolicies(Request $request , $hotel_code){
        if(is_array($request->policy_names)){
            $hotel = hotelIdByCode($hotel_code);
            $policies = [];
            foreach(json_decode($hotel->hotelSetting->policies , true) as $key => $policy)
                {   
                    if(!in_array(strtolower(str_replace(' ' , '_' ,$policy['policy_name'])), $request->policy_names))
                        continue;
                    $policies = array_merge($policies , [strtolower(str_replace(' ' , '_' ,$policy['policy_name'])) => $policy['policy_detail']]);
                }
            return json_encode($policies);
        }

        return json_encode([]);
    }

    public function delete($hotel_code , $perposal_id){
        
        $perposal = Perposal::where('hotel_id' , hotelIdByCode($hotel_code)->id)->where('id' , $perposal_id)->delete();
        return redirect()->route('tenant.admin.perposal.listing' , ['hotel_code'=>$hotel_code])->withSuccess('Proposal Deleted!');
    }


}
