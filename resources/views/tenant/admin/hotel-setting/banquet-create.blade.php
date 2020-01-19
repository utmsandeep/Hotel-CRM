@extends('tenant.admin.layout.master')
@section('title', 'Create Banquet')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" action="">
            @csrf
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6"> 
                            <label for="logo">Logo</label> 
                            <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
                        </div>
                    </div>  
                   
                                       
                </div>
            </div>
            <!-- <div class="form-actions">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div> -->
        </form>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/dropify.js')}}"></script>
@stop