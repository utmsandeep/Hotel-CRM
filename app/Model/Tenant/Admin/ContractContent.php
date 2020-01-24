<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class ContractContent extends Model
{
    protected $fillable = ['content' , 'hotel_id'];
	protected $table = 'contract_contents';
    use UsesTenantConnection;
}
