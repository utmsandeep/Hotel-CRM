@extends('super_admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Hotel Chain </h4>
						<h6 class="card-subtitle">Hotel Chain List</h6>
					</div>
					<div class="col-md-4" style="">
						<a href="{{route('businessownerAdd')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Create New</a>
					</div>
				</div>
				<div class="table-responsive m-t-40">
					<table id="config-table" class="table display table-bordered table-striped no-wrap" style="width:100%;">
						<thead>
							<tr>
								<th>Business Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Chain Code</th>
								<th>Site Url</th>
								<th>Is Blocked</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $datab)
							<tr>
								<td>{{$datab['businessname']}}</td>
								<td>{{$datab['email']}}</td>
								<td>{{$datab['primary_mobile']}}</td>
								<td>{{$datab['chain_code']}}</td>
								<td><a target="blank" href="http://{{$datab['subdomain']}}.{{ request()->getHttpHost() }}">{{$datab['subdomain']}}.{{ request()->getHttpHost() }}</a></td>
								<td>{{ $datab['isBlocked'] ? 'yes' : 'No' }}</td>
								<td>
									<a href="{{route('businessownerEdit',$datab['id'])}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
									<a href="{{route('businessownerUpdateStatus',$datab['id'])}}?isDeleted=1" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trush"></i> Delete</a>
									<a href="{{route('businessownerUpdateStatus',$datab['id'])}}?isBlocked={{ $datab['isBlocked'] ? 0 : 1 }}" class="btn btn-info btn-xs" onclick="return confirm('Are you sure want to block')"><i class="fa fa-trush"></i>{{ $datab['isBlocked'] ? 'Unblock' : 'Block' }}</a>
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
