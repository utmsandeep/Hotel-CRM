@extends('tenant.admin.layout.master')
@section('title', 'Basic Form Elements')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic</strong> Validation</h2>
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
                <form id="form_validation" method="POST">
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Surname" name="surname" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <div class="radio inlineblock m-r-20">
                            <input type="radio" name="gender" id="male" class="with-gap" value="option1">
                            <label for="male">Male</label>
                        </div>                                
                        <div class="radio inlineblock">
                            <input type="radio" name="gender" id="Female" class="with-gap" value="option2" checked="">
                            <label for="Female">Female</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <textarea name="description" cols="30" rows="5" placeholder="Description" class="form-control no-resize" required></textarea>
                    </div>
                    <div class="form-group form-float">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
                    </div>
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Advanced Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Advanced</strong> Validation</h2>
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
                <form id="form_advanced_validation" method="POST">
                    <div class="form-group form-float">
                        <input type="text" class="form-control" name="minmaxlength" maxlength="10" minlength="3" required>                                
                        <div class="help-info">Min. 3, Max. 10 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>                                
                        <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                    </div>
                    <div class="form-group form-float">
                        <input type="url" class="form-control" name="url" required>                                
                        <div class="help-info">Starts with http://, https://, ftp:// etc</div>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" name="date" required>                                
                        <div class="help-info">YYYY-MM-DD format</div>
                    </div>
                    <div class="form-group form-float">
                        <input type="number" class="form-control" name="number" required>                                
                        <div class="help-info">Numbers only</div>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>                                
                        <div class="help-info">Ex: 1234-5678-9012-3456</div>
                    </div>
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Validation Stats -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Validation</strong> Stats </h2>
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
                <form id="form_validation_stats">
                    <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control form-control-success">
                    </div>
                    <div class="form-group has-danger">
                        <input type="email" value="Error Input" class="form-control form-control-danger">
                    </div>
                    <div class="form-group has-warning">
                        <input type="email" value="warning Input" class="form-control form-control-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/form-validation.js')}}"></script>
@stop