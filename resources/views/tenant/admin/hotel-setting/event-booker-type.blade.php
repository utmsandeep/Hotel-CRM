@extends('tenant.admin.layout.master')
@section('title', 'Event Booker Type')
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

            <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.listed' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Event Booker</strong> Type</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting) && !is_null($hotelsetting->menu_list))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->menu_list, true) as $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['food_name'] }}" name="food_name[]" class="form-control" placeholder="Food">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['type']}}" name="type[]" class="form-control changeable" placeholder="Meal Type">
                                                        </div>
                                                    </div>

                                                    <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
                                    </div>
                                @else
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="row clearfix multi-field">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="food_name[]" class="form-control" placeholder="Food">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  name="type[]"  class="form-control changeable" placeholder="Meal Type">
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
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
    <script>
        var counter = 1;
        $('.multi-field-wrapper').each(function() {
            counter++;
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function(e) {
                $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
            });
            $('.multi-field .remove-field', $wrapper).click(function() {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });

        jQuery(document).on('keyup' , '.changeable' , function(){
            console.log($(this).parent().next('div div .total'));
        });
    </script>
@stop