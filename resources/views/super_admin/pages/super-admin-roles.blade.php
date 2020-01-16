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
					<div class="col-md-4">
						<a href="{{route('createRoles')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-plus"></i> Create New Role</a>
					</div>
				</div>
				<div class="table-responsive m-t-40">
					<table id="config-table" class="table display table-bordered table-striped no-wrap" style="width:100%;">
						<thead>
							<tr>
								<th>Base</th>
								<th>Name</th>
								<!-- <th>Action</th> -->
							</tr>
						</thead>
						<tbody>
						@foreach($roles as $datab)
							<tr>
								<td>@if($datab->is_super == 1) 
									Super Admin
								@endif
							    </td>
								<td>{{$datab->name}}</td>
								<!-- <td>
									<a href="{{route('businessownerEdit',$datab['id'])}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
									<a href="{{route('businessownerUpdateStatus',$datab['id'])}}?isDeleted=1" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trush"></i> Delete</a>
									<a href="{{route('businessownerUpdateStatus',$datab['id'])}}?isBlocked={{ $datab['isBlocked'] ? 0 : 1 }}" class="btn btn-info btn-xs" onclick="return confirm('Are you sure want to block')"><i class="fa fa-trush"></i>{{ $datab['isBlocked'] ? 'Unblock' : 'Block' }}</a>
								</td> -->
							</tr>
						@endforeach
						</tbody>
					</table>

					{{$roles->links()}}
				</div>
			</div>
		</div>
	</div>
</div>				
@endsection


