<?php
namespace App\super_admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesSystemConnection;
class BusinessOwner extends Model
{
	//use UsesSystemConnection;
    protected $guarded = [];

    protected $table = "business_owners";
}
