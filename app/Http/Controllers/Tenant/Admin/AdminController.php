<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Tenant\Admin;

class AdminController extends Controller
{
    public function __construct(){
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
    }
    
	public function Login(Request $request){

		if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password] ,$request->filled('remember'))){
			return redirect()->intended('dashboard.index');
    	}
    	return redirect()->route('tenant.admin.login')->withErrors(['email'=>'These credentials do not match our records']);
	}

	public function LoginForm(){

		return view('tenant.admin.login');
	}

}
