@extends('tenant.admin.layout.master')
@section('title', 'Applicable Taxes')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/css/hotelsetting.css')}}"/>
	<style>
		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin: 0;
		}</style>

@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" enctype="multipart/form-data"  action="{{ route('tenant.admin.hotelSetting.taxes' , ['hotel_code'=>$hotel_code]) }}">
            @csrf
            
			<div class="row clearfix">
			    <div class="col-lg-12 col-md-12 col-sm-12">
			        <div class="card">
			            <div class="header">
			                <h2><strong>Applicable</strong> Taxes</h2>
			            </div>
			            <div class="body">
							@if(!empty($hotelsetting) && !is_null($hotelsetting->applicable_taxes))
			            	 <div class="multi-field-wrapper">
							  <div class="multi-fields">
			            	 	@foreach(json_decode($hotelsetting->applicable_taxes, true) as $item)
							        <div class="row clearfix multi-field">
							          <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <input type="text" value="{{ $item['tax_name'] }}" name="tax_name[]" class="form-control" placeholder="Tax Name" required>
                                            </div>
						              </div>
						              <div class="col-lg-2 col-md-2 col-sm-2">
						                    <div class="form-group">
						                        <input type="number" value="{{ $item['vat']}}" name="vat[]" class="form-control changeable" min="0" placeholder="VAT in %" required>
						                    </div>
						              </div>
                                      <div class="col-lg-2 col-md-2 col-sm-2">
						                    <div class="form-group">
						                        <input type="number" value="{{ $item['cgst']}}" name="cgst[]" class="form-control changeable"  min="0"  placeholder="CGST in %" required>
						                    </div>
						              </div>
                                      <div class="col-lg-2 col-md-2 col-sm-2">
						                    <div class="form-group">
						                        <input type="number" value="{{ $item['sgst']}}" name="sgst[]" class="form-control changeable" min="0" placeholder="SGST in %" required>
						                    </div>
						              </div>
                                      <div class="col-lg-2 col-md-2 col-sm-2">
						                    <div class="form-group">
						                        <input type="number" value="{{ $item['vat'] + $item['cgst'] + $item['sgst'] }}" name="total[]" class="form-control total" min="0"  placeholder="Total in %" required>
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
						            <div class="col-lg-2 col-md-2 col-sm-2">

				                    <div class="form-group">
				                        <input type="text" name="tax_name[]" class="form-control" placeholder="Tax Name" required>
				                    </div>
					                </div>
					                <div class="col-lg-2 col-md-2 col-sm-2">
					                    <div class="form-group">
					                        <input type="number"  name="vat[]"   class="form-control changeable" min="0" placeholder="VAT in %" required>
					                    </div>
					                </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
					                    <div class="form-group">
					                        <input type="number"  name="cgst[]"  class="form-control changeable" min="0"   placeholder="CGST in %" required>
					                    </div>
					                </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
					                    <div class="form-group">
					                        <input type="number"  name="sgst[]" class="form-control changeable" min="0"   placeholder="SGST in %" required>
					                    </div>
					                </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
					                    <div class="form-group">
					                        <input type="text"  name="total[]"  class="form-control total" placeholder="Total in %" required>
					                    </div>
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
		    e.preventDefault();
	        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
	    });
	    $('.multi-field .remove-field', $wrapper).click(function() {
	        if ($('.multi-field', $wrapper).length > 1)
	            $(this).parent('.multi-field').remove();
	    });
	});
</script>

<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery(document).on('keyup', '.changeable', function () {
			if(isNaN(Number.parseInt($(this).parents(".multi-field").find('input[name="vat[]"]').val()))){
				var num1 = 0;
			}else{
				var num1 = Number.parseInt($(this).parents(".multi-field").find('input[name="vat[]"]').val());
			}
			if(isNaN(Number.parseInt($(this).parents(".multi-field").find('input[name="cgst[]"]').val()))){
				var num2 = 0;
			}else{
				var num2 = Number.parseInt($(this).parents(".multi-field").find('input[name="cgst[]"]').val());
			}
			if(isNaN(Number.parseInt($(this).parents(".multi-field").find('input[name="sgst[]"]').val()))){
				var num3 = 0;
			}else{
				var num3 = Number.parseInt($(this).parents(".multi-field").find('input[name="sgst[]"]').val());
			}
			var add = num1 + num2 + num3;
			Number.parseInt($(this).parents(".multi-field").find('input[name="total[]"]').val(add));
		});
	});
</script>
@stop