@extends('tenant.admin.layout.master')
@section('title', 'Bank Account Detail')
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

            <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.detail' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Details</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting) && !is_null($hotelsetting->bank_account_detail))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->bank_account_detail, true) as $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account_name"><b>Account Name</b></label>
                                                            <input type="text" value="{{ $item['account_name'] }}" name="account_name" class="form-control" placeholder="Account Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account_number"><b>Account Number</b></label>
                                                            <input type="text" value="{{ $item['account_number']}}" name="account_number" class="form-control" placeholder="Account Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="bank_name"><b>Bank Name</b></label>
                                                            <input type="text" value="{{ $item['bank_name'] }}" name="bank_name" class="form-control" placeholder="Bank Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account_type"><b>Account Type</b></label>
                                                            <input type="text" value="{{ $item['account_type']}}" name="account_type" class="form-control" placeholder="Account Type">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="ifsc_code"><b>IFSC Code</b></label>
                                                            <input type="text" value="{{ $item['ifsc_code'] }}" name="ifsc_code" class="form-control" placeholder="IFSC Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="micr_code"><b>MICR Code</b></label>
                                                            <input type="text" value="{{ $item['micr_code']}}" name="micr_code" class="form-control" placeholder="MICR Code">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="bsr_code"><b>BSR Code</b></label>
                                                            <input type="text" value="{{ $item['bsr_code'] }}" name="bsr_code" class="form-control" placeholder="BSR Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="address"><b>Address</b></label>
                                                            <input type="text" value="{{ $item['address']}}" name="address" class="form-control" placeholder="Address">
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="branch_code"><b>Branch Code</b></label>
                                                            <input type="text" value="{{ $item['branch_code'] }}" name="branch_code" class="form-control" placeholder="Branch Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="branch_name"><b>Branch Name</b></label>
                                                            <input type="text" value="{{ $item['branch_name']}}" name="branch_name" class="form-control" placeholder="Branch Name">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="row clearfix multi-field">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account_name">Account Name</label>
                                                        <input type="text" name="account_name" class="form-control" placeholder="Account Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account_number">Account Number</label>
                                                        <input type="text" name="account_number" class="form-control" placeholder="Account Number">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="bank_name"><b>Bank Name</b></label>
                                                        <input type="text"  name="bank_name" class="form-control" placeholder="Bank Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account_type"><b>Account Type</b></label>
                                                        <input type="text"  name="account_type" class="form-control" placeholder="Account Type">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="ifsc_code"><b>IFSC Code</b></label>
                                                        <input type="text"  name="ifsc_code" class="form-control" placeholder="IFSC Code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="micr_code"><b>MICR Code</b></label>
                                                        <input type="text" name="micr_code" class="form-control" placeholder="MICR Code">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="bsr_code"><b>BSR Code</b></label>
                                                        <input type="text" name="bsr_code" class="form-control" placeholder="BSR Code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="address"><b>Address</b></label>
                                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="branch_code"><b>Branch Code</b></label>
                                                        <input type="text" name="branch_code" class="form-control" placeholder="Branch Code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="branch_name"><b>Branch Name</b></label>
                                                        <input type="text" name="branch_name" class="form-control" placeholder="Branch Name">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
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
        // var counter = 1;
        // $('.multi-field-wrapper').each(function() {
        //     counter++;
        //     var $wrapper = $('.multi-fields', this);
        //     $(".add-field", $(this)).click(function(e) {
        //         $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
        //     });
        //     $('.multi-field .remove-field', $wrapper).click(function() {
        //         if ($('.multi-field', $wrapper).length > 1)
        //             $(this).parent('.multi-field').remove();
        //     });
        // });

        jQuery(document).on('keyup' , '.changeable' , function(){
            console.log($(this).parent().next('div div .total'));
        });
    </script>
@stop