<!DOCTYPE html>
<html lang="en">
<head>
<title>First Hotel - Contract</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1.0, target-densitydpi=device-dpi" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="initial-scale=1.0, width=device-height">
<script src="{{ asset('js/tenant/jSignature/libs/modernizr.js') }}"></script>
<style type="text/css">

	div {
		margin-top:1em;
		margin-bottom:1em;
	}
	input {
		padding: .5em;
		margin: .5em;
	}
	select {
		padding: .5em;
		margin: .5em;
	}
	
	#signatureparent {
		
		/*background-color:darkgrey;*/
		/*max-width:600px;*/
		/*padding:20px;*/
	}
	
	/*This is the div within which the signature canvas is fitted*/
	#signature {
		/*border: 2px dotted black;*/
		background-color:lightgrey;
		color:darkblue;
		padding:20px;
	}

	/* Drawing the 'gripper' for touch-enabled devices */ 
	html.touch #content {
		float:left;
		width:92%;
	}
	html.touch #scrollgrabber {
		float:right;
		width:4%;
		margin-right:2%;
		background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAFCAAAAACh79lDAAAAAXNSR0IArs4c6QAAABJJREFUCB1jmMmQxjCT4T/DfwAPLgOXlrt3IwAAAABJRU5ErkJggg==)
	}
	html.borderradius #scrollgrabber {
		border-radius: 1em;
	}
	 
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-left"><img style="width: 200px" src="{{ asset('images/main-system/logo.png') }}"></div>
			<div class="col-sm-6 text-right"><button id="prnt-btn" class="btn btn-success">DownLoad</button></div>
		</div>
		<h4 class="text-center">E-Agreement</h4>
	  	<div class="row">
		    <div class="col-sm-6">
		    	<p>Hotel Name : {{ $hotel->name }}</p>
		    	<p>Hotel Code : {{ $hotel->hotel_code }}</p>
		    	<p>Hotel Region : @if(auth('admin')->user()->role == 9) <input type="text" name="region" value="{{ $hotel->region }}"> @else  {{ $hotel->region }} @endif</p>
		    	<p>Adress : @if(auth('admin')->user()->role == 9) @else @endif</p>
		    	<p>GST Number :  @if(auth('admin')->user()->role == 9) @else @endif</p>
		    	<p>Pan Card :  @if(auth('admin')->user()->role == 9) @else @endif</p>
		    </div>
		    <div class="col-sm-6">
		    	<p>Yearly Subscribation  : 1 Year</p>
		    	<p>Price Per Year : 11000</p>
		    	<p>Installation Cost : 1000</p>
		    	<p>Training fees : 1000</p>
		    	<p>Total : 13000</p>
		    </div>
	  	</div>
	  	<div class="row">
	  		<div class="col-sm-12">
	  			General Delivery Terms Will go here......................
	  		</div>
	  	</div>
	  	<div class="row">
	  		@foreach($admins as $admin)
	  		<div class="col-sm-6">
	  			<b class="text-center">{{ $admin->admin->adminRole->name }}</b><br>
	  			<p>Name : {{ $admin->admin->firstname }} {{ $admin->admin->lastname }}</p>
	  			<p>Email : {{ $admin->admin->email }}</p>
	  			<p>Mobile : {{ $admin->admin->primary_mobile }}</p>
	  			<p>Signature:<img style="width: 300px;" id=@if(auth('admin')->user()->role == $admin->admin->role) current-user-sign @endif src="" /></p>
	  		</div>
	  		@endforeach
	  	</div>
	</div>

@if(auth('admin')->user()->role != 4)
	<div id="content">
		<hr>
		<h4 class="text-center">Signature Area ( {{ auth('admin')->user()->adminRole->name }} )</h4>
		<div id="signature"></div>
		<div id="tools"></div>
	</div>
	
	
	<script src="{{ asset('js/tenant/jSignature/libs/jquery.js') }}"></script>
	<script>

	(function($) {
		var topics = {};
		$.publish = function(topic, args) {
		    if (topics[topic]) {
		        var currentTopic = topics[topic],
		        args = args || {};
		
		        for (var i = 0, j = currentTopic.length; i < j; i++) {
		            currentTopic[i].call($, args);
		        }
		    }
		};
		$.subscribe = function(topic, callback) {
		    if (!topics[topic]) {
		        topics[topic] = [];
		    }
		    topics[topic].push(callback);
		    return {
		        "topic": topic,
		        "callback": callback
		    };
		};
		$.unsubscribe = function(handle) {
		    var topic = handle.topic;
		    if (topics[topic]) {
		        var currentTopic = topics[topic];
		
		        for (var i = 0, j = currentTopic.length; i < j; i++) {
		            if (currentTopic[i] === handle.callback) {
		                currentTopic.splice(i, 1);
		            }
		        }
		    }
		};
	})(jQuery);

	</script>
	<script src="{{ asset('js/tenant/jSignature/src/jSignature.js') }}"></script>
	<script src="{{ asset('js/tenant/jSignature/src/plugins/jSignature.CompressorBase30.js') }}"></script>
	<script src="{{ asset('js/tenant/jSignature/src/plugins/jSignature.CompressorSVG.js') }}"></script>
	<script src="{{ asset('js/tenant/jSignature/src/plugins/signhere/jSignature.SignHere.js') }}"></script> 
	<script>
	$(document).ready(function() {

		var $sigdiv = $("#signature").jSignature({'UndoButton':true})

		, $tools = $('#tools')
		, $extraarea = $('#displayarea')
		, pubsubprefix = 'jSignature.demo.'
		
		
		$('<input type="button" value="Reset">').bind('click', function(e){
			$sigdiv.jSignature('reset')
			$('#sign-val', $tools).val('')
		}).appendTo($tools)
		
		$('<input type="hidden" id="sign-val" value="">').appendTo($tools)
		

		if (Modernizr.touch){
			$('#scrollgrabber').height($('#content').height())		
		}

		$(document).on('mouseup' , '.jSignature' , function(){
			var data = $sigdiv.jSignature('getData', 'image')
			$('#sign-val', $tools).val('data:'+data.join(','))
			$('#current-user-sign').attr('src' , 'data:'+data.join(','));
		});

		$(document).on('click' , '#prnt-btn' , function(){
			$(this).hide();
			$('#content').hide();

			 window.print();

			 $(this).show();
			 $('#content').show();
		})	
	})
	</script>
@endif
</body>
</html>
