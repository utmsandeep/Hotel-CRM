<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\Perposal;
use Carbon\Carbon;

class PerposalConversationHistory extends Model
{
    use UsesTenantConnection;

    protected $table = 'perposal_conversation_history';
    protected $fillable = ['perposal_id' , 'messeged_by' , 'message' , 'created_at' , 'updated_at'];

    public function perposal(){

    	return $this->belongsTo(Perposal::class);
    }

    public function getCreatedAtAttribute($value){
    	return  Carbon::parse($value)->format('M d Y H:i');
    }
}
