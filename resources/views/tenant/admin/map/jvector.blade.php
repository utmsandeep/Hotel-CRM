@extends('tenant.admin.layout.master')
@section('title', 'jVector')
@section('parentPageTitle', 'Map')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>World</strong> Map</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="world-map-markers" class="jvector-map"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>India</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="india" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>USA</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="usa" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>UK</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="uk" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>Australia</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="australia" style="height: 400px"></div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="https://maps.google.com/maps/api/js?v=3&sensor=false')}}"></script>
<script src="{{asset('tenant-admin/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/maps/jvectormap.js')}}"></script>
@stop