<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tenant\Admin\LeadOtp;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Lead extends Model
{
    use UsesTenantConnection;

    public function otps(){
    	
    	return $this->hasMany(LeadOtp::class , 'lead_id' , 'id');
    }
}
