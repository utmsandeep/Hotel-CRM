<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin\Lead;
use App\Model\Tenant\Admin;
use Carbon\Carbon;
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
    public function getCreatedAtAttribute($value){
    	$now = Carbon::now();
    	$commented_date = Carbon::parse($value)->format('M d');
    	$seconds = $now->diffInSeconds($commented_date);
    	if($seconds < 60)
    		return $seconds." a few moment ago";
    	$minuts = $now->diffInMinutes($commented_date);
    	if($minuts < 60)
    		return $minuts." minutes ago";
    	$hours = $now->diffInHours($commented_date);
    	if($hours < 24)
    		return $hours." hours ago";

    	return $commented_date;
    }
}
