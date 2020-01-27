<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\HotelSetting;

class HotelSettingController extends Controller
{
    public function upload($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.upload-logo' , compact('hotel_code'));
    }

    public function storeupload(Request $request , $hotel_code){
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:5000',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:5000',
            'hotel_four_pictures' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:5000',
        ]);
        $profilename='';$hotelpic='';
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
        if($request->hasFile('logo')){
        	//to get subdomain
        	$route = explode('/',request()->root());
            $subroute = explode('.',$route[2]);

            //save logo
            $image = $request->file('logo');
            $logoname = 'logo'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = storage_path('app/'.$subroute[0].'/logo');
            $image->move($destinationPath,$logoname);
        }
        if($request->hasFile('profile_picture')){
        	$profile_picture = $request->file('profile_picture');
        	$profilename = 'profile'.time().'.'.$profile_picture->getClientOriginalExtension();
            $destinationPath = storage_path('app/'.$subroute[0].'/profile');
            $profile_picture->move($destinationPath,$logoname);
        }
        if($request->hasFile('hotel_four_pictures')){
        	$hotel_four_pictures = $request->file('hotel_four_pictures');
        	$names = [];
		    foreach($request->file('hotel_four_pictures') as $hotel_four_pictures)
		    {
		        $destinationPath = storage_path('app/'.$subroute[0].'/hotelpic');
		        $hotelpicname = 'hotelpicname'.time().'.'.$hotel_four_pictures->getClientOriginalExtension();
		        $hotel_four_pictures->move($destinationPath, $hotelpicname);
		        array_push($names, $hotelpicname);
		    }
		    $hotelpic = json_encode($names);
        }

        if(!empty($hotelsetting)){
       		$hotelsetting->update(['hotel_id'=>$hotel->id, 'logo'=>$logoname,'profile_picture'=>$profilename,'hotel_four_pictures'=>$hotelpic]);
        }
        else{
        	HotelSetting::insert(['hotel_id'=>$hotel->id, 'logo'=>$logoname,'profile_picture'=>$profilename,'hotel_four_pictures'=>$hotelpic]);
        }
        return back()->withSuccess('Photos uploaded successfully');
    }

     public function type($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.room-type' , compact('hotel_code','hotelsetting'));
    }

     public function typeofroom(Request $request , $hotel_code){
            $hotel = hotelIdByCode($hotel_code);
            $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
    
            $data = $request->all();
            $temarr = [];
                for($i = 0 ; $i<count($data['room_type']) ; $i++){
                $temarr[] = [
                        "room_type"=>$data['room_type'][$i],
                        "numberroom"=>$data['numberroom'][$i]
                        ];
                }
            $tem = json_encode($temarr);
            if(!empty($hotelsetting)){
                   $hotelsetting->update(['room_type'=>$tem]);
                   return back()->withSuccess('Room type detail updated successfully');
            }
            else{
                HotelSetting::create(['room_type'=>$tem]);
                return back()->withSuccess('Room type detail added successfully');
            }
    }
    

    public function picture($hotel_code){
        return view('tenant.admin.hotel-setting.profile-pic' ,compact('hotel_code'));
    }

    public function nearby($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.hotel-near' , compact('hotel_code','hotelsetting'));
    }

    public function policy($hotel_code){
    	$hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.policy' , compact('hotel_code','hotelsetting'));
    }

    public function savepolicy(Request $request, $hotel_code){
 
    	$hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

        if(!empty($hotelsetting)){
        	$hotelsetting->update($request->all());
        }else{
        	HotelSetting::create(array_merge($request->all(),['hotel_id'=>$hotel->id]));
        }
        return back()->withSuccess('All Policies add successfully');
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
