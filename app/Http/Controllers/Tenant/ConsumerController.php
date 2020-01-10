<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Consumer;
use Illuminate\Support\Facades\Auth;


class ConsumerController extends Controller
{

	public function __construct(){
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:consumer')->except('logout');
    }
    
	public function Login(Request $request){
		if(Auth::guard('consumer')->attempt(['email'=>$request->email,'password'=>$request->password] ,$request->filled('remember'))){
			return redirect()->route('tenant.consumer.home');
    	}
    	return redirect()->route('tenant.index')->withErrors(['email'=>'These credentials do not match our records']);
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

		if(Auth::guard('consumer')->attempt(['email'=>$request->email,'password'=>$request->password])){

			return redirect()->route('tenant.consumer.home');
    	}

    	return redirect()->route('tenant.register')->withErrors(['email'=>'These credentials do not match our records']);


	}

	public function RegisterForm(){

		return view('tenant.register');
	}
    
}
