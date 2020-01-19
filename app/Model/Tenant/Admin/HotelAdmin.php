<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Hotel;
class HotelAdmin extends Model
{
    use UsesTenantConnection;
    protected $table = 'admin_hotels';
    protected $guarded = [];
}
