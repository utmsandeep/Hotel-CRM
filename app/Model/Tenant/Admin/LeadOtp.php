<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tenant\Admin\Lead;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class LeadOtp extends Model
{
    use UsesTenantConnection;
    protected $fillable = ['lead_id','otp'];
	protected $table = 'leads_otp';

	public function lead(){

		return $this->belongsTo(Lead::class , 'id' , 'lead_id');
	}
}
