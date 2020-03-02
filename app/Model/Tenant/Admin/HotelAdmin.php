<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Hotel;
class HotelAdmin extends Model
{
    use UsesTenantConnection;
    protected $guarded = [];
    protected $table = 'admin_hotels';

    public function admin(){

    	return $this->belongsTo(Admin::class);
    }

    public function Hotel(){

    	return $this->belongsTo(Hotel::class);
    }
}