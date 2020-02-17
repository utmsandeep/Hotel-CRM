<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tenant\Admin\Perposal;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class PerposalRoomHistory extends Model
{
	use UsesTenantConnection;
    protected $fillable = ['perposal_id','room_commitment_data' , 'isActive' , 'modified_by'];
	protected $table = 'perposal_room_history';

	public function perposal(){

		return $this->belongsTo(Perposal::class , 'id' , 'perposal_id');
	}
   
}
