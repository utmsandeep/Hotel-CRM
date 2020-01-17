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
    protected $guard = 'admin';
 
    use UsesTenantConnection;
    use Notifiable;
    
    public function adminRole(){

    	return $this->hasOne(Role::class , 'id' , 'role');

    }
}
