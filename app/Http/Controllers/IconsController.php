<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class IconsController extends BaseController
{
    function material(){
    	return view('tenant.admin.icons.material');
    }

    function themify(){
    	return view('tenant.admin.icons.themify');
    }

    function weather(){
    	return view('tenant.admin.icons.weather');
    }
}