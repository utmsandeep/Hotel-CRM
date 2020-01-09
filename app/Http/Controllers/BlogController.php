<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    function dashboard(){
    	return view('tenant.admin.blog.dashboard');
    }

    function newPost(){
    	return view('tenant.admin.blog.new-post');
    }

    function list(){
        return view('tenant.admin.blog.list');
    }

    function grid(){
        return view('tenant.admin.blog.grid');
    }

    function detail(){
    	return view('tenant.admin.blog.detail');
    }
}