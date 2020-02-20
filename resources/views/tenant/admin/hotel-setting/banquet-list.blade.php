@extends('tenant.admin.layout.master')
@section('title', 'Banquet List')
@section('parentPageTitle', 'Hotel Settings')
@section('create-new')
    <a id="add-new" href="{{ route('tenant.admin.hotelSetting.create' , ['hotel_code'=>$hotel_code]) }}">
        <button style="min-width: 6.375rem;margin-right: 10px" class="btn btn-success btn-icon float-right" type="button">Create</button></a>
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
                                    <th>Name</th>
                                    <th>Length</th>
                                    <th>Width</th>
                                    <th>Height</th>
                                    <th>Area</th>
                                    <th>Entry Point</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>

                            @foreach($banquets as $banquet)
                                <tr>
                                    <td>{{ $banquet->name}}</td>
                                    <td>{{ $banquet->length_ft}}</td>
                                    <td>{{ $banquet->width_ft}}</td>
                                    <td>{{ $banquet->height_ft}}</td>
                                    <td>{{ $banquet->area_sq_ft}}</td>
                                    <td>{{ $banquet->no_of_entry_point}}</td>
                                    <td>
                                        <form action="{{ route('tenant.admin.hotelSetting.delete', ['hotel_code' => $hotel_code , 'id' => $banquet->id] ) }}" method="post">
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="if (!confirm('Are you sure?')) { return false }"><span>Delete</span></button>
                                            <!-- <input class="btn btn-danger btn-xs" type="submit" value="Delete" /> -->
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                        <a href="#" class="btn btn-info btn-xs">Block</a>
                                        <a href="#" class="btn btn-success btn-xs">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@stop

