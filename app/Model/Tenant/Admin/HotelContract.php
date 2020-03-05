<?php

namespace App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Hotel;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\ContractSignature;

class HotelContract extends Model
{
    use UsesTenantConnection;

    protected $fillable = ['hotel_id' , 'content'];

    public function hotel(){
    	return $this->belongsTo(Hotel::class);
    }

    public function contractSignatures(){
    	return $this->hasMany(ContractSignature::class);
    }
}
