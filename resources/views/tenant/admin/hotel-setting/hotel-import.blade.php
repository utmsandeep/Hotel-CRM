@extends('tenant.admin.layout.master')
@section('title', 'Menu List')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/css/hotelsetting.css')}}"/>
@stop
@section('content')
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.import' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                            <div class="body">
                                <p>Import Hotel</p>
                                <input type="file" name="content" class="dropify">
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