<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\HotelAdmin;
use Illuminate\Notifications\Notifiable;

class Hotel extends Model
{
	use Notifiable;
	
    protected $fillable = ['name' , 'region' , 'cluster_manager' , 'general_manager' , 'director_of_sales' , 'coordinator' , 'hotel_code' , 'address' , 'pan_card' , 'gst_no'];
    
    use UsesTenantConnection;

    public function clusterManager(){

    	return $this->hasOne(Admin::class , 'id' , 'cluster_manager');
    }

    public function generalManager(){

    	return $this->hasOne(Admin::class , 'id' , 'general_manager');
    }

    public function DirectorOfSales(){

    	return $this->hasOne(Admin::class , 'id' , 'director_of_sales');
    }

    public function Coordinator(){

    	return $this->hasOne(Admin::class , 'id' , 'coordinator');
    }

    public function hotelAdmins(){
        return $this->hasMany(HotelAdmin::class , 'hotel_id' , 'id');
    }
}
