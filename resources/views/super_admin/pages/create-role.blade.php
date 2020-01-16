 
@extends('super_admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- table responsive -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title">Role </h4>
                        <h6 class="card-subtitle">Add Role Form</h6>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('hotelAdminRoles')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-angle-left"></i> Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6-->
                                <form class="mt-4" action="{{ route('createRolesStore') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Role Name</label>                             
                                                <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ old('name') }}" />                                   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                 <label for="firstname">Description</label>
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Please describe the role ..." name="description">{{ old('description') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

				
				                   <div class="row clearfix">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label for="firstname">Role For:</label>
                                            <div class="form-line">
                                               <select class="form-control custom-select" name="is_super" id="is_super" required="">
                                                   <option value="">--Select your Role--</option>
                                                   <option value="1">Super Admin</option>
                                                   <option value="0">Hotel Admin</option>
                                               </select>
                                            </div>
                                          </div>
                                       </div>

                                       <div class="col-sm-6">
                                          <div class="form-group dep" style="display:none">
                                             <label for="firstname">Base:</label>
                                            <div class="form-line">
                                               <select class="form-control custom-select" name="base" id="base">
                                                   <option value="1">Corporate</option>
                                                   <option value="2">Hotel</option>
                                               </select>
                                            </div>
                                          </div>
                                       </div>
                                    </div>



                                    <!-- <h4>Permissions on Modules</h4>
                                    <div class="table-responsive m-t-40">
                                        <table id="config-table" class="table display table-bordered table-striped no-wrap" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>Module Name</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <tr>
                                                    <td>Module 1</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 2</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 3</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 4</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 4</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 6</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 7</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 8</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 9</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>

                                                <tr>
                                                    <td>Module 10</td>
                                                    <td><input type="checkbox"/></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>  -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>              
@endsection

@section('script')
<script>
    $(function(){
       
    $('#is_super').on('change', function(){
        var val = $(this).val();
        if(val == '0'){
            $('.dep').show();
        }
        else{
            $('.dep').hide(); 
        }  
    });
    });
</script>
@endsection





















 