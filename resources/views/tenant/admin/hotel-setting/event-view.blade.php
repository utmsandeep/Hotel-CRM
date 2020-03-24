@extends('tenant.admin.layout.master')
@section('title', 'Event View')
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

            <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.eventtype' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Event</strong> View</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting) && !is_null($hotelsetting->event_type))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->event_type, true) as $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['adviser_board'] }}" name="adviser_board[]" class="form-control" placeholder="Adviser Board" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['conference'] }}" name="conference[]" class="form-control" placeholder="Conference" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['corporate_event'] }}" name="corporate_event[]" class="form-control" placeholder="Corporate Event" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['customer_training'] }}" name="customer_training[]" class="form-control" placeholder="Customer Training" required>
                                                        </div>
                                                    </div><div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['dinner'] }}" name="dinner[]" class="form-control" placeholder="Dinner" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['exhibition'] }}" name="exhibition[]" class="form-control" placeholder="Exhibition" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['meeting'] }}" name="meeting[]" class="form-control" placeholder="Meeting" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['recruiting'] }}" name="recruiting[]" class="form-control" placeholder="Recruiting" required>
                                                        </div>
                                                    </div><div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['team_meeting'] }}" name="team_meeting[]" class="form-control" placeholder="Team Meeting" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['social'] }}" name="social[]" class="form-control" placeholder="Social" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['wedding'] }}" name="wedding[]" class="form-control" placeholder="Wedding" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['lunch'] }}" name="lunch[]" class="form-control" placeholder="Lunch" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['training'] }}" name="training[]" class="form-control" placeholder="Training" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['class'] }}" name="class[]" class="form-control" placeholder="Class" required>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="non-margined btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="custom-add btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
                                    </div>
                                @else
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="row clearfix multi-field">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="adviser_board[]" class="form-control" placeholder="Adviser Board" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="conference[]" class="form-control" placeholder="Conference" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="corporate_event[]" class="form-control" placeholder="Corporate Event" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="customer_training[]" class="form-control" placeholder="Customer Training" required>
                                                    </div>
                                                </div><div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="dinner[]" class="form-control" placeholder="Dinner" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="exhibition[]" class="form-control" placeholder="Exhibition" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="meeting[]" class="form-control" placeholder="Meeting" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="recruiting[]" class="form-control" placeholder="Recruiting" required>
                                                    </div>
                                                </div><div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="team_meeting[]" class="form-control" placeholder="Team Meeting" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="social[]" class="form-control" placeholder="Social" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="wedding[]" class="form-control" placeholder="Wedding" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="lunch[]" class="form-control" placeholder="Lunch" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="training[]" class="form-control" placeholder="Training" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" name="class[]" class="form-control" placeholder="Class" required>
                                                    </div>
                                                </div>
                                                <button type="button" class="non-margined btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
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
    </script>
@stop