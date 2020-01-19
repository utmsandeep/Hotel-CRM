@extends('tenant.admin.layout.master')
@section('title', 'Create Hotel')
@section('parentPageTitle', 'Hotel')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" action="{{ route('tenant.admin.hotel.store') }}">
            @csrf
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Hotel Name</label>                             
                                <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ old('name') }}" />                                   
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="region">Region</label>

                                  <input type="text" class="form-control" placeholder="" id="region" name="region" value="{{ old('region') }}" />                             
                                                           
                            </div>
                        </div>
                    </div> 

                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="hotel_code">Hotel Code</label>                           
                                <input type="text" class="form-control" placeholder="" id="hotel_code" name="hotel_code" value="{{ old('hotel_code') }}" />                                   
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4> Finance Manager </h4> 

                    <div class="row clearfix">
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label for="f_f_name">First Name</label>                             
                                <input type="text" class="form-control" placeholder="" id="f_f_name" name="f_f_name" value="{{ old('f_f_name') }}" />                                   
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="f_l_name">Last Name</label>

                                  <input type="text" class="form-control" placeholder="" id="f_l_name" name="f_l_name" value="{{ old('f_l_name') }}" />                                                       
                            </div>
                        </div>
                    </div> 

                    <div class="row clearfix">
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label for="f_email">Email</label>                             
                                <input type="text" class="form-control" placeholder="" id="f_email" name="f_email" value="{{ old('f_email') }}" />                                   
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="f_mobile">Mobile</label>

                                  <input type="text" class="form-control" placeholder="" id="f_mobile" name="f_mobile" value="{{ old('f_mobile') }}" />                                                       
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h4> General Manager </h4> 

                    <div class="row clearfix">
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label for="g_f_name">First Name</label>                             
                                <input type="text" class="form-control" placeholder="" id="g_f_name" name="g_f_name" value="{{ old('g_f_name') }}" />                                   
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="g_l_name">Last Name</label>

                                  <input type="text" class="form-control" placeholder="" id="g_l_name" name="g_l_name" value="{{ old('g_l_name') }}" />                                                       
                            </div>
                        </div>
                    </div> 

                    <div class="row clearfix">
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label for="g_email">Email</label>                             
                                <input type="text" class="form-control" placeholder="" id="g_email" name="g_email" value="{{ old('g_email') }}" />                                   
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="g_mobile">Mobile</label>

                                  <input type="text" class="form-control" placeholder="" id="g_mobile" name="g_mobile" value="{{ old('g_mobile') }}" />                                                       
                            </div>
                        </div>
                    </div>  
            </div>
            <div class="form-actions">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Send Invitation</button>
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