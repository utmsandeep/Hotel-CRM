<?php

namespace App\Model\Tenant\Admin;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\HotelAdmin;
use Illuminate\Notifications\Notifiable;

class HotelBanquet extends Model
{
	use Notifiable;
	protected $fillable = ['name','hotel_id','width_ft' ,'length_ft','height_ft','area_sq_ft','no_of_entry_point', 'is_separate_entrance' , 'pictures' , 'seating_style','sort_description','long_description','hotel_picture'];
	protected $table = 'hotel_banquets';
	use UsesTenantConnection;
}
