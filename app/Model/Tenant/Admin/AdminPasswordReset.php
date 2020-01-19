<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class AdminPasswordReset extends Model
{
    protected $table ='admin_password_reset';

    protected $fillable = ['email' , 'token' , 'created_at'];
    
    use UsesTenantConnection;
}
