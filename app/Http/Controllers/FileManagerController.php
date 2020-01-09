<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FileManagerController extends BaseController
{
    function all(){
    	return view('tenant.admin.file-manager.all');
    }

    function documents(){
    	return view('tenant.admin.file-manager.documents');
    }

    function media(){
        return view('tenant.admin.file-manager.media');
    }

    function image(){
    	return view('tenant.admin.file-manager.image');
    }
}
