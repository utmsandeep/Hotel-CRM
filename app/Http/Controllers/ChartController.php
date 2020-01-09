<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChartController extends BaseController
{
    function echarts(){
    	return view('tenant.admin.chart.echarts');
    }

    function c3(){
    	return view('tenant.admin.chart.c3');
    }

    function morris(){
    	return view('tenant.admin.chart.morris');
    }

    function flot(){
    	return view('tenant.admin.chart.flot');
    }

    function chartjs(){
    	return view('tenant.admin.chart.chartjs');
    }

    function sparkline(){
    	return view('tenant.admin.chart.sparkline');
    }

    function knob(){
    	return view('tenant.admin.chart.knob');
    }
}