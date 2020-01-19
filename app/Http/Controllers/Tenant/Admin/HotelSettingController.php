<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelSettingController extends Controller
{
    public function upload(){
        return view('tenant.admin.hotel-setting.upload-logo');
    }

    public function type(){
        return view('tenant.admin.hotel-setting.room-type');
    }

    public function picture(){
        return view('tenant.admin.hotel-setting.profile-pic');
    }

    public function nearby(){
        return view('tenant.admin.hotel-setting.hotel-near');
    }

    public function booking(){
        return view('tenant.admin.hotel-setting.booking-policy');
    }

    public function policy(){
        return view('tenant.admin.hotel-setting.deposite-refund');
    }

    public function cancel(){
        return view('tenant.admin.hotel-setting.cancel-policy');
    }

    public function none(){
        return view('tenant.admin.hotel-setting.no-show-policy');
    }

    public function kids(){
        return view('tenant.admin.hotel-setting.kids-policy');
    }

    public function resident(){
        return view('tenant.admin.hotel-setting.non-residential');
    }

    public function beverages(){
        return view('tenant.admin.hotel-setting.beverages-policy');
    }

    public function listing(){
        return view('tenant.admin.hotel-setting.banquet-list');
    }

    public function create(){
        return view('tenant.admin.hotel-setting.banquet-create');
    }
}
