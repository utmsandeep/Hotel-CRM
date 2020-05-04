<?php

namespace App\Http\Controllers\Tenant\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\Tenant\Admin;
use App\Model\super_admin\Role;
use App\Model\Tenant\Admin\Hotel;
use App\Model\Tenant\Admin\HotelAdmin;



class ProfileController extends Controller
{
    public function index(){
        $profile = Admin::where('id' , auth()->user()->id)->first(); 
        $hotels = Hotel::all(); 
        $admin  = Admin::where('id' , auth()->user()->id)->first();
        $no = 0;
        if($admin["firstname"] != null){
            $no++;
        }
        if($admin["lastname"] != null){
            $no++;
        }
        if($admin["email"] != null){
            $no++;
        }
        if($admin["primary_mobile"] != null){
            $no++;
        }
        if($admin["secondary_mobile"] != null){
            $no++;
        }
        if($admin["gender"] != null){
            $no++;
        }
        if($admin["gst_no"] != null){
            $no++;
        }
        if($admin["street"] != null){
            $no++;
        }
        if($admin["city"] != null){
            $no++;
        }
        if($admin["state"] != null){
            $no++;
        }
        if($admin["postal_code"] != null){
            $no++;
        }
        if($admin["country"] != null){
            $no++;
        }
        if($admin["image"] == "no_image.jpg" || $admin["image"] == null){
            $no++;
        }
        $num = floor($no  * 7.69);
        $route = explode('/',request()->root());
        $subroute = explode('.',$route[2]);
    	return view('tenant.admin.profile.my-profile' , compact('profile' , 'hotels' , 'admin','subroute','num'));
    }

    // public function edit(){
    //         $admin  = Admin::where('id' , auth()->user()->id)->first();
    //         return view('tenant.admin.profile.my-profile' , compact('admin'));
    // }

    public function update(Request $request){
         if($request->hasFile('image'))
        {
            $route = explode('/',request()->root());
            $subroute = explode('.',$route[2]);

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = storage_path('app/public/'.$subroute[0].'/profile');
            $image->move($destinationPath, $input['imagename']);
            $admin  = Admin::find(auth()->user()->id);
            $data = array(
                'image' => $input['imagename'],
            );
             $admin->update($data);

        }    
        $validatedData = $request->validate([
                'firstname'         => 'string',
                'lastname'          => 'bail|string',
                'primary_mobile'    => 'bail|digits:10|nullable|unique:tenant.admins,email,'.auth()->user()->id,
                'secondary_mobile'  => 'bail|digits:10|nullable|unique:tenant.admins,email,'.auth()->user()->id,
                'email'             => 'bail|email|unique:tenant.admins,email,'.auth()->user()->id,
                'password'          => 'min:6|nullable|required_with:confirm_password|same:confirm_password',
            ]);
        $admin  = Admin::find(auth()->user()->id);
        if($validatedData["password"] == null){
            unset($validatedData["password"]);
            unset($validatedData["confirm_password"]); 
            $admin->update($validatedData);
        }else{
            $data =array(
                // 'image'             => $input['imagename'],
                'firstname'         => $validatedData["firstname"],
                'lastname'          => $validatedData["lastname"],
                'primary_mobile'    => $validatedData["primary_mobile"],
                'secondary_mobile'  => $validatedData["secondary_mobile"],
                'email'             => $validatedData["email"],
                'password'          => Hash::make($validatedData["password"]),
            );
            $admin->update($data);
        }
            return redirect()->route('tenant.admin.profile.index')->withSuccess('Profile Updated Successfully.'); 
        
    }

}
