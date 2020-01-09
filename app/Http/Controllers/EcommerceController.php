<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class EcommerceController extends BaseController
{
    function dashboard(){
    	return view('tenant.admin.ecommerce.dashboard');
    }

    function product(){
    	return view('tenant.admin.ecommerce.product');
    }

    function productList(){
        return view('tenant.admin.ecommerce.product-list');
    }

    function productDetail(){
    	return view('tenant.admin.ecommerce.product-detail');
    }
}