<?php

namespace App\Model\super_admin;
use Hyn\Tenancy\Traits\UsesSystemConnection;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	use UsesSystemConnection;
	
    protected $fillable = ['name' , 'description' , 'created_by' , 'updated_by' , 'is_super' , 'base'];
}
