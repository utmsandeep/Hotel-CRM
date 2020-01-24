<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\HotelAdmin;
use Illuminate\Notifications\Notifiable;

class HotelSetting extends Model
{
    //
	use Notifiable;
	protected $fillable = ['hotel_id','logo' , 'profile_picture' , 'hotel_four_pictures' , 'booking_policy','deposite_refund_policy','cancellation_policy','no_show_policy','kids_policy','non_residiential_policy','beverages_policy'];
	protected $table = 'hotel_settings';
    use UsesTenantConnection;
    
}
