<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class AdminPasswordReset extends Model
{
	use UsesTenantConnection;
    protected $table ='admin_password_reset';

    protected $fillable = ['email' , 'token' , 'created_at'];

    public $timestamps = false;
    
}
