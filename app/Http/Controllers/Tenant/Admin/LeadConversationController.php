<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\Lead;

class LeadConversationController extends Controller
{
   public function storeConversation(Request $request , $hotel_code , $lead_id){
   		$request->validate([
   				"text"	=> "required"
   			]);
   		try{
	   		$lead = Lead::where('hotel_id' , hotelIdByCode($hotel_code)->id)->where('id' , $lead_id)->first();
	   		$lead->leadConversations()->create(['text'=>$request->text , "admin_id"=>auth('admin')->user()->id]);
	   		return redirect(route('tenant.admin.lead.show' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead_id])."?changed_content=1");
   		}catch(\Exception $e){
   			throw new \App\Exceptions\ResourceNotFoundException($e);
   		}
   }
   public function updateConversation(Request $request , $hotel_code , $lead_id , $conversation_id){
   		$request->validate([
   				"text"	=> "required"
   			]);
   		try{
   		$lead = Lead::where('hotel_id' , hotelIdByCode($hotel_code)->id)->where('id' , $lead_id)->first();
	   		$lead->leadConversations->where('id' , $conversation_id)->first()->update(['text'=>$request->text]);
   		return redirect(route('tenant.admin.lead.show' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead_id])."?changed_content=1");
   		}catch(\Exception $e){
   			throw new \App\Exceptions\ResourceNotFoundException($e);
   		}
   }
   public function deleteConversation(Request $request , $hotel_code , $lead_id , $conversation_id){
   		try{
	   		$lead = Lead::where('hotel_id' , hotelIdByCode($hotel_code)->id)->where('id' , $lead_id)->first();
	   		$lead->leadConversations->where('id' , $conversation_id)->first()->delete();
	   		return redirect(route('tenant.admin.lead.show' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead_id])."?changed_content=1");
   		}catch(\Exception $e){
   			throw new \App\Exceptions\ResourceNotFoundException($e);
   		}
   }
}
