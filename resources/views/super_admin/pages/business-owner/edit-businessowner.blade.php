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
						<h6 class="card-subtitle">Update Business Owner Form</h6>
					</div>
					<div class="col-md-4">
						<a href="{{ url()->previous() }}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Back</a>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
							<form class="mt-4" action="{{ route('businessownerUpdate' , $businessowner['id']) }}" method="POST" enctype="multipart/form-data">
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
                                                    <label class="control-label">Business Name</label><br>
                                                    <span>{{ $businessowner['businessname'] }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Incharge First Name</label>
                                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="John doe" value="{{ $businessowner['firstname'] }}" required>
                                                    <small class="form-control-feedback">  </small> 
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Incharge Last Name</label>
                                                    <input type="text" id="lastname" name="lastname" class="form-control form-control-danger" placeholder="12n" value="{{ $businessowner['lastname'] }}" required>
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
                                                        <option value=1 @if ($businessowner['gender'] == 1) selected @endif>Male</option>
                                                        <option value=2 @if ($businessowner['gender'] == 2) selected @endif>Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"></small> 
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sub Domain</label><br>
                                                    <span>{{ $businessowner['subdomain'] }}</span>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                     <input type="text" class="form-control" name="email" value="{{ $businessowner['email'] }}" required>
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">GST NO</label>
                                                    <input type="text" class="form-control" name="gst_no" value="{{ $businessowner['gst_no'] }}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Primary Mobile</label>
                                                     <input type="text" class="form-control" name="primary_mobile" value="{{ $businessowner['primary_mobile'] }}">
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Secondary Mobile</label>
                                                    <input type="text" class="form-control" name="secondary_mobile" value="{{ $businessowner['secondary_mobile'] }}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                     <input type="password" class="form-control" name="password" value="">
                                                    <small class="form-control-feedback"></small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password Confirmation</label>
                                                    <input type="password" class="form-control" name="password_confirmation" value="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                       
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
