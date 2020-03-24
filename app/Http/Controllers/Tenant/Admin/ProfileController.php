<?php

namespace App\Http\Controllers\Tenant\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\Tenant\Admin;
use App\Model\super_admin\Role;
use App\Model\Tenant\Admin\Hotel;
use App\Events\Tenant\Admin\NewStaffAddedEvent;
use App\Model\Tenant\Admin\HotelAdmin;



class ProfileController extends Controller
{
    public function index(){
        $profile = Admin::where('id' , auth()->user()->id)->first(); 
    	return view('tenant.admin.profile.my-profile' , compact('profile'));
    }

   

    // public function store(Request $request){

    // 	$request->validate([
    //         'name'         => 'bail|required|string',
    //         'description'  => 'bail|required|string',
    //     ]);

    //     $role = Role::create( array_merge($request->all() , ['created_by'=>auth('admin')->user()->id , 'updated_by'=>auth('admin')->user()->id]));
    //     return redirect()->route('tenant.admin.role.index')->withSuccess('Role Created Successfully.');

    // }
}
