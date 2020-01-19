@extends('tenant.admin.layout.master')
@section('title', 'Banquet List')
@section('parentPageTitle', 'Hotel Settings')
@section('create-new')
<a id="add-new" href="{{ route('tenant.admin.hotelSetting.create') }}"> <button style="min-width: 6.375rem;margin-right: 10px" class="btn btn-success btn-icon float-right" type="button">Create</button></a> 
@stop
@section('page-style')
<link rel="stylesheet" href=""/>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <!-- <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                        <a href="#" class="btn btn-info btn-xs">Block</a>
                                        <a href="#" class="btn btn-success btn-xs">Edit</a> -->
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@stop