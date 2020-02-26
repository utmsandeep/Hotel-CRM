<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tenant\Admin\PerposalRoomHistory;
use App\Model\Tenant\Admin\PerposalConversationHistory;
use App\Model\Tenant\Admin\Lead;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\PerposalSignature;
use Carbon\Carbon;
class Perposal extends Model
{
    use UsesTenantConnection;
    protected $fillable = ['consumer_id' , 'hotel_id' , 'lead_id' , 'booking_id' , 'room_commitment_data' , 'greeting' ,
     'g_c_sales_agreement' , 'guest_room_commitment' , 'payment_packages_other' , 'current_applicable_taxes' , 'permission_for_event' , 'damage_payment' , 'deposite' , 'refunds_cancellation' , 'changes_acceptance' , 'bottom_signature' , 'isAdminApproved' , 'isClientApproved'
	];
    protected $table = "perposals";



    public function perposalRoomHistory(){
        
    	return $this->hasMany(PerposalRoomHistory::class , 'perposal_id' , 'id')->orderBy('id' , 'desc');
    }

    public function perposalConversationHistory(){
        
        return $this->hasMany(PerposalConversationHistory::class , 'perposal_id' , 'id')->orderBy('id' , 'asc');
    }

    public function lead(){
    	return $this->belongsTo(Lead::class);
    }

    public function signature(){
        return $this->hasOne(PerposalSignature::class);
    }
    public function getCreatedAtAttribute($value){
        return  Carbon::parse($value)->format('M d Y H:i');
    }


}

