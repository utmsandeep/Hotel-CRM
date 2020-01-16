@extends('super_admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Unique Vanues </h4>
						<h6 class="card-subtitle">Unique Vanues data list</h6>
					</div>
					<div class="col-md-4">
						<a href="{{route('uniquevenueAdd')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Create New</a>
					</div>
				</div>
				<div class="table-responsive m-t-40">
					<table id="config-table" class="table display table-bordered table-striped no-wrap" style="width:100%;">
						<thead>
							<tr>
								<th>Name</th>
								<th>Image</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $datab)
							<tr>
								<td>{{$datab['name']}}</td>
								<td><img src="images/uniquevenue/{{$datab['image']}}" style="width:50px;height:50px;"></td>
								<td>{{$datab['small_description']}}</td>
								<td style="display:none;">
								@if($datab['is_active']==1)
								<span class="label label-success">Active</span>
								@else
								<span class="label label-danger">Inactive</span>
								@endif	
								</td>
								<td>
									<a href="{{route('uniquevenueEdit',$datab['id'])}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
									<a href="{{route('uniquevenueDelete',$datab['id'])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trush"></i> Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>				
@endsection
