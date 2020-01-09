@extends('tenant.admin.layout.master')
@section('title', 'File Upload')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="alert alert-warning" role="alert">
            <strong>dropify</strong> Taken from: <a target="_blank" href="https://github.com/JeremyFagis/dropify">View More</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Default</h2>
            </div>
            <div class="body">
                <input type="file" class="dropify">
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>With <strong>event</strong> and default file</h2>
            </div>
            <div class="body">
                <p>try to remove the image</p>
                <input type="file" id="dropify-event" data-default-file="{{asset('tenant-admin/images/image-gallery/1.jpg')}}">
            </div>
        </div>                    
        <div class="card">
            <div class="header">
                <h2><strong>Disabled</strong> file upload</h2>
            </div>
            <div class="body">
                <input type="file" class="dropify" disabled="disabled">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Limit</strong> file type</h2>
            </div>
            <div class="body">
                <p>try to upload png or pdf only</p>
                <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Limit</strong> file size</h2>
            </div>
            <div class="body">
                <p>try to upload file larger than 100 KB</p>
                <input type="file" class="dropify" data-max-file-size="100K">
            </div>
        </div>                    
        <div class="card">
            <div class="header">
                <h2>Custom <strong>messages</strong> for default</h2>
            </div>
            <div class="body">
                <p>replace, remove and error</p>
                <input type="file" class="dropify-fr">
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/dropify.js')}}"></script>
@stop