<?php

namespace App\Model\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Admin extends Model
{
    protected $guarded = [];
    use UsesTenantConnection;

}
