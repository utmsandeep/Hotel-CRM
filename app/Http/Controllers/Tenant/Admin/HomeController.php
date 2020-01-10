<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index(){
    	return view('tenant.admin.dashboard.index');
    }

    public function AdminLogOut(Request $request){

		auth('admin')->logout();
		return redirect()->route('tenant.admin.login');
	}

	public function ConsumerLogOut(){

		auth('consumer')->logout();
		return redirect()->route('tenant.index');

	}
}
