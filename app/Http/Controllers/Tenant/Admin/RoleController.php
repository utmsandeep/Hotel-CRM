<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\Role;

class RoleController extends Controller
{
    public function index(){
    	$roles = Role::paginate(10);
    	return view('tenant.admin.staff-role.role-list' , compact('roles'));
    }

    public function create(){

    	return view('tenant.admin.staff-role.create-role');
    }

    public function store(Request $request){

    	$request->validate([
            'name'         => 'bail|required|string',
            'description'  => 'bail|required|string',
        ]);

        $role = Role::create( array_merge($request->all() , ['created_by'=>auth('admin')->user()->id , 'updated_by'=>auth('admin')->user()->id]));
        return redirect()->route('tenant.admin.role.index')->withSuccess('Role Created Successfully.');

    }
}
