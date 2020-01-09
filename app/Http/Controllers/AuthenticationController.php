<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
    	return view('tenant.admin.authentication.login');
    }

    function register(){
    	return view('tenant.admin.authentication.register');
    }

    function lockscreen(){
        return view('tenant.admin.authentication.lockscreen');
    }

    function forgot(){
    	return view('tenant.admin.authentication.forgot');
    }
    
    function page404(){
    	return view('tenant.admin.authentication.page404');
    }

    function page500(){
        return view('tenant.admin.authentication.page500');
    }

    function offline(){
    	return view('tenant.admin.authentication.offline');
    }
}
