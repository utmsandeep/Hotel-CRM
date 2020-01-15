<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('super_admin.pages.index');
    }
    public function superAdminRoles()
    {
        return view('super_admin.pages.super-admin-roles');
    }
     public function hotelAdminRoles()
    {
        return view('super_admin.pages.hotel-admin-roles');
    }
}
