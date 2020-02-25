<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Food;
use Illuminate\Support\Facades\Auth;


class HotelMenuController extends Controller
{

    public function index()
    {
        $menues = Food::all();

        $breakfast = $menues->filter(function ($value) {
            return $value->type == "Breakfast";
        });

        $tea_break = $menues->filter(function ($value) {
            return $value->type == "Tea and Coffee Break";
        });

        $lunch = $menues->filter(function ($value) {
            return $value->type == "Lunch";
        });

        $dinner = $menues->filter(function ($value) {
            return $value->type == "Dinner";
        });

        $drinks = $menues->filter(function ($value) {
            return $value->type == "Drinks and Reception";
        });

        $additional = $menues->filter(function ($value) {
            return $value->type == "Additional";
        });

        return view('tenant.query-form', compact('menues','breakfast'));
    }

}
