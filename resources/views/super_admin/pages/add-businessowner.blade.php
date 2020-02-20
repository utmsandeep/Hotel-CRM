@extends('super_admin.layouts.master')

@section('content')
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
                                                    <select class="form-control custom-select" name="yearly_subscription" required="">
                                                        <option value="1">1 Year</option>
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
                                                     <input type="text" class="form-control rate" name="price_per_year" value="{{ old('price_per_year') }}" required>
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Installation Cost :</label>
                                                    <input type="text" class="form-control install" name="installation_cost" value="{{ old('installation_cost') }}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Customization web page cost :</label>
                                                     <input type="text" class="form-control custom" name="customization_cost" value="{{ old('customization_cost') }}" required>
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Training fees :</label>
                                                    <input type="text" class="form-control fees" name="trainig_fees" value="{{ old('trainig_fees') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total :</label>
                                                    <input type="text" class="form-control" name="total" value="{{ old('total') }}">
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
<script type="text/javascript">
    var num1;
    var num2;
    var num3;
    var num4;
    jQuery(document).ready(function () {
        jQuery(document).on('keyup', '.rate', function () {
            num1 = jQuery(this).val();
            if(isNaN(num1)){
                num1 = 0;
            }  
            total_sum(); 
        });
        jQuery(document).on('keyup', '.install', function () {
            num2 = jQuery(this).val();
            if(isNaN(num2)){
                num2 = 0;
            }   
            total_sum();   
        });
        jQuery(document).on('keyup', '.custom', function () {
            num3 = jQuery(this).val();
             if(isNaN(num3)){
                num3 = 0;
            } 
            total_sum();     
        });
        jQuery(document).on('keyup', '.fees', function () {
            num4 = jQuery(this).val();
             if(isNaN(num4)){
                num4 = 0;
            } 
            total_sum();     
        });
    });

    function total_sum(){
        var add = parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4);
        console.log(add);
    }
</script>
@endsection
