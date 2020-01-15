@extends('super_admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Hote admin roles </h4>
						<h6 class="card-subtitle">Hotel admin roles list</h6>
					</div>
					<div class="col-md-4">
						<a href="{{route('createRoles')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Create New Role</a>
					</div>
				</div>

				<div class="table-responsive m-t-40">
					<h5>Corporate Based</h5>
					<ul>
						<li>Chain Admin</li>
						<li>Cluster manager</li>
						<li>Regional  Sales Manager</li>
					</ul>
					<h5>Hotel Based</h5>
					<ul>
						<li>General Manager</li>
						<li>Director Of Sales </li>
						<li>Finance Manager Hotel </li>
						<li>Banquet Manager </li>
						<li>Sales Coordinator</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>				
@endsection
