@extends('tenant.admin.layout.master')
@section('title', 'Hotel Near By')
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
       
        <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.storenearby' , ['hotel_code'=>$hotel_code]) }}">
            @csrf
            <div class="row clearfix">
			    <div class="col-lg-12 col-md-12 col-sm-12">
			        <div class="card">
			            <div class="header">
			                <h2><strong>Near</strong> by hotels</h2>
			            </div>
			            <div class="body">
			            	@if(!empty($hotelsetting) && !is_null($hotelsetting->near_by) && $hotelsetting->near_by!=='')
			            	 <div class="multi-field-wrapper">
						        <div class="multi-fields">
						        	@foreach(json_decode($hotelsetting->near_by, true) as $item)
						        <div class="row clearfix multi-field">
						          <div class="col-lg-3 col-md-3 col-sm-3">
				                    <div class="form-group">
				                        <input type="text" value="{{ $item['name'] }}" name="name[]" class="form-control" placeholder="Name">
				                    </div>
					                </div>
					                <div class="col-lg-3 col-md-3 col-sm-3">
					                    <div class="form-group">
					                        <input type="number" value="{{ $item['distance'] }}"  name="distance[]" min="0" class="form-control" placeholder="Distance in k.m.">
					                    </div>
					                </div>
					                <div class="col-lg-3 col-md-3 col-sm-3">
					                    <div class="form-group">
					                        <input type="text" value="{{ $item['time'] }}
					                        "  name="time[]" min="0" class="form-control" placeholder="Time">
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
				                        <input type="text" name="name[]" class="form-control" placeholder="Name">
				                    </div>
					                </div>
					                <div class="col-lg-3 col-md-3 col-sm-3">
					                    <div class="form-group">
					                        <input type="number"  name="distance[]" min="0" class="form-control" placeholder="Distance in k.m.">
					                    </div>
					                </div>
					                <div class="col-lg-3 col-md-3 col-sm-3">
					                    <div class="form-group">
					                        <input type="text"  name="time[]" min="0" class="form-control" placeholder="Time">
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
</script>
@stop