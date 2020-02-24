<?php

namespace App\Model\Tenant;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Food extends Model
{
    protected $guarded = [];
    protected $table = 'foods';

    use UsesTenantConnection;
}