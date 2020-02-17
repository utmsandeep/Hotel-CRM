<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tenant\Admin\PerposalRoomHistory;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Perposal extends Model
{
    use UsesTenantConnection;
    protected $fillable = ['consumer_id' , 'hotel_id' , 'lead_id' , 'booking_id' , 'room_commitment_data' , 'greeting' ,
     'g_c_sales_agreement' , 'guest_room_commitment' , 'payment_packages_other' , 'current_applicable_taxes' , 'permission_for_event' , 'damage_payment' , 'deposite' , 'refunds_cancellation' , 'changes_acceptance' , 'bottom_signature'
	];
    protected $table = "perposals";

    public function perposalRoomHistory(){
    	return $this->hasMany(PerposalRoomHistory::class , 'perposal_id' , 'id');
    }


}

