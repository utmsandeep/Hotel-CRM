<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\super_admin\Role;

class SuperRoleController extends Controller
{

    public function hotelRoleListing(){

    	$roles = Role::paginate(10);
     	return view('super_admin.pages.hotel-admin-roles' , compact('roles'));
    }

    public function create(){

    	return view('super_admin.pages.create-role');
    }

    public function store(Request $request){

    	$request->validate([
            'name'         => 'bail|required|string',
            'description'  => 'bail|required|string',
        ]);

        $role = Role::create( array_merge($request->all() , ['created_by'=>auth()->user()->id , 'updated_by'=>auth()->user()->id]));
        return redirect()->route('hotelAdminRoles')->withSuccess('Role Created Successfully.');

    }
}
