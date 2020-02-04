@extends('tenant.admin.layout.master')
@section('title', 'Create Banquet')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
    <link rel="stylesheet"
          href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
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
                                                        <input type="number" name="length"  class="form-control"
                                                               placeholder="Length in Ft.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="width"  class="form-control"
                                                               placeholder="Width in Ft.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="Area"  class="form-control"
                                                               placeholder="Area in Sq. Ft.">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="Height"  class="form-control"
                                                               placeholder="Height in Ft.">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input type="number" name="entry" class="form-control"
                                                               placeholder="Number Of Entry Point">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="Separate Entrance">Separate Entrance</label><br>
                                                        <input type="radio" name="separate_entrance" value="yes" checked> Yes
                                                         <input type="radio" name="separate_entrance" value="no"> No<br>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                                <textarea rows="8" class="form-control no-resize" placeholder="Short Description Banquet..."></textarea>
                                                        </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea rows="8" class="form-control no-resize" placeholder="Long Description Banquet   ..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>

{{--	                                            <div id="production">--}}
{{--		                                            <div class="col-lg-6 col-md-6 col-sm-6" style="float:left;">--}}
{{--			                                            <div class="form-group">--}}
{{--				                                            <input type="text" name="seating_style" class="form-control" placeholder="Seating Style">--}}
{{--			                                            </div>--}}
{{--		                                            </div>--}}

{{--		                                            <div class="col-lg-4 col-md-4 col-sm-4" style="float:left;">--}}
{{--			                                            <div class="form-group">--}}
{{--				                                            <input type="number" name="no_person" class="form-control" placeholder="Number of persons">--}}
{{--			                                            </div>--}}
{{--		                                            </div>--}}
{{--	                                            </div>--}}
{{--                                                <input type='button' value='Add' id='add_production'/>--}}
{{--                                                <div class="col-lg-4 col-md-4 col-sm-4">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20" id="add_production">Add field</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}



{{--                                                <div class="col-lg-4 col-md-4 col-sm-4 ">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label for="logo">Picture Of Banquet Hall</label>--}}
{{--                                                        <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg png">--}}
{{--                                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field"> Remove</button>--}}
{{--                                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 add-more">Add field</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}




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
            $('#add_production').click(function(){
                $('#production').append('<div class="row clearfix multi-field"><div class="form-group">\n' +
                    '                                                        <input type="text" name="seating_style" class="form-control" placeholder="Seating Style">\n' +
                    '                                                    </div><div class="form-group">\n' +
                    '                                                        <input type="number" name="no_person" class="form-control" placeholder="Number of persons">\n' +
                    '                                                    </div></div>');
            });
        });
    </script>
@stop