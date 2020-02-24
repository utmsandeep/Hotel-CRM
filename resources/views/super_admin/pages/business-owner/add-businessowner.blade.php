@extends('super_admin.layouts.master')

@section('content')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance:textfield;
        }
    </style>
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Chain</h4>
						<h6 class="card-subtitle">Add Chain Form</h6>
					</div>
					<div class="col-md-4">
						<a href="{{ url()->previous() }}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Back</a>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

							<form class="mt-4" action="{{ route('businessownerStore') }}" method="POST" enctype="multipart/form-data">
								@csrf
                                <div class="card-body">
                                    <h4 class="card-title">Business Info</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Business Name</label>
                                                    <input type="text" id="businessname" name="businessname" class="form-control" placeholder="" value="{{ old('businessname') }}" required="">
                                                    <small class="form-control-feedback"> </small>
												</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Chain Code</label>
                                                    <input type="text" id="chain_code" name="chain_code" class="form-control" placeholder="" value="{{ old('chain_code') }}" required="">
                                                    <small class="form-control-feedback"> </small>
												</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="" value="{{ old('firstname') }}" required>
                                                    <small class="form-control-feedback">  </small>
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" id="lastname" name="lastname" class="form-control form-control-danger" placeholder="" value="{{ old('lastname') }}" required>
                                                    <small class="form-control-feedback" > </small>
												</div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select" name="gender" required="">
                                                        <option value=1>Male</option>
                                                        <option value=2>Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"></small>
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sub Domain</label>
                                                    <input type="text" class="form-control" name="subdomain" value="{{ old('subdomain') }}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                     <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">GST NO</label>
                                                    <input type="text" class="form-control" name="gst_no" value="{{ old('gst_no') }}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                     <input type="text" class="form-control" name="primary_mobile" value="{{ old('primary_mobile') }}">
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Yearly Subscription</label>
                                                    <select class="form-control custom-select yearly" name="yearly_subscription" required="" onchange="handleValuesUpdated(this.value,'yearly')">
                                                        <option value="1" selected>1 Year</option>
                                                        <option value="2">2 Year</option>
                                                        <option value="3">3 Year</option>
                                                        <option value="4">4 Year</option>
                                                    </select>
                                                    <small class="form-control-feedback"></small>
												</div>
                                            </div>

                                        </div>

                                    </div>
                                    <hr>
                                    <div class="card-body">
                                    	<h5 class="card-title">Total Cost</h5>
                                	</div>

                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price Per Year :</label>
                                                     <input type="number" class="form-control" id= "rate" min="0" step="0.01" name="price_per_year" required value="{{ old('price_per_year') }}" required onkeyup="handleValuesUpdated(this.value,'rate')">
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Installation Cost :</label>
                                                    <input type="number" class="form-control" id="install" min="0" step="0.01" name="installation_cost" required value="{{ old('installation_cost') }}" onkeyup="handleValuesUpdated(this.value,'install')">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Customization web page cost :</label>
                                                     <input type="number" class="form-control" id="custom" min="0" step="0.01" name="customization_cost" required value="{{ old('customization_cost') }}" required onkeyup="handleValuesUpdated(this.value,'custom')">
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Training fees :</label>
                                                    <input type="number" class="form-control" id="fees" min="0" step="0.01" name="trainig_fees" required value="{{ old('trainig_fees') }}" onkeyup="handleValuesUpdated(this.value,'fees')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total :</label>
                                                    <input type="number" class="form-control" id="sum" min="0" step="0.01" name="total" value="{{ old('total') }}" disabled>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    jQuery(document).ready(function(){
       jQuery(document).on('keyup' , '#businessname' , function(){
        businessname = jQuery(this).val()
        jQuery("[name='subdomain']").val(businessname.replace(/\s/g , "-"));
       })
    });
</script>
<!-- <script type="text/javascript">
     let values = {
'yearly': 0,
'rate': 0,
'install': 0,
'custom': 0,
'fees': 0,
};

window.onload = () => {
values = {
'yearly': convert($('.yearly').val()),
'rate': convert($('#rate').val()),
'install': convert($('#install').val()),
'custom': convert($('#custom').val()),
'fees': convert($('#fees').val()),
};
};

handleValuesUpdated = (value, field) => {
values[field] = convert(value);
const total = (values.yearly * values.rate) + (values.fees + values.custom + values.install);
$('#sum').val(total);
};

convert = (value) => {
if (isNaN(value) || typeof value === 'undefined' || value === null || value === '') return 0;
else return Number.parseInt(value);
};
</script> -->
<script type="text/javascript">
jQuery(document).ready(function () {
        jQuery(document).on('keyup', '#rate', function () {
            var num1 = jQuery(this).val();
            total_sum();
        });
        jQuery(document).on('keyup', '#install', function () {
            var num2 = jQuery(this).val();
            total_sum();
        });
        jQuery(document).on('keyup', '#custom', function () {
            var num3 = jQuery(this).val();
            total_sum();
        });
        jQuery(document).on('keyup', '#fees', function () {
            var num4 = jQuery(this).val();
            total_sum();
        });
        jQuery(document).on('change', '.yearly', function () {
            var num5 = $(".yearly option:selected").val();
            total_sum();
        });
    });

    function total_sum(){

        var num1 = $('#rate').val();
        var num2 = $('#install').val();
        var num3 = $('#custom').val();
        var num4 = $('#fees').val();
        var num5 = $('.yearly option:selected').val();

        if(isNaN(num1) || typeof num1 === 'undefined' || num1 === null || num1 === ''){
                num1 = 0;
            }
        if(isNaN(num2) || typeof num2 === 'undefined' || num2 === null || num2 === ''){
                num2 = 0;
            }
        if(isNaN(num3) || typeof num3 === 'undefined' || num3 === null || num3 === ''){
                num3 = 0;
            }
        if(isNaN(num4) || typeof num4 === 'undefined' || num4 === null || num4 === ''){
                num4 = 0;
            }
        if(isNaN(num5) || typeof num5 === 'undefined' || num5 === null || num5 === ''){
                num5 = 1;
            }
        var multi = parseFloat(num1) * parseFloat(num5);
        var add = parseFloat(multi)+ parseFloat(num2) + parseFloat(num3) + parseFloat(num4);
        Number.parseFloat($(this).find('input[name="total"]').val(add));
        $("#sum").val(add);
    }
</script>
@endsection
