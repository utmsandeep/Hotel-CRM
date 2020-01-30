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
	protected $fillable = ['hotel_id','logo' ,'room_type','near_by', 'profile_picture' , 'hotel_four_pictures' , 'booking_policy','deposite_refund_policy','cancellation_policy','no_show_policy','kids_policy','non_residiential_policy','beverages_policy' , 'applicable_taxes' , 'lincense_permission' , 'event_booker_type' , 'event_type' , 'bank_account_detail' , 'menu_list' , 'menu_type' , 'menu_price_season'];
	protected $table = 'hotel_settings';
    use UsesTenantConnection;
    
}
