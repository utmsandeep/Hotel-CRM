<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\PerposalTemplate;
use App\Model\Tenant\Admin\Perposal;
use App\Model\Tenant\Admin\Lead;
use Illuminate\Support\Str;
use App\Mail\Tenant\Admin\PerposalOtpLogin;
use App\Model\Tenant\Admin\LeadOtp;
use Mail;

class ClientPerposalController extends Controller
{
    public function perposalLoginPage(Request $request , $hotel_code ,  $booking_id){
        $hotel = hotelIdByCode($hotel_code);
        $perposal = Perposal::where(['booking_id'=>$booking_id , 'hotel_id'=>$hotel->id])->first();
        if(!empty($perposal)){
            $otp = mt_rand(100000,999999);
            $perposal->lead->otps()->create(["otp"=>$otp]);
            Mail::to($perposal->lead->email)->send(new PerposalOtpLogin($perposal , $hotel , $otp));
            return view('tenant.admin.perposal.client-perposal-login' , compact('hotel_code' , 'booking_id')); 
        }

        return "Proposal not found";                                                                                                                                               
    }

     public function perposalLogin(Request $request , $hotel_code , $booking_id){

        $request->validate([
            'otp' => 'required'
        ]);

        $hotel = hotelIdByCode($hotel_code);
        $perposal = Perposal::where(['booking_id'=>$booking_id , 'hotel_id'=>$hotel->id])->first();
        if(!empty($perposal)){
            $last_otp = LeadOtp::where('lead_id' , $perposal->lead_id)->orderBy('created_at' , 'desc')->first();
            if($last_otp->otp == (int) $request->otp)
            {
                 session(['client' => ['lead_id' =>$perposal->lead_id  , 'email' =>$perposal->lead->email , 'phone_number' =>$perposal->lead->phone_number ]]);
                 return redirect()->route('tenant.showPerposal' , ['hotel_code'=>$hotel_code , 'booking_id'=>$perposal->booking_id]);
            }

            return redirect()->back()->withErrors('Invalid OTP.');
        }

         return "Proposal not found";


    }

    public function showPerposal($hotel_code , $booking_id){
        $hotel = hotelIdByCode($hotel_code);
     	$perposal = Perposal::where('booking_id' , $booking_id)->where('hotel_id' , $hotel->id)->first();
    	if(empty($perposal))
    		die("Perposal not found.");
        $lead = Lead::find($perposal->lead_id);
        $request_data = json_decode($lead->request_data);
    	return view('tenant.admin.perposal.show-perposal-client' , compact('perposal' , 'hotel' , 'lead' , 'request_data' , 'hotel_code'));
    }

    public function updateRoomCommitmentData(Request $request , $hotel_code , $booking_id){
    	$hotel = hotelIdByCode($hotel_code);
        $perposal = Perposal::where('booking_id' , $booking_id)->where('hotel_id' , $hotel->id)->first();
        if($perposal){
             $room_data = array("date"=>$request->date , "room_type"=>$request->room_type , "room"=>$request->room , "total_room"=>$request->total_room , "price"=>$request->price);
            $perposal->update(array_merge($request->all() , ["room_commitment_data"=>json_encode($room_data) , 'isClientApproved'=>true , 'isAdminApproved'=>false]));
            $perposal->perposalRoomHistory()->update(['isActive'=>false]);

            $perposal->perposalRoomHistory()->create(["room_commitment_data"=>json_encode($room_data) , "isActive"=>true , "modified_by"=>2]);
            return redirect()->route('tenant.showPerposal' , ['hotel_code'=>$hotel_code , 'booking_id'=>$perposal->booking_id]);
        }

        return "Proposal not found.";
    }

    public function approvePerposal(Request $request , $hotel_code , $booking_id){
        $hotel = hotelIdByCode($hotel_code);
        $perposal = Perposal::where('booking_id' , $booking_id)->where('hotel_id' , $hotel->id)->first();
        if($perposal){
            $perposal->update(['isClientApproved'=>true]);
            $perposal->signature()->create(['text_signature'=>$request->text_signature]);
            return redirect()->route('tenant.showPerposal' , ['hotel_code'=>$hotel_code , 'booking_id'=>$perposal->booking_id]);
        }

        return "Proposal not found.";
    }
}
