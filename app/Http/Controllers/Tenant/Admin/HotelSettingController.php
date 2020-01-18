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
}
