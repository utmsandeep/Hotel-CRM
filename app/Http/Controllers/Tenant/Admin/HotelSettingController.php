<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use App\Model\Tenant\Admin\HotelBanquet;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\HotelSetting;

class HotelSettingController extends Controller
{

    /*-----------------------Upload-logo-----------------------------*/

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

/*---------------------------Import-Setting-------------------------*/

    public function importHotelSettings($hotel_code){

        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
        return view('tenant.admin.hotel-setting.import-hotel-setting' , compact('hotel_code' , 'hotelsetting'));

    }

    public function importHotelSettingsStore(Request $request , $hotel_code){

        return $request;

    }

/*----------------------------Menu-Price--------------------------*/

    public function pricemenu($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.menu-price' , compact('hotel_code','hotelsetting'));
    }


    public function prices(Request $request , $hotel_code){
        $request->validate([
    	 	   'menu_name'      =>	'required|array|min:1',
               'menu_name.*'      =>	'required'
    	 ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

        $data = $request->all();
        $temarr = [];
        for($i = 0 ; $i<count($data['menu_name']) ; $i++){
            $temarr[] = [
                "menu_name"=>$data['menu_name'][$i],
                "price"=>$data['price'][$i],
                "res"=>$data['res'][$i],
                "kids"=>$data['kids'][$i],
                "start_date"=>$data['start_date'][$i],
                "end_date"=>$data['end_date'][$i],
                "tax"=>$data['tax'][$i],
                "override"=>$data['override'][$i],
            ];
        }
        $tem = json_encode($temarr);
        if(!empty($hotelsetting)){
            $hotelsetting->update(['menu_price_season'=>$tem]);
            return back()->withSuccess('Menu Price Season updated successfully');
        }
        else{
            HotelSetting::create(array_merge(['menu_price_season'=>$tem] , ['hotel_id'=>$hotel->id]));
            return back()->withSuccess('Menu Price Season added successfully');
        }
    }

    /*---------------------------Bank-Account-Detail------------------*/

    public function showdetail($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.account-detail' , compact('hotel_code','hotelsetting'));
    }

    public function detail(Request $request , $hotel_code){
        $request->validate([
            'account_name' => 'required|min:1',
	        'account_name' => 'required',
	        'account_number' => 'required',
	        'bank_name' => 'required',
	        'account_type' => 'required',
	        'ifsc_code' => 'required',
	        'micr_code' => 'required',
	        'bsr_code' => 'required',
	        'address' => 'required',
	        'branch_code' => 'required',
	        'branch_name' => 'required'
        ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

        $data = $request->all();
        $temarr = [];
//        for($i = 0 ; $i<count($data['account_name']) ; $i++){
            $temarr[] = [
                "account_name"    =>$data['account_name'],
                "account_number" =>$data['account_number'],
                "bank_name"        =>$data['bank_name'],
                "account_type"      =>$data['account_type'],
                "ifsc_code"            =>$data['ifsc_code'],
                "micr_code"          =>$data['micr_code'],
                "bsr_code"            =>$data['bsr_code'],
                "address"              =>$data['address'],
                "branch_code"       =>$data['branch_code'],
                "branch_name"      =>$data['branch_name']
            ];
//        }
        $tem = json_encode($temarr);
        if(!empty($hotelsetting)){
            $hotelsetting->update(['bank_account_detail'=>$tem]);
            return back()->withSuccess('Bank Account Detail updated successfully');
        }
        else{
            HotelSetting::create(array_merge(['bank_account_detail'=>$tem] , ['hotel_id'=>$hotel->id]));
            return back()->withSuccess('Bank Account Detail added successfully');
        }
    }

    /*----------------------------Menu-Type-------------------------*/

    public function showmenu($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.menu-type' , compact('hotel_code','hotelsetting'));
    }

    public function variety(Request $request , $hotel_code){
        $request->validate([
            'int_name'      =>	'required|array|min:1',
            'int_name.*'    =>	'required'
        ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

        $data = $request->all();
        $temarr = [];
        for($i = 0 ; $i<count($data['int_name']) ; $i++){
            $temarr[] = [
                "int_name"=>$data['int_name'][$i],
                "starter"=>$data['starter'][$i],
                "salad"=>$data['salad'][$i],
                "course"=>$data['course'][$i],
                "desert"=>$data['desert'][$i],
                "breads"=>$data['breads'][$i],
                "acomp"=>$data['acomp'][$i],
                "meal"=>$data['meal'][$i],
            ];
        }
        $tem = json_encode($temarr);
        if(!empty($hotelsetting)){
            $hotelsetting->update(['menu_type'=>$tem]);
            return back()->withSuccess('Menu Types updated successfully');
        }
        else{
            HotelSetting::create(array_merge(['menu_type'=>$tem] , ['hotel_id'=>$hotel->id]));
            return back()->withSuccess('Menu Types added successfully');
        }
    }

    /*------------------------------Menu-List-------------------------------*/

    public function showlist($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.menu-list' , compact('hotel_code','hotelsetting'));
    }

    public function listed(Request $request , $hotel_code){
        $request->validate([
            'food_name'      =>	'required|array|min:1',
            'food_name.*'    =>	'required'
        ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

        $data = $request->all();
        $temarr = [];
        for($i = 0 ; $i<count($data['food_name']) ; $i++){
            $temarr[] = [
                "food_name"=>$data['food_name'][$i],
                "type"=>$data['type'][$i],
            ];
        }
        $tem = json_encode($temarr);
        if(!empty($hotelsetting)){
            $hotelsetting->update(['menu_list'=>$tem]);
            return back()->withSuccess('Menu List updated successfully');
        }
        else{
            HotelSetting::create(array_merge(['menu_list'=>$tem] , ['hotel_id'=>$hotel->id]));
            return back()->withSuccess('Menu List added successfully');
        }
    }

    /*-------------------------------Applicable Taxes----------------------------*/

     public function showtaxes($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.applicable-taxes' , compact('hotel_code','hotelsetting'));
    }

    public function taxes(Request $request , $hotel_code){
         $request->validate([
    	 	   'tax_name'      =>	'required|array|min:1',
               'tax_name.*'      =>	'required'
    	 ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
        
        $data = $request->all();
        $temarr = [];
            for($i = 0 ; $i<count($data['tax_name']) ; $i++){
            $temarr[] = [
                    "tax_name"=>$data['tax_name'][$i],
                    "vat"=>$data['vat'][$i],
                    "cgst"=>$data['cgst'][$i],
                    "sgst"=>$data['sgst'][$i],
                    "total"=>$data['total'][$i],
                    ];
            }
        $tem = json_encode($temarr);
        if(!empty($hotelsetting)){
               $hotelsetting->update(['applicable_taxes'=>$tem]);
               return back()->withSuccess('Applicable Taxes updated successfully');
        }
        else{
            HotelSetting::create(array_merge(['applicable_taxes'=>$tem] , ['hotel_id'=>$hotel->id]));
            return back()->withSuccess('Applicable Taxes added successfully');
        }
}

/*------------------------Type of Room--------------------------*/

    public function type($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.room-type' , compact('hotel_code','hotelsetting'));
    }

     public function typeofroom(Request $request , $hotel_code){
             $request->validate([
                 'room_type'      =>	'required|array|min:1',
                 'room_type.*'      =>	'required'
             ]);
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
                HotelSetting::create(array_merge(['room_type'=>$tem] , ['hotel_id'=>$hotel->id]));
                return back()->withSuccess('Room type detail added successfully');
            }
    }

    /* ----------------------------Near By-------------------------------*/

    public function nearby($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.hotel-near' , compact('hotel_code','hotelsetting'));
    }

    public function storenearby(Request $request , $hotel_code){
        $request->validate([
            'name'        =>	'required|array|min:1',
            'name.*'      =>	'required'
        ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

        $data = $request->all();
        $temarr = [];
        for($i = 0 ; $i<count($data['name']) ; $i++){
            $temarr[] = [
                "name"=>$data['name'][$i],
                "distance"=>$data['distance'][$i],
                "time"=>$data['time'][$i]
            ];
        }
        $tem = json_encode($temarr);
        if(!empty($hotelsetting)){
            $hotelsetting->update(['near_by'=>$tem]);
            return back()->withSuccess('Near By Places updated successfully');
        }
        else{
            HotelSetting::create(['near_by'=>$tem]);
            return back()->withSuccess('Near By Places added successfully');
        }
    }

    /*----------------------------Policy------------------------------*/

    public function policy($hotel_code){
    	$hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.policy' , compact('hotel_code','hotelsetting'));
    }

    public function savepolicy(Request $request, $hotel_code){
	    $request->validate([
		    'policy_name'        =>	'required|array|min:1',
		    'policy_name.*'      =>	'required',
		    'policy_detail'        =>	'required|array|min:1',
		    'policy_detail.*'      =>	'required'
	    ]);

    	$hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

	    $data = $request->all();

	    $temarr = [];
	    for($i = 0 ; $i<count($data['policy_name']) ; $i++){
		    $temarr[] = [
			    "policy_name"=>$data['policy_name'][$i],
			    "default"=>isset($data['default'][$i]),
			    "policy_detail"=>$data['policy_detail'][$i]
		    ];
	    }
	    $tem = json_encode($temarr);

	    if(!empty($hotelsetting)){
		    $hotelsetting->update(['policies'=>$tem]);
		    return back()->withSuccess('All Policies updated successfully');
	    }
	    else{
		    HotelSetting::create(array_merge(['policies'=>$tem] , ['hotel_id'=>$hotel->id]));
		    return back()->withSuccess('All Policies added successfully');
	    }
    }

    /*------------------------------------------------------------------*/

    public function picture($hotel_code){
        return view('tenant.admin.hotel-setting.profile-pic' ,compact('hotel_code'));
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

    /*-------------------------------------create banquet-------------------------------------*/

    public function listing($hotel_code){
	    $banquets = HotelBanquet::paginate(10);
        return view('tenant.admin.hotel-setting.banquet-list' , compact('banquets' , 'hotel_code'));
    }

    public function create($hotel_code){
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
        return view('tenant.admin.hotel-setting.banquet-create' , compact('hotel_code','hotelsetting'));
    }

    public function collection(Request $request , $hotel_code){
        $request->validate([
            'name'        => 'required|array|min:1',
            'width_ft'    => 'required',
            'length_ft'   => 'required|array|min:1'
        ]);
        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
        $data = $request->all();
	    if($request->hasFile('hotel_four_pictures')){
		    $hotel_four_pictures = $request->file('hotel_four_pictures');
		    $route = explode('/',request()->root());
		    $subroute = explode('.',$route[2]);
		    $names = [];
		    foreach($request->file('hotel_four_pictures') as $hotel_four_pictures)
		    {
			    $destinationPath = storage_path('app/'.$subroute[0].'/hotelpic');
			    $hotelpicname = 'hotelpicname'.uniqid().'.'.$hotel_four_pictures->getClientOriginalExtension();
			    $hotel_four_pictures->move($destinationPath, $hotelpicname);
			    array_push($names, $hotelpicname);
		    }
		    $hotelpic = json_encode($names);
	    }
	    $temarr = [];
        for($i = 0 ; $i<count($data['seating_style']) ; $i++){
            $temarr[] = [
                "seating_style"=>$data['seating_style'][$i],
                "no_person"=>$data['no_person'][$i]
            ];
        }
	    $tem = json_encode($temarr);
	    $num1 = (int)$data["separate_entrance"];

            HotelBanquet::create(['name'  => $data["name"] ,'width_ft'  => $data["width"] , 'length_ft' => $data["length"] ,'area_sq_ft' => $data["area"] , 'height_ft' => $data["height"] , 'seating_style' => $tem , 'no_of_entry_point' => $data["entry"] , 'is_separate_entrance' => $num1 , 'sort_description' => $data["short_des"] , 'long_description' => $data["long_des"] , 'hotel_picture' =>$hotelpic]);
            return back()->withSuccess('Banquet added successfully');
    }

    public function delete($hotel_code,$id){

        $hotel = hotelIdByCode($hotel_code);
        $hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();
        HotelBanquet::where('id', $id)->delete();
        return back()->withSuccess('Banquet Deleted successfully');
    }

    /*----------------------------------------------------------------*/

	/*----------------------hotel-seating-style---------------------*/

	public function style($hotel_code){
		$hotel = hotelIdByCode($hotel_code);
		$hotelsetting = HotelSetting::where('hotel_id', $hotel->id)->first();
		return view('tenant.admin.hotel-setting.seating-style' , compact('hotel_code','hotelsetting'));
	}

	public function seatingstyle(Request $request , $hotel_code){
		$request->validate([
			'seat_style'      =>	'required|array|min:1',
			'seat_style.*'      =>	'required'
		]);
		$hotel = hotelIdByCode($hotel_code);
		$hotelsetting = HotelSetting::where('hotel_id' , $hotel->id)->first();

		$data = $request->all();
		$temarr = [];
		for($i = 0 ; $i<count($data['seat_style']) ; $i++){
			$temarr[] = [
				"seat_style"=>$data['seat_style'][$i],
				"numberperson"=>$data['numberperson'][$i]
			];
		}
		$tem = json_encode($temarr);
		if(!empty($hotelsetting)){
			$hotelsetting->update(['seating_style'=>$tem]);
			return back()->withSuccess('Seating style updated successfully');
		}
		else{
			HotelSetting::create(array_merge(['seating_style'=>$tem] , ['hotel_id'=>$hotel->id]));
			return back()->withSuccess('Seating style added successfully');
		}
	}


	/*-----------------------------------------------------------------*/

}
