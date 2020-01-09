<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TablesController extends BaseController
{
    function normal(){
    	return view('tenant.admin.tables.normal');
    }

    function datatable(){
    	return view('tenant.admin.tables.datatable');
    }

    function editable(){
    	return view('tenant.admin.tables.editable');
    }

    function footable(){
    	return view('tenant.admin.tables.footable');
    }

    function color(){
    	return view('tenant.admin.tables.color');
    }
}