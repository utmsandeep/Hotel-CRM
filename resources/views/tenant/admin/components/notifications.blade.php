@extends('tenant.admin.layout.master')
@section('title', 'Notification')
@section('parentPageTitle', 'UI')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Notification</strong> Positions</h2>
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
                <div class="jsdemo-notification-button">
                    <button type="button" class="btn btn-raised m-b-10 btn-primary waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP LEFT </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-primary waves-effect" data-placement-from="top" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP CENTER </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-primary waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP RIGHT </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-primary waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM LEFT </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-primary waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM CENTER </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-primary waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM RIGHT </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notification Types -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Notification</strong> Types </h2>
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
                <div class="jsdemo-notification-button">
                    <button type="button" class="btn btn-raised m-b-10 btn-danger waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="alert-danger"> DANGER </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-success waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="alert-success"> SUCCESS </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-warning waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="alert-warning"> WARNING </button>
                    <button type="button" class="btn btn-raised m-b-10 btn-info waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="alert-info"> INFO </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- With Material Design Colors -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>With Material</strong> Design Colors</h2>
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
                <p>You can use the material design colors which example class are <code>.bg-pink, .bg-green</code></p>
                <div class="jsdemo-notification-button">
                    <button type="button" class="btn btn-raised m-b-10 bg-red waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-red"> RED </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-green waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-green"> GREEN </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-orange waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-orange"> ORANGE </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-blue waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-blue"> BLUE </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-teal waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-teal"> TEAL </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-cyan waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-cyan"> CYAN </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-pink waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-pink"> PINK </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-purple waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-purple"> PURPLE </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-blue-grey waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-blue-grey"> BLUE GREY </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-deep-orange waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-deep-orange"> DEEP ORANGE </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-light-green waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-light-green"> LIGHT GREEN </button>
                    <button type="button" class="btn btn-raised m-b-10 bg-black waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BLACK </button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/ui/notifications.js')}}"></script>
@stop