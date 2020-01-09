<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blank(){
    	return view('tenant.admin.pages.blank');
    }

    function gallery(){
    	return view('tenant.admin.pages.gallery');
    }

    function invoices1(){
        return view('tenant.admin.pages.invoices1');
    }

    function invoices2(){
        return view('tenant.admin.pages.invoices2');
    }
    
    function pricing(){
        return view('tenant.admin.pages.pricing');
    }

    function profile(){
        return view('tenant.admin.pages.profile');
    }

    function search(){
        return view('tenant.admin.pages.search');
    }

    function timeline(){
    	return view('tenant.admin.pages.timeline');
    }
}
