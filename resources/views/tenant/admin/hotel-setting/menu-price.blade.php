@extends('tenant.admin.layout.master')
@section('title', 'Menu Price')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@stop
@section('content')
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.prices' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Applicable</strong> Taxes</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting) && !is_null($hotelsetting->menu_price_season))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->menu_price_season, true) as $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['menu_name'] }}" name="menu_name[]" class="form-control" placeholder="Menu Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['price']}}" name="price[]" class="form-control" placeholder="Price Per Person">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['res'] }}" name="res[]" class="form-control" placeholder="Non-Res">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['kids']}}" name="kids[]" class="form-control" placeholder="Kids Above 10">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['start_date'] }}" name="start_date[]" class="form-control datepicker" placeholder="Start Date">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['end_date']}}" name="end_date[]" class="form-control datepicker" placeholder="End Date">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['tax'] }}" name="tax[]" class="form-control" placeholder="Tax Included">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['override']}}" name="override[]" class="form-control" placeholder="Override">
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
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="menu_name[]" class="form-control" placeholder="Menu Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="price[]" class="form-control" placeholder="Price Per Person">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text"  name="res[]" class="form-control" placeholder="Non-Res">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text"  name="kids[]" class="form-control" placeholder="Kids Above 10">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text"  name="start_date[]" class="form-control datepicker" placeholder="Start Date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="end_date[]" class="form-control datepicker" placeholder="End Date">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="tax[]" class="form-control" placeholder="Tax Included">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="override[]" class="form-control" placeholder="Override">
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

         $( function() {
            $( ".datepicker" ).datepicker();
          } );
    </script>
@stop