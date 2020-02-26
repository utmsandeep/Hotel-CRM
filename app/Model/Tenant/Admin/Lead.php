<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tenant\Admin\LeadOtp;
use App\Model\Tenant\Admin\Hotel;
use App\Model\Tenant\Admin\LeadOwner;
use App\Model\Tenant\Admin\LeadConversation;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Carbon\Carbon;

class Lead extends Model
{
    use UsesTenantConnection;

    public function otps(){
    	
    	return $this->hasMany(LeadOtp::class , 'lead_id' , 'id');
    }

    public function hotel(){
    	return $this->belongsTo(Hotel::class);
    }

    public function getCreatedAtAttribute($value){
    	return  Carbon::parse($value)->format('M d Y H:i');
    }
    public function leadOwners(){

    	return $this->hasMany(LeadOwner::class);
    }

    public function leadConversations(){

    	return $this->hasMany(LeadConversation::class);
    }
}
