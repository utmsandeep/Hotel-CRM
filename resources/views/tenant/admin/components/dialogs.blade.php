@extends('tenant.admin.layout.master')
@section('title', 'Dialogs')
@section('parentPageTitle', 'UI')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/sweetalert/sweetalert.css')}}"/>
@stop
@section('content')
<div class="row clearfix js-sweetalert">
    <div class="col-md-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0 c_table">
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="basic">CLICK ME</button></td>
                        <td><span>A basic message</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="with-title">CLICK ME</button></td>
                        <td><span>A title with a text under</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="success">CLICK ME</button></td>
                        <td><span>A success message!</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="confirm">CLICK ME</button></td>
                        <td><span>A warning message, with a function attached to the <b>Confirm</b> button...</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="html-message">CLICK ME</button></td>
                        <td><span>An HTML message</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button></td>
                        <td><span>A message with auto close timer</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="we-set-buttons">CLICK ME</button></td>
                        <td><span>In the example below, we set 3 buttons</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="AJAX-requests">CLICK ME</button></td>
                        <td><span>AJAX requests</span></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-raised btn-primary waves-effect" data-type="DOM-content">CLICK ME</button></td>
                        <td><span>Using DOM nodes as content</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/ui/sweetalert.js')}}"></script>
@stop