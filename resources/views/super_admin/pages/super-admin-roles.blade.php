@extends('super_admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Super admin roles </h4>
						<h6 class="card-subtitle">Super admin roles list</h6>
					</div>
					<!-- <div class="col-md-4" style="display:none;">
						<a href="{{route('bannerAdd')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Create New</a>
					</div> -->
				</div>

				<div class="table-responsive m-t-40">
					<ul>
						<li>Super Admin</li>
						<li>Market manager super admin </li>
						<li>Finance manager super admin</li>
					</ul>
					
					
					
				</div>
			</div>
		</div>
	</div>
</div>				
@endsection
