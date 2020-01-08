<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Consumer;

class ConsumerController extends Controller
{
	public function Login(Request $request){

			return $request;
	}

	public function Store(Request $request){

		unset($request['_token']);

		$consumer = Consumer::create($request->all());

	}

	public function RegisterForm(){

		return view('tenant.register');
	}
    
}
