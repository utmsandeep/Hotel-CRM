<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\super_admin\Role;
use App\Model\HomeTemplate;

class SuperRoleController extends Controller
{

    public function hotelRoleListing(){

        $roles = Role::where('is_super' , 0)->paginate(10);
     	return view('super_admin.pages.hotel-admin-roles' , compact('roles'));
    }


    public function SuperRoleListing(){

        $roles = Role::where('is_super' , 1)->paginate(10);
     	return view('super_admin.pages.super-admin-roles' , compact('roles'));
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

    public function editTemplate(){

        $template = HomeTemplate::first();
        return view('super_admin.pages.edit-home-page' , compact('template'));
    }
    public function updateTemplate(Request $request){
        $template = HomeTemplate::find(1)->update($request->all());
        return redirect()->back()->withSuccess('Template Updated');
    }

    // public function index()
    // {
	// 	$data = Role::where('isDeleted' , 0)->paginate(10);
    //     // return view('super_admin.pages.',$data);
    //     // echo "<pre>";var_dump($data->reult_array());die;
    //     return view('super_admin.pages.hotel-admin-roles',$data);
	// }
}
