<?php

namespace App\Model\super_admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name' , 'description' , 'created_by' , 'updated_by' , 'is_super' , 'base'];
}
