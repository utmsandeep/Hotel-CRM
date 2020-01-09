<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Consumer;
use Illuminate\Support\Facades\Auth;


class ConsumerController extends Controller
{
	//use AuthenticatesUsers;

	public function __construct(){
            $this->middleware('guest')->except('logout');
            // $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:consumer')->except('logout');
            //print_r(Auth::user()->id);

		// if(Auth::guard('consumer')->check())
		// {
		// 	return redirect()->route('tenant.consumer.home');
		// }

		//dd(auth()->guard('consumer')->user());

    }
    
	public function Login(Request $request){
		if(Auth::guard('consumer')->attempt(['email'=>$request->email,'password'=>$request->password] ,$request->filled('remember'))){
			return Auth::guard('consumer')->user()->firstname;
    	}
    	return 'failed';
	}

	public function Store(Request $request){

		$validatedData = $request->validate([
            'firstname'         => 'bail|required|string',
            'lastname'          => 'bail|required|string',
            'email'             => 'bail|required|email|unique:tenant.consumers',
            'password'          => 'bail|required|confirmed|min:8',
        ]);
		unset($request['_token'] , $request['password_confirmation']);
		$consumer = Consumer::create($request->all());
		return $consumer;
	}

	public function RegisterForm(){

		//Auth::guard('consumer')->logout();
		//dd(auth()->guard('consumer')->user());
		return view('tenant.register');
	}
    
}
