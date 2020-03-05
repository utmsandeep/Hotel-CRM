@extends('tenant.admin.layout.master')
@section('title', 'Edit Staff')
@section('parentPageTitle', 'Staff')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<style type="text/css">
    .req{
        color: red;
    }
</style>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" action="{{ route('tenant.admin.staff.update' , ['admin_id'=>$admin->id]) }}">
            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name<span class="req">*</span></label>                             
                                <input type="text" class="form-control" placeholder="" id="firstname" name="firstname" value="{{ $admin->firstname }}" />                                   
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">  
                                <label for="lastname">Last Name<span class="req">*</span></label>                                 
                                <input type="text" class="form-control" placeholder="" id="lastname" name="lastname" value="{{ $admin->lastname }}" />                                    
                            </div>
                        </div>
                    </div>  
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Gender<span class="req">*</span></label>
                                <select class="form-control custom-select" name="gender" required="">
                                    <option @if($admin->gender == 1) selected @endif value=1>Male</option>
                                    <option @if($admin->gender == 2) selected @endif value=2>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email<span class="req">*</span></label>
                                 <input type="text" class="form-control" name="email" value="{{  $admin->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Primary Mobile</label>
                                 <input type="text" class="form-control" name="primary_mobile" value="{{ $admin->primary_mobile }}">
                                <small class="form-control-feedback"></small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Secondary Mobile</label>
                                <input type="text" class="form-control" name="secondary_mobile" value="{{ $admin->secondary_mobile }}">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role<span class="req">*</span></label>
                                <select class="form-control custom-select" name="role">
                                    <option value="">--Select Role--</option>
                                    @foreach($roles as $role)
                                    <option @if($admin->role == $role->id) selected @endif value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Assign Hotels</label>
                                <select class="form-control custom-select" name="hotels[]" multiple="">
                                    <option value="">--Select Hotels--</option>
                                    @foreach($hotels as $hotel)
                                    <option @if($admin->adminHotels->contains('hotel_id' , $hotel->id)) selected @endif value="{{ $hotel->id }}">{{ $hotel->name }}</option>
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