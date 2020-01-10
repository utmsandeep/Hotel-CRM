<?php

namespace App\Model\Tenant;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Admin extends Authenticatable
{
    protected $guarded = [];
    use Notifiable;
    protected $guard = 'admin';
 
    use UsesTenantConnection;

}
