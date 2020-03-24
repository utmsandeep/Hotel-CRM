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
	h4.text-center.e-aggrement-head {
    color: #073156;
    font-size: 29px;
}
.row.top-details {
    margin-top: 55px;
}
.input-editable-sections p {
    font-size: 15px;
}
.input-editable-sections p span.right {
    font-weight: bold;
    /* width: 200px; */
    color: #073156;
}
span.left {
    width: 111px;
    display: block;
    float: left;
}
.detail-section p span.left {
    width: 170px;
}
.col-sm-6.detail-section p span.right {
    color: #073156;
    font-weight: bold;
}
.col-sm-6.input-editable-sections p input {
	color: #073156;
    font-weight: bold;
    margin: 0;
    padding: 3px 6px;
    font-size: 15px;
    border: 1px solid #e7f1fa;
    border-bottom: 1px solid #e7f1fa;
    /* border: none; */
}
.detail-section p {
    font-size: 15px;
}
.row.delivery-terms {
    border: 4px solid #e7f1fa;
}
.row.admin-role-name {
    margin-top: 35px;
}
.row.admin-role-name p {
    font-size: 15px;
	margin: 15px 0;
}
.row.admin-role-name p .right {
    color: #073156;
    font-weight: bold;
}
@media screen and (max-width:767px){


.col-sm-6.input-editable-sections, .col-sm-6.detail-section  {
    max-width: 100% !important;
    flex: 0 0 100% !important;
}
.row.admin-role-name .col-sm-6 {
    flex: 0 0 100%;
    max-width: 100%;
}
}
</style>
</head>
<body>
	@php
	$cur_class = "current-user-sign";
	@endphp
	<form method="post" action="{{ route('tenant.admin.hotel.contract.store' , ['hotel_code'=>$hotel_code]) }}">
		@csrf
		<div class="container">
			<div class="row e-aggrememt-details-top">
				<div class="col-sm-6 text-left"><img style="width: 200px" src="{{ asset('images/main-system/logo.png') }}"></div>
				<div class="col-sm-6 text-right"><button id="prnt-btn" class="btn btn-success">DownLoad</button></div>
			</div>
			<h4 class="text-center e-aggrement-head">E-Agreement</h4>
		  	<div class="row top-details">
			    <div class="col-sm-6 input-editable-sections">
			    	<p><span class="left">Hotel Name :</span> <span class="right">{{ $hotel->name }}</span></p>
			    	<p><span class="left">Hotel Code : </span><span class="right">{{ $hotel->hotel_code }}</span></p>
			    	<p><span class="left">Hotel Region :</span> @if(auth('admin')->user()->role == 9 && !$signatures->contains('admin_id', auth('admin')->user()->id)) 
			    			<input type="text" class="author-input" name="region" value="{{ $hotel->region }}"> 
			    		@else  
			    			<span class="right">{{ $hotel->region }}</span> 
			    		@endif
			    	</p>
			    	<p><span class="left">Adress :</span> @if(auth('admin')->user()->role == 9 && !$signatures->contains('admin_id', auth('admin')->user()->id)) 
				    		<input type="text" class="author-input" name="address" value="{{ $hotel->address }}" required=""> 
				    	@else 
				    	<span class="right">{{ $hotel->address }}</span>
				    	@endif
			    	</p>
			    	<p><span class="left">GST Number :</span>  @if(auth('admin')->user()->role == 9 && !$signatures->contains('admin_id', auth('admin')->user()->id)) <input type="text" name="gst_no" class="author-input" value="{{ $hotel->gst_no }}" required=""> @else <span class="right">{{ $hotel->gst_no }}</span> @endif</p>
			    	<p><span class="left">Pan Card :</span>  @if(auth('admin')->user()->role == 9 && !$signatures->contains('admin_id', auth('admin')->user()->id)) <input type="text" name="pan_card" class="author-input" value="{{ $hotel->pan_card }}" required=""> @else <span class="right">{{ $hotel->pan_card }}</span> @endif</p>
			    </div>
			    <div class="col-sm-6 detail-section">
			    	<p><span class="left">Yearly Subscribation  :</span><span class="right"> {{ $owner->yearly_subscription }}</span></p>
			    	<p><span class="left">Price Per Year : </span><span class="right">{{ $owner->price_per_year }}</span></p>
			    	<p><span class="left">Installation Cost :</span> <span class="right">{{ $owner->installation_cost }}</span></p>
			    	<p><span class="left">Customization Cost :</span> <span class="right">{{ $owner->customization_cost }}</span></p>
			    	<p><span class="left">Training fees : </span><span class="right">{{ $owner->trainig_fees }}</span></p>
			    	<p><span class="left">Total : </span><span class="right">{{ ( $owner->price_per_year*$owner->yearly_subscription)+$owner->installation_cost+$owner->customization_cost+$owner->trainig_fees }}</span></p>
			    </div>
		  	</div>
		  	<div class="row delivery-terms">
		  		<div class="col-sm-12">
		  			@if(!empty($content)) <?php echo $content->content; ?> @else General Delivery Terms Will go here...................... @endif
		  		</div>
		  	</div>
		  	<div class="row admin-role-name">
		  		@foreach($admins as $admin)
		  		<div class="col-sm-6">
		  			<b class="text-center">{{ $admin->admin->adminRole->name }}</b><br>
		  			<p><span class="left">Name : </span><span class="right">{{ $admin->admin->firstname }} {{ $admin->admin->lastname }}</span></p>
		  			<p><span class="left">Email : </span><span class="right">{{ $admin->admin->email }}</span></p>
		  			<p><span class="left">Mobile : </span><span class="right">{{ $admin->admin->primary_mobile }}</span></p>
		  			<p><span class="left">Signature:</span><img style="width: 300px;" id="@if(auth('admin')->user()->role == $admin->admin->role){{ $cur_class }}@endif" src="@if($signatures->contains('admin_id', $admin->admin->id)){{ $signatures->where('admin_id' , $admin->admin->id)->first()->signature }}@endif" /></p>
		  		</div>
		  		@endforeach
		  	</div>
		</div>

	@if(auth('admin')->user()->role != 4 && !$signatures->contains('admin_id', auth('admin')->user()->id))
		<!-- <div id="content">
			<hr>
			<h4 class="text-center">Signature Area ( {{ auth('admin')->user()->adminRole->name }} )</h4>
			<div id="signature"></div>
			<div id="tools"></div>
		</div> -->
		
		
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
			
			
			$('<input type="button" value="Reset" class="btn btn-info btn-xs">').bind('click', function(e){
				$sigdiv.jSignature('reset')
				$('#sign-val', $tools).val('')
			}).appendTo($tools)
			
			$('<input type="hidden" name="signature" id="sign-val" value="">').appendTo($tools)
			

			if (Modernizr.touch){
				$('#scrollgrabber').height($('#content').height())		
			}

			$(document).on('mouseup' , '.jSignature' , function(){
				var data = $sigdiv.jSignature('getData', 'image')
				$('#sign-val', $tools).val('data:'+data.join(','))
				$('#current-user-sign').attr('src' , 'data:'+data.join(','));
			});

		})
		</script>
	
	<div class="text-center">
	<input type="submit" value="Submit Contract" class="btn btn-success">
	</div>
	@endif
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click' , '#prnt-btn' , function(){
				$(this).hide();
				$('#content').hide();

				 window.print();

				 $(this).show();
				 $('#content').show();
			});	
		});
	</script>
	</form>
</body>
</html>
