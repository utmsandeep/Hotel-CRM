<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class PerposalTemplate extends Model
{
   
    protected $fillable = [];
	protected $table = 'perposal_templates';
    use UsesTenantConnection;
}
