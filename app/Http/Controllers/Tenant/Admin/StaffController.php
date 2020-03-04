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
class StaffController extends Controller
{
    public function index(){
    	//where('role' , '!=' , 1)->
    	$staff = Admin::paginate(10);
    	return view('tenant.admin.staff-role.staff-list' , compact('staff'));
    }

    public function create(){
    	$roles = Role::where('is_super' , 0)->get();
        $hotels = Hotel::all();
    	return view('tenant.admin.staff-role.create-staff' , compact('roles' , 'hotels'));
    }

    public function store(Request $request){
        try{
        	$validatedData = $request->validate([
                'firstname'         => 'bail|required|string',
                'lastname'          => 'bail|required|string',
                'gender'            => 'bail|required|integer|min:1',
                'primary_mobile'    => 'bail|unique:tenant.admins|digits:10|nullable',
                'secondary_mobile'  => 'bail|unique:tenant.admins|digits:10|nullable',
                'email'             => 'bail|required|email|unique:tenant.admins',
                'hotels'            => 'bail|nullable|array',
                // 'password'          => 'bail|required|confirmed|min:8',
                // 'street'            => 'bail|required',
                // 'city'              => 'bail|required',
                // 'state'             => 'bail|required',
                // 'postal_code'       => 'bail|required|digits:6',
                // 'country'           => 'bail|required|integer|min:1',
                'role'           	=> 'bail|required|integer|min:1',
            ]);
            unset($validatedData['hotels']);
            $admin = Admin::create(array_merge($validatedData , ['created_by' => auth('admin')->user()->id]));
            event(new NewStaffAddedEvent($admin->load('adminRole')));
            if(isset($request['hotels'])){
                foreach ($request['hotels'] as $key => $value) {
                   HotelAdmin::create(['admin_id'=>$admin->id , 'hotel_id'=>$value]);
                }
             }

            return redirect()->route('tenant.admin.staff.index')->withSuccess('Staff Created Successfully.');
        }catch(\Exception $e){
            \Log::error($e);
            return $e->getMessage();
        }
    }

    public function delete(Request $request , $admin_id){
        try{
            $admin  = Admin::find($admin_id);
            if(!$admin)
                 throw  new \App\Exceptions\ResourceNotFoundException();
             $admin->adminHotels->delete();
             $admin->delete();
            return redirect()->route('tenant.admin.staff.index')->withSuccess('Staff Deleted Successfully.');
        }catch(\App\Exceptions\ResourceNotFoundException $e){
            \Log::error($e);
            throw  new \App\Exceptions\ResourceNotFoundException($e);
               
        }catch(\Exception $e){
            \Log::error($e);
            return $e->getMessage();
        }
       
    }

}
