@extends('tenant.admin.layout.master')
@section('title', 'Create Banquet')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
    <link rel="stylesheet"
          href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>

    <style>
        .dropify-wrapper{
            width: 50%;
        }
    </style>
@stop
@section('content')
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <form method="post" enctype="multipart/form-data"
                  action="{{ route('tenant.admin.hotelSetting.collection' , ['hotel_code'=>$hotel_code]) }}">

                @csrf
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Create</strong> Banquet</h2>
                            </div>
                            <div class="body">
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="row clearfix multi-field">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="text" name="name"  class="form-control"
                                                               placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="length"  class="form-control" min="0"
                                                               placeholder="Length in Ft.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="width"  class="form-control" min="0"
                                                               placeholder="Width in Ft.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="area"  class="form-control" min="0"
                                                               placeholder="Area in Sq. Ft.">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="height"  class="form-control" min="0"
                                                               placeholder="Height in Ft.">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="entry" class="form-control" min="0"
                                                               placeholder="Number Of Entry Point">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                                <textarea rows="8" name="short_des" class="form-control no-resize" placeholder="Short Description Banquet..."></textarea>
                                                        </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea rows="8" name="long_des" class="form-control no-resize" placeholder="Long Description Banquet   ..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="Separate Entrance">Separate Entrance</label><br>
                                                        <input type="radio" name="separate_entrance" value="1" checked> Yes
                                                        <input type="radio" name="separate_entrance" value="0"> No<br>
                                                    </div>
                                                </div>


                                                <div class="form-group">
	                                                <label for="logo">Seating Style</label>
                                                    <div name="add_name" id="add_name">
                                                        <div class="">
                                                            <div class="" id="dynamic_field">
                                                                <input type="text" name="seating_style[]" placeholder="Seating Style" class="form-control name_list" />
                                                                <input type="text" name="no_person[]" placeholder="Number of Persons" class="form-control name_list" />
                                                                <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="card1">
                                                            <input type="file" name="hotel_four_pictures[]" class="dropify" data-allowed-file-extensions="pdf png jpg jpeg gif" data-max-file-size="5000K">
                                                     </div>
                                                    <button type="button" name="ad" id="ad" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 add-more">Add More</button>
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
                        @csrf
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
        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<div id="row'+i+'"><input type="text" name="seating_style[]" placeholder="Seating Style" class="form-control name_list" />' +
	                '<input type="text" name="no_person[]" placeholder="Number of Persons" class="form-control name_list" />' +
	                '<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove ">X</button></div>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            var i = 1;
            $('#ad').click(function () {
                i++;
                $('.card1').append('<br> <div id="row' + i + '"><div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div>' +
                    '<input type="file" name="hotel_four_pictures[]" class="dropify" data-allowed-file-extensions="pdf png jpg jpeg gif" data-max-file-size="5000K"></div> ' +
                    '<button type="button" id="' + i + '" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 hide-field">Remove</button></div>');
            });
            $(document).on('click', '.hide-field', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
        });
    </script>
@stop