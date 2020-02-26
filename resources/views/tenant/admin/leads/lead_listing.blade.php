@extends('tenant.admin.layout.master')
@section('title', 'Lead List')
@section('parentPageTitle', 'Lead')
@section('create-new')
<!-- <a id="add-new" href="{{ route('tenant.admin.hotel.create') }}"> <button style="min-width: 6.375rem;margin-right: 10px" class="btn btn-success btn-icon float-right" type="button">Create</button></a>  -->
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
                                    <th>Lead Id</th>
                                    <!-- <th>Request Id</th> -->
                                    <th>Group Contact</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leads as $lead)
                                <tr class="anchor-tr" href="{{ route('tenant.admin.lead.show' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead->id]) }}">
                                    <td>{{ $lead->id }}</td>
                                    <!-- <td>{{ $lead->request_id }}</td> -->
                                    <td>{{ $lead->group_contact }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->phone_number }}</td>
                                    <td>{{ $lead->created_at }}</td>
                                    <td>
                                       <!--  <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                        <a href="#" class="btn btn-info btn-xs">Block</a> -->
                                        <a target="_blank" href="{{ route('tenant.admin.showPerposalTemplate' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead->id]) }}" class="btn btn-success btn-xs">Make Proposal</a>
                                    </td>
                                </tr>
                                @endforeach
                              
                                
                            </tbody>
                        </table>
                    </div>
                    {{ $leads->links() }}
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
    jQuery(document).on('click' , '.anchor-tr' , function(){
        window.location.href = jQuery(this).attr('href');
    });
</script>
@stop