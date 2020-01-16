@extends('tenant.admin.layout.master')
@section('title', 'Create Hotel')
@section('parentPageTitle', 'Hotel')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" action="{{ route('tenant.admin.hotel.store') }}">
            @csrf
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Hotel Name</label>                             
                                <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ old('name') }}" />                                   
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="region">Region</label>                             
                                <select class="form-control custom-select" name="region" id="region">
                                    <option value="">--Select Region---</option>
                                    <option value="east">East</option>
                                    <option value="west">West</option>
                                    <option value="north">North</option>
                                    <option value="south">South</option>
                                </select>                                 
                            </div>
                        </div>
                    </div>  

                     <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                               <label class="control-label" for="cluster_manager">Cluster Manager</label>                           
                                <select class="form-control custom-select" name="cluster_manager" id="cluster_manager">
                                    <option value="">--Select Cluster Manager--</option>
                                    @foreach($staff as $stuff)
                                        @if($stuff->role != 5)
                                            @continue
                                        @endif
                                    <option value="{{ $stuff->id }}">{{ $stuff->firstname }} {{ $stuff->lastname }}</option>
                                    @endforeach
                                </select>                                     
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                               <label class="control-label" for="general_manager">General Manager</label>                           
                                <select class="form-control custom-select" name="general_manager" id="general_manager">
                                    <option value="">--Select General Manager--</option>
                                    @foreach($staff as $stuff)
                                        @if($stuff->role != 7)
                                            @continue
                                        @endif
                                    <option value="{{ $stuff->id }}">{{ $stuff->firstname }} {{ $stuff->lastname }}</option>
                                    @endforeach
                                </select>                                     
                            </div>
                        </div>
                    </div> 

                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                               <label class="control-label" for="director_of_sales">Director Of Sales</label>                           
                                <select class="form-control custom-select" name="director_of_sales" id="director_of_sales">
                                    <option value="">--Select Director Of Sales--</option>
                                   @foreach($staff as $stuff)
                                        @if($stuff->role != 8)
                                            @continue
                                        @endif
                                    <option value="{{ $stuff->id }}">{{ $stuff->firstname }} {{ $stuff->lastname }}</option>
                                    @endforeach
                                </select>                                     
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                               <label class="control-label" for="coordinator">Coordinator</label>                           
                                <select class="form-control custom-select" name="coordinator" id="coordinator">
                                    <option value="">--Select Coordinator--</option>
                                   @foreach($staff as $stuff)
                                        @if($stuff->role != 11)
                                            @continue
                                        @endif
                                    <option value="{{ $stuff->id }}">{{ $stuff->firstname }} {{ $stuff->lastname }}</option>
                                    @endforeach
                                </select>                                     
                            </div>
                        </div>
                    </div>   
                                     
                </div>
            </div>
            <div class="form-actions">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Send Invitation</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>
@stop