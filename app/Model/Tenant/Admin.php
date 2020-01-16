<?php

namespace App\Model\Tenant;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\super_admin\Role;

class Admin extends Authenticatable
{
    protected $guarded = [];
    use Notifiable;
    protected $guard = 'admin';
 
    use UsesTenantConnection;

    public function adminRole(){

    	return $this->hasOne(Role::class , 'id' , 'role');

    }
}
