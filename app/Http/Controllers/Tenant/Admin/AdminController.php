<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Tenant\Admin;
use DB;
use App\Model\Tenant\Admin\AdminPasswordReset;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
    }
    
	public function Login(Request $request){

		if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password] ,$request->filled('remember'))){
			return redirect()->intended('/admin');
    	}
    	return redirect()->route('tenant.admin.login')->withErrors(['email'=>'These credentials do not match our records']);
	}

	public function LoginForm(){

		return view('tenant.admin.login');
	}

	public function passwordResetForm($token){
		$check = AdminPasswordReset::where('token' , $token)->first();
		if(empty($check))
		{
			die('entered wrong token');
		}
		return view('tenant.admin.password-reset' , compact('token'));
	}

	public function passwordResetStore(Request $request , $token){
		$request->validate([
			'password'          => 'required|confirmed|min:8',
		]);
		$check = AdminPasswordReset::where('token' , $token)->first();

		if(empty($check))
		{
			die('entered wrong token');
		}

		$admin = Admin::where('email' , $check->email)->first();

		if($admin){

			$admin->update(['password'=>Hash::make($request->password)]);
			if(Auth::guard('admin')->attempt(['email'=>$check->email,'password'=>$request->password])){
			AdminPasswordReset::where('token' , $token)->delete();	
			return redirect()->intended('/admin');
    		}
		}
		return redirect()->route('tenant.admin.login')->withErrors(['email'=>'These credentials do not match our records']);

	}

}
