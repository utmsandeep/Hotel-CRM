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
    	$staff = Admin::orderBy('id' , 'desc')->paginate(10);
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
             $admin->adminHotels()->delete();
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

    public function block($admin_id , $action){
        try{
            $actions = ['block'=>1 , 'unblock'=>0];
            $admin  = Admin::find($admin_id);
            if(!$admin)
                 throw  new \App\Exceptions\ResourceNotFoundException();
            if(!array_key_exists($action, $actions))
                return redirect()->back()->withError('Invalid Action!');
            $admin->update(['isBlocked'=>$actions[$action]]);
            return redirect()->back()->withSuccess('Staff status changed.');
        }catch(\App\Exceptions\ResourceNotFoundException $e){
            \Log::error($e);
            throw  new \App\Exceptions\ResourceNotFoundException($e);
               
        }catch(\Exception $e){
            \Log::error($e);
            return $e->getMessage();
        }
       
    }
    public function edit($admin_id){
        try{
           
            $admin  = Admin::find($admin_id);
            if(!$admin)
                throw  new \App\Exceptions\ResourceNotFoundException();
                $roles = Role::where('is_super' , 0)->get();
                $hotels = Hotel::all();
                return view('tenant.admin.staff-role.edit-staff' , compact('roles' , 'hotels' , 'admin'));
         }catch(\App\Exceptions\ResourceNotFoundException $e){
            \Log::error($e);
            throw  new \App\Exceptions\ResourceNotFoundException($e);
               
        }catch(\Exception $e){
            \Log::error($e);
            return $e->getMessage();
        }
    }

    public function update(Request $request , $admin_id){
        $validatedData = $request->validate([
                'firstname'         => 'bail|required|string',
                'lastname'          => 'bail|required|string',
                'gender'            => 'bail|required|integer|min:1',
                'primary_mobile'    => 'bail|digits:10|nullable|unique:tenant.admins,email,'.$admin_id,
                'secondary_mobile'  => 'bail|digits:10|nullable|unique:tenant.admins,email,'.$admin_id,
                'email'             => 'bail|required|email|unique:tenant.admins,email,'.$admin_id,
                'hotels'            => 'bail|nullable|array',
                'role'              => 'bail|required|integer|min:1',
            ]);

        try{
            $admin  = Admin::find($admin_id);
            if(!$admin)
                throw  new \App\Exceptions\ResourceNotFoundException();
            unset($validatedData['hotels']);
            $admin->update($validatedData);
            $hotels = [];
            if(isset($request['hotels'])){
               $hotels = $request['hotels'];
             }
            $admin->adminHotels()->whereNotIn('hotel_id' , $hotels)->delete();
            foreach ($hotels as $key => $value) {
               HotelAdmin::firstOrCreate(['admin_id'=>$admin->id , 'hotel_id'=>$value]);
            }
            return redirect()->route('tenant.admin.staff.index')->withSuccess('Staff Updated Successfully.');
         }catch(\App\Exceptions\ResourceNotFoundException $e){
            \Log::error($e);
            throw  new \App\Exceptions\ResourceNotFoundException($e);
               
        }catch(\Exception $e){
            \Log::error($e);
            return $e->getMessage();
        }
    }

}
