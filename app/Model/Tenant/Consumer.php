<?php

namespace App\Model\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Support\Facades\Hash;

class Consumer extends Model
{
	protected $guarded = [];

    use UsesTenantConnection;

    public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}
}
