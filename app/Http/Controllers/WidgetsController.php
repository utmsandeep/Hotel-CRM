<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WidgetsController extends BaseController
{
    function app(){
    	return view('tenant.admin.widgets.app');
    }

    function data(){
    	return view('tenant.admin.widgets.data');
    }
}