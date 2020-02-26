@extends('tenant.admin.layout.master')
@section('title', 'Proposal List')
@section('parentPageTitle', 'Proposal')
@section('create-new')

@stop
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/summernote/dist/summernote.css')}}"/>
<style type="text/css">
.anchor-tr{
    cursor : pointer;
}
</style>
@stop
@section('content')
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card project_list">
                    <div class="table-responsive">
                        <table class="table table-hover c_table theme-color">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Lead Id</th>
                                    <th>Lead Email</th>
                                    <th>Is Signed</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($perposals as $perposal)
                                <tr class="anchor-tr" href="{{ route('tenant.admin.showPerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]) }}">
                                    <td>{{ $perposal->id }}</td>
                                    <td>{{ $perposal->lead_id }}</td>
                                    <td>{{ $perposal->lead->email }}</td>
                                    <td>{{ $perposal->isAdminApproved && $perposal->isClientApproved ? 'Yes' : 'No' }}</td>
                                    <td>{{ $perposal->created_at }}</td>
                                    <td>
                                        <a id="{{ $perposal->id }}" href="{{ route('tenant.admin.perposal.delete' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]) }}" class="btn btn-danger btn-xs delete">Delete</a>
                                       <!--  <a href="#" class="btn btn-info btn-xs">Block</a>
                                        <a href="#" class="btn btn-success btn-xs">Edit</a> -->
                                    </td>
                                </tr>
                                @endforeach
                              
                                
                            </tbody>
                        </table>
                    </div>

                    <form id="delete-form" method="post" action="">
                       @csrf
                       <input type="hidden" name="_method" value="delete"> 
                    </form>
                    {{ $perposals->links() }}
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
@stop

@section('page-script')
<script type="text/javascript">
    jQuery(document).on('click' , '.delete' , function(e){
        e.preventDefault();
        if(confirm('Do you really want to delete it ?')){
            var url = jQuery(this).attr('href');
            jQuery('#delete-form').attr('action' , url);
            jQuery('#delete-form').submit();
        }
       return false;
    });
    jQuery(document).on('click' , '.anchor-tr' , function(){

        window.location.href = jQuery(this).attr('href');
    });
</script>
@stop