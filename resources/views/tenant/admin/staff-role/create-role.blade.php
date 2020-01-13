@extends('tenant.admin.layout.master')
@section('title', 'Create Role')
@section('parentPageTitle', 'Role')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" action="{{ route('tenant.admin.role.store') }}">
            @csrf
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Role Name</label>                             
                                <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ old('name') }}" />                                   
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                 <label for="firstname">Description</label>
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please describe the role ..." name="description">{{ old('description') }}</textarea>
                                </div>
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