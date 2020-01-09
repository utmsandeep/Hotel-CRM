@extends('tenant.admin.layout.master')
@section('title', 'C3 Chart')
@section('parentPageTitle', 'Charts')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/charts-c3/plugin.css')}}"/>
@stop
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Employment</strong> Growth</h2>
            </div>
            <div class="body">
                <div id="chart-employment" class="c3_chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Monthly</strong> Average Temperature</h2>
            </div>
            <div class="body">
                <div id="chart-temperature" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Area</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-area" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Lorem</strong> ipsum</h2>
            </div>
            <div class="body">
                <div id="chart-area-spline" class="c3_chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Area</strong> Chart Sracked</h2>
            </div>
            <div class="body">
                <div id="chart-area-spline-sracked" class="c3_chart"></div>
            </div>
        </div>                    
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Wind speed</strong> during two days</h2>
            </div>
            <div class="body">
                <div id="chart-spline" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Rotated</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-spline-rotated" class="c3_chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Step</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-step" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Step</strong> Chart Fill</h2>
            </div>
            <div class="body">
                <div id="chart-area-step" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Bar</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-bar" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Bar</strong> Rotated Chart</h2>
            </div>
            <div class="body">
                <div id="chart-bar-rotated" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Stacked</strong> Bar Chart</h2>
            </div>
            <div class="body">
                <div id="chart-bar-stacked" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Pie</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-pie" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Donut</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-donut" class="c3_chart"></div>
            </div>
        </div>                    
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Scatter</strong> Chart</h2>
            </div>
            <div class="body">
                <div id="chart-scatter" class="c3_chart"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Combination</strong> chart</h2>
            </div>
            <div class="body">
                <div id="chart-combination" class="c3_chart"></div>
            </div>
        </div>                
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/charts/c3.js')}}"></script>
@stop