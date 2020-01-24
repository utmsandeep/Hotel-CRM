<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use stdClass;

class AppController extends BaseController
{
    function inbox(){
    	return view('tenant.admin.app.inbox');
    }

    function compose(){
    	return view('tenant.admin.app.compose');
    }

    function single(){
    	return view('tenant.admin.app.single');
    }

    function chat(){
    	return view('tenant.admin.app.chat');
    }

    function calendar(){
        return view('tenant.admin.app.calendar');
    }

    function contactList(){
    	return view('tenant.admin.app.contact-list');
    }
}
