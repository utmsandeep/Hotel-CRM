<?php

namespace App\Model\Tenant;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Equipment extends Model
{
    protected $guarded = [];
    protected $table = 'equipments';

    use UsesTenantConnection;
}
