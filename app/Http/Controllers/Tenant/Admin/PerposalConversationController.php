<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Perposal;

class PerposalConversationController extends Controller
{
    public function storeAdminConversation(Request $request , $hotel_code , $perposal_id){
    	$hotel = hotelIdByCode($hotel_code);
    	$request->validate([

    		'message'			=> 'required'
    	]);
    	$hotel->perposals->where('id' , $perposal_id)->first()->perposalConversationHistory()->create(['message'=>$request->message , 'messeged_by'=>1]);
    	return redirect()->route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal_id]);
    }

    public function storeClientConversation(Request $request , $hotel_code , $booking_id){
    	$hotel = hotelIdByCode($hotel_code);
    	$request->validate([

    		'message'			=> 'required'
    	]);
    	$hotel->perposals->where('booking_id' , $booking_id)->first()->perposalConversationHistory()->create(['message'=>$request->message , 'messeged_by'=>2]);
    	 return redirect()->route('tenant.showPerposal' , ['hotel_code'=>$hotel_code , 'booking_id'=>$booking_id]);
    }
}
