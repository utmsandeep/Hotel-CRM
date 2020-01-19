@extends('tenant.admin.layout.master')
@section('title', 'Kids Policy')
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
            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                    <h2> <strong>Description</strong></h2>
                        <!-- <ul class="header-dropdown">
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
                        </ul> -->
                    </div>
                    <div class="body">
                        <textarea id="ckeditor"></textarea>
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
<script src="{{asset('tenant-admin/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/editors.js')}}"></script>
@stop