<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
            //$this->middleware('guest')->except('logout');
            // $this->middleware('guest:admin')->except('logout');
            //$this->middleware('guest:consumer')->except('logout');
            //print_r(Auth::user()->id);

		// if(Auth::guard('consumer')->check())
		// {
		// 	return redirect()->route('tenant.consumer.home');
		// }

		//dd(auth()->guard('consumer')->user());

    }
    
	public function Login(Request $request){

		return redirect()->route('dashboard.index');
		// if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password] ,$request->filled('remember'))){
		// 	return Auth::guard('consumer')->user()->firstname;
  //   	}
  //   	return 'failed';
	}

	public function LoginForm(){

		return view('tenant.admin.login');
		//Auth::guard('consumer')->logout();
		//dd(auth()->guard('consumer')->user());
		//return view('tenant.register');
	}
}
