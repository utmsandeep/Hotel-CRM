<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\Perposal;
class PerposalSignature extends Model
{
    use UsesTenantConnection;
    protected $fillable = ['consumer_id' , 'perposal_id' , 'signature' , 'text_signature'];
    protected $table = 'perposal_signatures';

    public function perposal(){
    	return $this->belongsTo(Perposal::class);
    }
}
