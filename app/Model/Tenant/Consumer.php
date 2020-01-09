<?php

namespace App\Model\Tenant;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Support\Facades\Hash;

class Consumer extends Authenticatable
{
	protected $guarded = [];

	use Notifiable;
    protected $guard = 'consumer';
 
    use UsesTenantConnection;

    public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}
}
