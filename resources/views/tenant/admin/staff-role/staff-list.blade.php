@extends('tenant.admin.layout.master')
@section('title', 'Staff List')
@section('parentPageTitle', 'Staff')
@section('create-new')
<a id="add-new" href="{{ route('tenant.admin.staff.create') }}"> <button style="min-width: 6.375rem;margin-right: 10px" class="btn btn-success btn-icon float-right" type="button">Create</button></a> 
@stop
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/summernote/dist/summernote.css')}}"/>
@stop
@section('content')
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card project_list">
                    <div class="table-responsive">
                        <table class="table table-hover c_table theme-color">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Is Blocked</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($staff as $stf)
                                <tr>
                                    <td>
                                        <img class="rounded avatar" src="{{asset('tenant-admin/images/xs/avatar1.jpg')}}" alt="">
                                    </td>
                                    <td>
                                        <a class="single-user-name" href="javascript:void(0);">{{ $stf->firstname }} {{ $stf->lastname }}</a><br>
                                        <small>@if(isset($stf->adminRole)) {{ $stf->adminRole->name }} @endif</small>
                                    </td>
                                    <td>{{ $stf->email }}</td>
                                    <td>{{ $stf->primary_mobile }}</td>
                                     <td>{{ $stf->isBlocked ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a  href="{{ route('tenant.admin.staff.delete' , ['admin_id'=>$stf->id]) }}" class="btn btn-danger btn-xs delete-anchor">Delete</a>
                                        <a href="{{ route('tenant.admin.staff.block' , ['admin_id'=>$stf->id , 'action'=>$stf->isBlocked ? 'unblock' : 'block']) }}" class="btn btn-info btn-xs block-anchor">{{ $stf->isBlocked ? 'Unblock' : 'Block' }}</a>
                                        <a href="{{ route('tenant.admin.staff.edit' , ['admin_id'=>$stf->id]) }}" class="btn btn-success btn-xs">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    {{ $staff->links() }}
                    <!-- <ul class="pagination pagination-primary mt-4">
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <form method="post" id="delete-form" action="">
            @csrf
            <input type="hidden" name="_method" value="delete">
        </form>
         <form method="post" id="block-form" action="">
            @csrf
            <input type="hidden" name="_method" value="patch">
        </form>
        @section('page-script')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript" src="{{ asset('js/custom-scripts.js') }}"></script>
        @stop
@stop