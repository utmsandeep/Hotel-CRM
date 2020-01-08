<?php

namespace App\Model\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Consumer extends Model
{
    use UsesTenantConnection;
}
