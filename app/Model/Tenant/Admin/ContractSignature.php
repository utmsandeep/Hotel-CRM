<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\Hotel;
use App\Model\Tenant\Admin\HotelContract;

class ContractSignature extends Model
{
	use UsesTenantConnection;
    protected $table = 'contract_signatures';
    protected $fillable = ['hotel_id' , 'hotel_contract_id' , 'admin_id' ,'sign' ,'role' , 'signature'];

    public function hotelContract(){

    	return $this->belongsTo(HotelContract::class);
    }
    public function hotel(){

    	return $this->belongsTo(Hotel::class);
    }
}
