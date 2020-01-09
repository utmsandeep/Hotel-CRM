<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    function basic(){
    	return view('tenant.admin.form.basic');
    }

    function advanced(){
    	return view('tenant.admin.form.advanced');
    }

    function examples(){
    	return view('tenant.admin.form.examples');
    }

    function validation(){
    	return view('tenant.admin.form.validation');
    }

    function wizard(){
    	return view('tenant.admin.form.wizard');
    }

    function editors(){
    	return view('tenant.admin.form.editors');
    }

    function upload(){
    	return view('tenant.admin.form.upload');
    }

    function summernote(){
    	return view('tenant.admin.form.summernote');
    }
}