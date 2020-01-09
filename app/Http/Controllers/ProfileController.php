<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    function myProfile(){
    	return view('tenant.admin.profile.my-profile');
    }
}