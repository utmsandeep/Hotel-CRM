 
@extends('super_admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- table responsive -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title">Home Template </h4>
                        <h6 class="card-subtitle">Edit Home Page</h6>
                    </div>
                   <!--  <div class="col-md-4">
                        <a href="{{route('hotelAdminRoles')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-angle-left"></i> Back</a>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6-->
                                <form class="mt-4" action="{{ route('update-template') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                   

                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                 <label for="firstname">Content</label>
                                                <div class="form-line">
                                                    <textarea rows="20" class="form-control no-resize" placeholder="Please describe the role ..." name="content">{{ $template->content }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

				
				                   
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





















 