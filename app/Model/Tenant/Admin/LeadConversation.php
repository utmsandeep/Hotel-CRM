<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\Lead;
use App\Model\Tenant\Admin;
class LeadConversation extends Model
{
    use UsesTenantConnection;
    protected $fillable = ['lead_id' , 'admin_id' , 'text' , 'parent'];

    public function lead(){
    	return $this->belongsTo(Lead::class);
    }
    public function admin(){
    	return $this->belongsTo(Admin::class);
    }
}
