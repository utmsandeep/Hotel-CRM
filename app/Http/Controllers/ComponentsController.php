<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ComponentsController extends BaseController
{
    function ui(){
    	return view('tenant.admin.components.ui');
    }

    function alerts(){
    	return view('tenant.admin.components.alerts');
    }

    function collapse(){
    	return view('tenant.admin.components.collapse');
    }

    function colors(){
    	return view('tenant.admin.components.colors');
    }

    function dialogs(){
        return view('tenant.admin.components.dialogs');
    }

    function list(){
    	return view('tenant.admin.components.list');
    }

    function media(){
    	return view('tenant.admin.components.media');
    }

    function modals(){
    	return view('tenant.admin.components.modals');
    }

    function notifications(){
    	return view('tenant.admin.components.notifications');
    }

    function progressbars(){
    	return view('tenant.admin.components.progressbars');
    }

    function range(){
    	return view('tenant.admin.components.range');
    }

    function sortable(){
    	return view('tenant.admin.components.sortable');
    }

    function tabs(){
    	return view('tenant.admin.components.tabs');
    }

    function waves(){
    	return view('tenant.admin.components.waves');
    }
}
