@extends('tenant.admin.layout.master')
@section('title', 'Menu Types')
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

            <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.variety' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Applicable</strong> Taxes</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting) && !is_null($hotelsetting->menu_type))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->menu_type, true) as $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['int_name'] }}" name="name[]" class="form-control" placeholder="Name Internal">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['starter']}}" name="starter[]" class="form-control" placeholder="Starter">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['salad'] }}" name="salad[]" class="form-control" placeholder="Salad">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['course']}}" name="course[]" class="form-control" placeholder="Main Course">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['desert'] }}" name="desert[]" class="form-control" placeholder="Desert">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['breads']}}" name="breads[]" class="form-control" placeholder="Breads">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['acomp'] }}" name="acomp[]" class="form-control" placeholder="Acompliments">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['meal']}}" name="meal[]" class="form-control" placeholder="Meal Type">
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
                                                        <input type="text" name="int_name[]" class="form-control" placeholder="Name Internal">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="starter[]" class="form-control" placeholder="Starter">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  name="salad[]" class="form-control" placeholder="Salad">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  name="course[]" class="form-control" placeholder="Main Course">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  name="desert[]" class="form-control" placeholder="Desert">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="breads[]" class="form-control" placeholder="Breads">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="acomp[]" class="form-control" placeholder="Acompliments">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="meal[]" class="form-control" placeholder="Meal Type">
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