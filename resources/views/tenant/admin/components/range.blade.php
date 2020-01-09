@extends('tenant.admin.layout.master')
@section('title', 'Range')
@section('parentPageTitle', 'UI')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <p>Taken by <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">ionden.com/a/plugins/ion.rangeSlider/en.html</a></p>
                <div class="irs-demo">
                    <b>Start without params</b>
                    <input type="text" id="range_01" value="" />
                </div>
                <div class="irs-demo">
                    <b>Set min value, max value and start point</b>
                    <input type="text" id="range_02" value="" />
                </div>
                <div class="irs-demo">
                    <b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
                    <input type="text" id="range_03" value="" />
                </div>
                <div class="irs-demo">
                    <b>Set up range with negative values</b>
                    <input type="text" id="range_04" value="" />
                </div>
                <div class="irs-demo">
                    <b>Using step 250</b>
                    <input type="text" id="range_05" value="" />
                </div>
                <div class="irs-demo">
                    <b>Set up range with fractional values, using fractional step</b>
                    <input type="text" id="range_06" value="" />
                </div>
                <div class="irs-demo">
                    <b>Set up you own numbers</b>
                    <input type="text" id="range_07" value="" />
                </div>
                <div class="irs-demo">
                    <b>Using any strings as your values</b>
                    <input type="text" id="range_08" value="" />
                </div>
                <div class="irs-demo">
                    <b>One more example with strings</b>
                    <input type="text" id="range_09" value="" />
                </div>
                <div class="irs-demo">
                    <b>No prettify. Big numbers are ugly and unreadable</b>
                    <input type="text" id="range_10" value="" />
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/ui/range-sliders.js')}}"></script>
@stop