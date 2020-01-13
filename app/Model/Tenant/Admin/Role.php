<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;


class Role extends Model
{
    protected $guarded = [];
    use UsesTenantConnection;
}
