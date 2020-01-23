<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelSettingController extends Controller
{
    public function upload($hotel_code){
        return view('tenant.admin.hotel-setting.upload-logo' , compact('hotel_code'));
    }

    public function storeupload(Request $request , $hotel_code){
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:5000',
        ]);
        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $logoname = time().'.'.$image->getClientOriginalExtension();
            $route = explode('/',request()->root());
            $subroute = explode('.',$route[2]);
            $destinationPath = storage_path('app/'.$subroute[0].'/profile');
            $image->move($destinationPath,$logoname);
            // Hotel::where('hotel_code',$hotel_code)
            // ->update(['logo'=>$logoname]);
            return redirect()->route('tenant.admin.hotelSetting.upload')->withSuccess('Profile photo uploaded successfully');
        }
    }

    public function type($hotel_code){
        return view('tenant.admin.hotel-setting.room-type' , compact('hotel_code'));
    }

    public function picture($hotel_code){
        return view('tenant.admin.hotel-setting.profile-pic' ,compact('hotel_code'));
    }

    public function nearby($hotel_code){
        return view('tenant.admin.hotel-setting.hotel-near' , compact('hotel_code'));
    }

    public function booking($hotel_code){
        return view('tenant.admin.hotel-setting.booking-policy' , compact('hotel_code'));
    }

    public function policy($hotel_code){
        return view('tenant.admin.hotel-setting.deposite-refund' , compact('hotel_code'));
    }

    public function cancel($hotel_code){
        return view('tenant.admin.hotel-setting.cancel-policy' , compact('hotel_code'));
    }

    public function none($hotel_code){
        return view('tenant.admin.hotel-setting.no-show-policy' , compact('hotel_code'));
    }

    public function kids($hotel_code){
        return view('tenant.admin.hotel-setting.kids-policy' ,  compact('hotel_code'));
    }

    public function resident($hotel_code){
        return view('tenant.admin.hotel-setting.non-residential' , compact('hotel_code'));
    }

    public function beverages($hotel_code){
        return view('tenant.admin.hotel-setting.beverages-policy' , compact('hotel_code'));
    }

    public function listing($hotel_code){
        return view('tenant.admin.hotel-setting.banquet-list' , compact('hotel_code'));
    }

    public function create($hotel_code){
        return view('tenant.admin.hotel-setting.banquet-create', compact('hotel_code'));
    }
}
