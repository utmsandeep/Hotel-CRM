@extends('tenant.admin.layout.master')
@section('title', 'Blog Post')
@section('parentPageTitle', 'Blog')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Blog title" />
                </div>
                <select class="form-control show-tick">
                    <option>Select Category --</option>
                    <option>Web Design</option>
                    <option>Photography</option>
                    <option>Technology</option>
                    <option>Lifestyle</option>
                    <option>Sports</option>
                </select>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="summernote">
                    Hello there,
                    <br/>
                    <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                    <p>Please try <b>paste some texts</b> here</p>
                </div>
                <button type="button" class="btn btn-info waves-effect m-t-20">POST</button>
            </div>
        </div>
    </div>            
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/summernote/dist/summernote.js')}}"></script>
@stop