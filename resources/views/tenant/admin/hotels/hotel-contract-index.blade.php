@extends('tenant.admin.layout.master')
@section('title', 'Contract List')
@section('parentPageTitle', 'Contract')
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
                                    <th>Hotel Name</th>
                                    <th>Hotel Code</th>
                                    <th>Created At</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contracts as $contract)
                                <tr class="anchor-tr" href="{{ route('tenant.admin.hotel.contract' , ['hotel_code'=>$contract->hotel->hotel_code]) }}">
                                    <td>{{ $contract->id }}</td>
                                    <td>{{ $contract->hotel->name }}</td>
                                    <td>{{ $contract->hotel->hotel_code }}</td>
                                    <td>{{ $contract->created_at }}</td>
                                   <!--  <td>
                                        <a id="" href="" class="btn btn-danger btn-xs delete">Delete</a>
                                    </td> -->
                                </tr>
                                @endforeach
                              
                                
                            </tbody>
                        </table>
                    </div>

                    <form id="delete-form" method="post" action="">
                       @csrf
                       <input type="hidden" name="_method" value="delete"> 
                    </form>
                    {{ $contracts->links() }}
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