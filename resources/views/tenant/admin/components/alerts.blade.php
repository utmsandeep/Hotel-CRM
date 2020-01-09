@extends('tenant.admin.layout.master')
@section('title', 'Alerts')
@section('parentPageTitle', 'UI')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic Bootstrap</strong> Alerts
                    <small>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</small>
                </h2>
            </div>
            <div class="body">
                <div class="alert alert-success">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info">
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                </div>
                <div class="alert alert-danger">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Links</strong> in Alerts
                    <small>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</small>
                </h2>
            </div>
            <div class="body">
                <div class="alert alert-success">
                    <strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message</a>.
                </div>
                <div class="alert alert-info">
                    <strong>Heads up!</strong> This <a href="javascript:void(0);" class="alert-link">alert needs your attention</a>, but it's not super important.
                </div>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good</a>.
                </div>
                <div class="alert alert-danger">
                    <strong>Oh snap!</strong> <a href="javascript:void(0);" class="alert-link">Change a few things up</a> and try submitting again.
                </div>                        
            </div>
        </div>
    </div>
</div>
@stop