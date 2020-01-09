<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends Controller
{
    function index(){
    	return view('tenant.admin.dashboard.index');
    }
   
}
