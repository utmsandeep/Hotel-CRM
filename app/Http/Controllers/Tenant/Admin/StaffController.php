<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\Tenant\Admin;
use App\Model\Tenant\Admin\Role;
class StaffController extends Controller
{
    public function index(){
    	//where('role' , '!=' , 1)->
    	$staff = Admin::paginate(10)->load('adminRole');
    	return view('tenant.admin.staff-role.staff-list' , compact('staff'));
    }

    public function create(){
    	$roles = Role::get();
    	return view('tenant.admin.staff-role.create-staff' , compact('roles'));
    }

    public function store(Request $request){

    	$request->validate([
            'firstname'         => 'bail|required|string',
            'lastname'          => 'bail|required|string',
            'gender'            => 'bail|required|integer|min:1',
            'primary_mobile'    => 'bail|unique:tenant.admins|digits:10|nullable',
            'secondary_mobile'  => 'bail|unique:tenant.admins|digits:10|nullable',
            'email'             => 'bail|required|email|unique:tenant.admins',
            'password'          => 'bail|required|confirmed|min:8',
            'street'            => 'bail|required',
            'city'              => 'bail|required',
            'state'             => 'bail|required',
            'postal_code'       => 'bail|required|digits:6',
            'country'           => 'bail|required|integer|min:1',
            //'role'           	=> 'bail|nullable|integer',
        ]);
		unset($request['_token']);
        unset($request['password_confirmation']);
        $request['password'] = Hash::make($request['password']);

        $admin = Admin::create(array_merge($request->all() , ['created_by' => auth('admin')->user()->id]));

        return redirect()->route('tenant.admin.staff.index')->withSuccess('Staff Created Successfully.');
    }
}
