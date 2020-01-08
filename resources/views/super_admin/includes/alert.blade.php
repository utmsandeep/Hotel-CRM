@if(session()->get('success'))
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> {{ session()->get('success') }}
</div>				
@endif
@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Danger!</strong>
	<ul>
		@foreach ($errors->all() as $error)
		  <li>{{ $error }}</li>
		@endforeach
	</ul>
</div><br />
@endif				
