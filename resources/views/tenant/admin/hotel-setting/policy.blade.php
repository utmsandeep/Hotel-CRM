@extends('tenant.admin.layout.master')
@section('title', 'Policy')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/css/hotelsetting.css')}}"/>
    <style>
        #cke_1_contents{
            height: 150px !important;
        }
        
    </style>
@stop
@section('content')
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <form method="post" enctype="multipart/form-data" action="{{ route('tenant.admin.hotelSetting.savepolicy' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Policy</strong>details</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->policies, true) as $key =>  $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 policy-input">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['policy_name'] }}" name="policy_name[]" class="form-control" placeholder="Policy Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 default-checkbox">
                                                        <div class="form-group">
                                                            <input type="checkbox" name="default[]"  {{$item['default']=="true" ? 'checked' : ' '}} >Default
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 custom-textarea">
                                                        <div class="form-group">
                                                            <textarea id="editor{{$key}}" name="policy_detail[]" placeholder="Policy Detail">{{$item['policy_detail']}}</textarea>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="custom-add btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
                                    </div>
                                @else
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="row clearfix multi-field">
                                                <div class="col-lg-2 col-md-2 col-sm-2 policy-input">
                                                    <div class="form-group">
                                                        <input type="text" name="policy_name[]" class="form-control" placeholder="Policy Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 default-checkbox">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="default[]"  value="1" checked>Default
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 custom-textarea">
                                                    <div class="form-group">
                                                        <textarea id="editor0" name="policy_detail[]" placeholder="Policy Detail"></textarea>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                            </div>
                                        </div>
                                        <button type="button" class="custom-add btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
                                    </div>
                                @endif
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
    <script src="{{asset('tenant-admin/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('tenant-admin/js/pages/forms/dropify.js')}}"></script>
    <script src="{{asset('tenant-admin/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('tenant-admin/js/pages/forms/editors.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor0' );
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
        CKEDITOR.replace( 'editor4' );
        CKEDITOR.replace( 'editor5' );
        CKEDITOR.replace( 'editor6' );
        CKEDITOR.replace( 'editor7' );
    </script>


    <script>
        var counter = 1;
        $('.multi-field-wrapper').each(function() {
            counter++;
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function(e) {
                // $(wrapper).append(' <div class="row clearfix multi-field"><div class="col-lg-2 col-md-2 col-sm-2"><div class="form-group"><input type="text" value="" name="policy_name[]" class="form-control" placeholder="Policy Name"></div></div><div class="col-lg-2 col-md-2 col-sm-2"><div class="form-group"><input type="checkbox" name="default[]">Default</div></div> <div class="col-lg-8 col-md-8 col-sm-8"><div class="form-group"><textarea id="editor1" name="policy_detail[]" placeholder="Policy Detail"></textarea> </div></div><button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button></div>');
                //$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
            });
            $('.multi-field .remove-field', $wrapper).click(function() {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });

          $(document).ready(function(){
              

              $(document).on('click', '.add-field', function () {
                  
                  var id = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
                  $(".multi-fields").append('<div class="row clearfix multi-field"><div class="col-lg-2 col-md-2 col-sm-2 policy-input"><div class="form-group">' +
                      '<input type="text" value="" name="policy_name[]" class="form-control" placeholder="Policy Name"></div></div>' +
                      '<div class="col-lg-2 col-md-2 col-sm-2 default-checkbox"><div class="form-group"><input type="checkbox" name="default[]" value="1" checked>Default</div></div> ' +
                      '<div class="col-lg-8 col-md-8 col-sm-8 custom-textarea"><div class="form-group"><textarea id="' + id + '" name="policy_detail[]" placeholder="Policy Detail">' +
                      '</textarea> </div></div><button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 rem-field">Remove</button></div>');
                  CKEDITOR.replace(id);
              });
              $(document).on('click', '.rem-field', function () {
                  if ($('.multi-field').length > 1)
                      $(this).parent('.multi-field').remove();
              });


        });
    </script>
@stop








{{--@extends('tenant.admin.layout.master')--}}
{{--@section('title', 'Policy')--}}
{{--@section('parentPageTitle', 'Hotel Settings')--}}
{{--@section('page-style')--}}
{{--<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>--}}
{{--<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>--}}
{{--<link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>--}}
{{--<style>--}}
{{--    #cke_1_contents{--}}
{{--        height: 150px !important;--}}
{{--    }--}}
{{--</style>--}}
{{--@stop--}}
{{--@section('content')--}}
{{--<!-- Input -->--}}
{{--<div class="row clearfix">--}}
{{--    <div class="col-lg-12 col-md-12 col-sm-12">--}}

{{--        <form method="post" enctype="multipart/form-data" action="{{ route('tenant.admin.hotelSetting.savepolicy' , ['hotel_code'=>$hotel_code]) }}">--}}
{{--            @csrf--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>Booking Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor1" name="booking_policy">@if(!empty($hotelsetting)){{$hotelsetting->booking_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>Cancellation Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor2" name="cancellation_policy">@if(!empty($hotelsetting)){{$hotelsetting->cancellation_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>No show Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor3" name="no_show_policy">@if(!empty($hotelsetting)){{$hotelsetting->no_show_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>Kids Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor4" name="kids_policy">@if(!empty($hotelsetting)){{$hotelsetting->kids_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>Non Residiential Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor5" name="non_residiential_policy">@if(!empty($hotelsetting)){{$hotelsetting->non_residiential_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>Bevrages Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor6" name="beverages_policy">@if(!empty($hotelsetting)){{$hotelsetting->beverages_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="header">--}}
{{--                            <h2> <strong>Deposite Refund Policy</strong></h2>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <textarea id="editor7" name="deposite_refund_policy">@if(!empty($hotelsetting)){{$hotelsetting->deposite_refund_policy}}@endif</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-actions">--}}
{{--                <div class="card-body">--}}
{{--                    <button type="submit" class="btn btn-success">Save</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@stop--}}
{{--@section('page-script')--}}
{{--<script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>--}}
{{--<script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>--}}
{{--<script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>--}}
{{--<script src="{{asset('tenant-admin/plugins/dropify/js/dropify.min.js')}}"></script>--}}
{{--<script src="{{asset('tenant-admin/js/pages/forms/dropify.js')}}"></script>--}}
{{--<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>--}}
{{--<!-- <script src="{{asset('tenant-admin/plugins/ckeditor/ckeditor.js')}}"></script>--}}
{{--<script src="{{asset('tenant-admin/js/pages/forms/editors.js')}}"></script> -->--}}
{{--<script>--}}
{{--        CKEDITOR.replace( 'editor1' );--}}
{{--        CKEDITOR.replace( 'editor2' );--}}
{{--        CKEDITOR.replace( 'editor3' );--}}
{{--        CKEDITOR.replace( 'editor4' );--}}
{{--        CKEDITOR.replace( 'editor5' );--}}
{{--        CKEDITOR.replace( 'editor6' );--}}
{{--        CKEDITOR.replace( 'editor7' );--}}
{{--</script>--}}
{{--@stop--}}
