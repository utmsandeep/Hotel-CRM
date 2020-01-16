@extends('super_admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<!-- table responsive -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h4 class="card-title">Innovation </h4>
						<h6 class="card-subtitle">Edit Innovation Form</h6>
					</div>
					<div class="col-md-4">
						<a href="{{route('innovationList')}}" class="btn btn-info pull-right" style="float:right;"><i class="fa fa-angle-left"></i> Back</a>
					</div>
				</div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6-->
                                <form class="mt-4" action="{{ route('innovationUpdate' , $innovation['id']) }}" method="POST" enctype="multipart/form-data">
									@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter title" value="{{$innovation['name']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file" name="image" class="form-control" placeholder="">
										<img src="{{asset('images/innovation')}}/{{$innovation['image']}}" style="width:50px;height:50px;" onerror="this.src='{{asset('images/no-image.jpg')}}'">
                                    </div>
									
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Small Description</label>
                                        <textarea class="form-control" name="small_description" placeholder="Enter Small Description"> {{$innovation['small_description']}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Enter Description">{{$innovation['description']}}</textarea>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-sm-2 mb-3" style="display:none;">
                                        <input type="checkbox" class="custom-control-input" name="is_active" id="checkbox0" <?=(($innovation['is_active']==1)?'checked':'')?> value="1">
                                        <label class="custom-control-label" for="checkbox0">Status</label>
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
