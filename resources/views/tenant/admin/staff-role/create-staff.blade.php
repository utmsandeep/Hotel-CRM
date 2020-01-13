@extends('tenant.admin.layout.master')
@section('title', 'Create Staff')
@section('parentPageTitle', 'Staff')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" action="{{ route('tenant.admin.staff.store') }}">
            @csrf
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>                             
                                <input type="text" class="form-control" placeholder="" id="firstname" name="firstname" value="{{ old('firstname') }}" />                                   
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">  
                                <label for="lastname">Last Name</label>                                 
                                <input type="text" class="form-control" placeholder="" id="lastname" name="lastname" value="{{ old('lastname') }}" />                                    
                            </div>
                        </div>
                    </div>  
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select class="form-control custom-select" name="gender" required="">
                                    <option value=1>Male</option>
                                    <option value=2>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                 <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Primary Mobile</label>
                                 <input type="text" class="form-control" name="primary_mobile" value="{{ old('primary_mobile') }}">
                                <small class="form-control-feedback"></small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Secondary Mobile</label>
                                <input type="text" class="form-control" name="secondary_mobile" value="{{ old('secondary_mobile') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                 <input type="password" class="form-control" name="password" >
                                <small class="form-control-feedback"></small> 
                            </div>
                        </div>
                                           
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Password Confirmation</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Street</label>
                                <input type="text" class="form-control" name="street" value="{{ old('street') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                            </div>
                        </div>
                    </div>                  
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Post Code</label>
                                <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control custom-select" name="country" required="">
                                    <option>--Select your Country--</option>
                                    <option value=1>India</option>
                                    <option value=2>Sri Lanka</option>
                                    <option value=3>USA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control custom-select" name="role">
                                    <option value="">--Select Role--</option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="form-actions">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>
@stop