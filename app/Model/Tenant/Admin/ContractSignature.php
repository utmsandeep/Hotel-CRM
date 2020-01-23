<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class ContractSignature extends Model
{
	use UsesTenantConnection;
    protected $table = 'contract_signatures';
    protected $fillable = ['hotel_id' , 'admin_id' , 'role' , 'signature'];
}
