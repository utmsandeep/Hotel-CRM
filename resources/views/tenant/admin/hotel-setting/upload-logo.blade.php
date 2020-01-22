@extends('tenant.admin.layout.master')
@section('title', 'Upload Logo')
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
       
        <form method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="col-lg-6 col-md-12">
			    <div class="card">
			        <div class="header">
			            <h2><strong>Upload</strong> your logo</h2>
			        </div>
			        <div class="body">
			            <p>try to upload file larger than 5000 KB</p>
			            <input type="file" name="logo" class="dropify" data-allowed-file-extensions="pdf png jpg jpeg gif" data-max-file-size="5000K">
			        </div>
			        <div class="form-actions">
		                <div class="card-body">
		                    <button type="submit" class="btn btn-success">Save</button>
		                </div>
		            </div>
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
<script src="{{asset('tenant-admin/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/dropify.js')}}"></script>
@stop