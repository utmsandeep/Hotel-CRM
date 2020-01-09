@extends('tenant.admin.layout.master')
@section('title', 'Basic Form Elements')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-warning" role="alert">
            <strong>Bootstrap</strong> Better check yourself, <a target="_blank" href="https://getbootstrap.com/docs/4.2/components/input-group/">View More</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
        </div>
        <div class="card">
            <div class="body">
                <h2 class="card-inside-title">Basic Examples</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Username" />
                        </div>
                        <div class="form-group">                                   
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Different Widths</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="col-sm-6" />                                   
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-6" />                                    
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-4" />                                    
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-4" />                                   
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-4" />                                    
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                        </div>
                    </div>
                </div>                        
                <h2 class="card-inside-title">Input Status</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" value="Focused" placeholder="Statu Focused" />                                    
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Disabled" disabled />                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Textarea -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Textarea</strong></h2>
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
                <h2 class="card-inside-title">Basic Example</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
</div>

<!-- Select -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Select</strong></h2>
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
                <p>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></p>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <select class="form-control show-tick">
                            <option value="">-- Please select --</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" disabled>
                            <option value="">Disabled</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--DateTime Picker -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>DateTime</strong> Picker</h2>
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
                <p>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></p>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                            </div>
                            <input type="text" class="form-control timepicker" placeholder="Please choose a time...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control datetimepicker" placeholder="Please choose date & time...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>
@stop