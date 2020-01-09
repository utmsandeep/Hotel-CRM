<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MapController extends BaseController
{
    function yandex(){
    	return view('tenant.admin.map.yandex');
    }

    function jvector(){
        return view('tenant.admin.map.jvector');
    }
}
