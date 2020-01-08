@extends('super_admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Business Owner </h4>
						<h6 class="card-subtitle">Add Business Owner Form</h6>
					</div>
					<div class="col-md-4">
						<!--a href="{{'businessownerAdd'}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Create New</a>
						<a href="{{'businessownerList'}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Back</a-->
						<a href="{{ url()->previous() }}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Back</a>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <!--div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Other Sample form</h4>
                            </div-->
							<form class="mt-4" action="{{ route('businessownerStore') }}" method="POST" enctype="multipart/form-data">
								@csrf
                                <div class="card-body">
                                    <h4 class="card-title">Business Info</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Business Name</label>
                                                    <input type="text" id="businessname" name="businessname" class="form-control" placeholder="Taj Hotel" value="{{ old('businessname') }}" required="">
                                                    <small class="form-control-feedback"> </small> 
												</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Incharge First Name</label>
                                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="John doe" value="{{ old('firstname') }}" required>
                                                    <small class="form-control-feedback">  </small> 
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Incharge Last Name</label>
                                                    <input type="text" id="lastname" name="lastname" class="form-control form-control-danger" placeholder="12n" value="{{ old('lastname') }}" required>
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
                                                    <label class="control-label">Primary Mobile</label>
                                                     <input type="text" class="form-control" name="primary_mobile" value="{{ old('primary_mobile') }}">
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Secondary Mobile</label>
                                                    <input type="text" class="form-control" name="secondary_mobile" value="{{ old('secondary_mobile') }}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                     <input type="password" class="form-control" name="password" required>
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password Confirmation</label>
                                                    <input type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h4 class="card-title mt-5">Address</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" name="street" value="{{ old('street') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="state" value="{{ old('state') }}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-control custom-select" required="" name="country">
                                                        <option>--Select your Country--</option>
                                                        <option value=1>India</option>
                                                        <option value=2>Sri Lanka</option>
                                                        <option value=3>USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                            <!--button type="button" class="btn btn-dark">Cancel</button-->
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
@endsection
