<!DOCTYPE html>
<html>
<head>
	<title>Perposal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="{{ asset('js/tenant/jSignature/libs/modernizr.js') }}"></script>
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  	<style type="text/css">
  		.content-holder{
  			margin-top: 20px;
  		}
  		.in-table{
  			border: none;
  			width: 100%;
  		}
  		.price-input {
			    width: 50%;
    			padding-left: 2px;
		}
  		table , th , td {
  			border-bottom: 1px solid
			black;
			border-left:  1px solid
			black;
			border-right: 1px solid
			black;
			border-top:  1px solid
			black;
			height: 17px;
			vertical-align: bottom;
		  }
		  table tr:nth-of-type(1) {
    color: #fff;
    background: #073156 !important;
}
table tr:nth-of-type(1) td {
	background: #073156 !important;
}
table tbody#rooms-table tr th {
    padding: 10px !important;
}
table tr td {
    padding: 10px;
}
table {
    
    margin-bottom: 20px !important;
}
h3.f-head {
    font-size: 19px;
	font-weight: bold;
	color: #073156;
}
.row.f-row h5 b {
    color: #073156;
    background: #e7f1fa;
    padding: 10px;
    
}
.row.f-row h5 {
    margin-bottom: 21px;
}
.row.f-row {
    padding-bottom: 20px;
}
.four-sectioned h4 {
	font-size: 15px;
	border-bottom: 1px solid #e7f1fa;
   
    padding-bottom: 10px;
   
}
.row.f-row h6 {
    margin-top: 16px !important;
}
.row.f-row h6 b {
    font-weight: bold;
	font-size: 14px;
}
hr {

	border: 1 !important;
} 


/* logo css */
.logo-prop img {
    width: 13%;
}
.logo-prop {
    text-align: left;
}
.logo-prop {
    
    padding-bottom: 13px;
}
.logo-prop .container {
    border-bottom: 1px solid #e3edf6;
	padding-bottom: 10px;
	padding-top: 10px;
}
/* logo css end */

/* room history and chat history heading */
.room-history {
    padding-top: 30px;
	clear: both;
}
.room-history h3 {
    border-bottom: 1px solid #e7f1fa;
    
    padding-bottom: 10px;
    clear: both;
    
    text-align: left !important;
    font-size: 20px;
    margin-left: 15px;
}
/* room history and chat history heading end */




/* chat history */

.inner-chat-b {
    border: 1px solid #e7f1fa;
    padding: 20px;
	margin-bottom: 30px;
}
.bubbleWrapper {
    padding: 10px 10px;
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
    align-self: flex-end;
    color: #fff;
}
.inlineContainer {
    display: inline-flex;
	align-items: center;
}
.inlineContainer.own {
    flex-direction: row-reverse;
}
.ownBubble {
    min-width: 60px;
    max-width: 700px;
    padding: 14px 18px;
    margin: 6px 8px;
    background-color: #5b5377;
    border-radius: 16px 16px 0 16px;
    border: 1px solid #443f56;
}
.otherBubble {
    min-width: 60px;
    max-width: 700px;
    padding: 14px 18px;
    margin: 6px 8px;
    background-color: #6C8EA4;
    border-radius: 16px 16px 16px 0;
    border: 1px solid #54788e;
}
.own {
	align-self: flex-end;
}
.other {
	align-self: flex-start;
}
span.own,
span.other{
  font-size: 14px;
  color: grey;
}
.inlineContainer i {
    color: #ddd;
    
    vertical-align: middle;
}
.typing-box input {
    width: 100%;
    
    border: 1px solid #e7f1fa;
    border-radius: 5px;
    padding: 15px;
}
.typing-box input:placeholder{
	color:#ddd;
}
.typing-box {
    position: relative;
}
.typing-box button {
    position: absolute;
    top: 50%;
    right: 3%;
    transform: translate(0, -50%);
    color: #615757;
    font-size: 50px;
    border: unset;
    background: unset;
}
/* chat history end */




  	</style>
</head>
<body>
	<div class="logo-prop">
		<div class="container">
			<div class="row">
				<img src="{{ asset('images/main-system/logo.png') }}"></img>

			</div>
		</div>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 content-holder">
				<?= $perposal->greeting; ?>
			</div>
			
			<div class="col-md-12 content-holder">
				<?= $perposal->g_c_sales_agreement; ?>
			</div>
	
			<div class="col-md-12 content-holder">
				<?= $perposal->guest_room_commitment; ?>
				<form method="post"  action="{{ route('tenant.admin.updateRoomCommitmentData' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]) }}">
					@csrf
					@method('PUT')
					<table  cellspacing="0" style="">
						<tbody id="rooms-table">
							<tr><th>Room Type</th>
								@foreach(json_decode($perposal->room_commitment_data)->date as $key => $bookings)
									<th colspan='2'>
										{{ $bookings }}
										<input value="{{ $bookings }}" name='date[]' placeholder='Date' class='in-table' type='hidden'>
									</th>
								@endforeach
							</tr>
							@foreach(json_decode($perposal->room_commitment_data)->room_type as $key2 => $room_type)
								<tr>
									<td colspan="{{ count(json_decode($perposal->room_commitment_data)->date)*2+1 }}">
										{{ $room_type }}
										<input value="{{ $room_type }}" name='room_type[]' placeholder='Room Type' class='in-table' type='hidden'>
									</td>
								</tr>

								<tr>
									<td>
										{{ json_decode($perposal->room_commitment_data)->room[$key2] }}
										<input name='room[]' placeholder='Room' class='in-table' type='hidden' value="{{ json_decode($perposal->room_commitment_data)->room[$key2] }}">
									</td>
									<?php
									$j = count(json_decode($perposal->room_commitment_data)->date)*$key2;
									$iterate = $j+count(json_decode($perposal->room_commitment_data)->date); 
									?>
									@for($i=$j ; $i<$iterate ; $i++)
								  	<td>
								  		{{ json_decode($perposal->room_commitment_data)->total_room[$i] }}
	                                	<input name='total_room[]' value="{{ json_decode($perposal->room_commitment_data)->total_room[$i] }}" placeholder='Total Room' class='in-table' type='hidden'>
	                            	</td>

		                            <td>
		                            	<span>INR</span>
		                                <input class="in-table edditable price-input" readonly="" name='price[]' value="{{ json_decode($perposal->room_commitment_data)->price[$i] }}" placeholder='Price' type='text'>
		                                <span>+Taxes</span>
		                            </td>
		                            @endfor
								
								</tr>
							@endforeach
						</tbody>
					</table>
					@if(!$perposal->isAdminApproved || !$perposal->isClientApproved)
					<input class="btn btn-info" type="button" value="Edit Price" id="edit_price">
					<input disabled="" style="display: none;" class="btn btn-success" type="submit" value="Post Price" id="submit_request">
					@if(!$perposal->isAdminApproved)
					<a href="#" id="approve-btn" class="btn btn-success">Approve</a>
					@endif
					@endif
				</form>
				@if(!$perposal->isAdminApproved)
					<form id="approve-price" method="post" action="{{ route('tenant.admin.approvePerposal' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]) }}">
						@csrf
						<input type="hidden" name="_method" value="put">
					</form>
				@endif
			</div>
			

			<div class="col-lg-12 col-md-12 col-sm-12 four-sectioned">
             	<h3 class="f-head">Food & Drinks</h3>
             	@foreach($request_data->bookings as $key => $bookings)
             		<h4>{{ $bookings->date }}</h4>
             		<div class="row f-row">
	             		@foreach($bookings->foods as $key2 => $food)
	             			<div class="col-md-4">
		             			<h5><b>{{ ucfirst(str_replace('_' , ' ' , $key2)) }}</b></h5>
		             			@foreach($food as $key3 => $menus)
		             				
		             				@if($key3 === "extra")
		             					<h6><b>{{ ucfirst(str_replace('_' , ' ' , $key3)) }}</b></h6>
		             					@foreach($menus as $key4 => $menu)
		             						<p>{{ ucfirst(str_replace('_' , ' ' , $key4)) }} : {{ $menu }}</p>
		             					@endforeach
		             					@continue
		             				@endif

		             			<p>{{ ucfirst(str_replace('_' , ' ' , $key3)) }} : {{ $menus }}</p>
		             			@endforeach
	             			</div>
	             		@endforeach
             		</div>
             	@endforeach

             	<h3 class="f-head">Equipments</h3>
             	@foreach($request_data->bookings as $key => $bookings)
             		<h4>{{ $bookings->date }}</h4>
             		<div class="row f-row">
	             		@foreach($bookings->rooms as $key2 => $room)
	             			<div class="col-md-4">
		             			<h5><b>{{ ucfirst(str_replace('_' , ' ' , $key2)) }}</b></h5>
		             			@foreach($room->equipment as $key3 => $equipment)
		                 			@if($key3 === "extra")
		                 					<h6><b>{{ ucfirst(str_replace('_' , ' ' , $key3)) }}</b></h6>
		                 					@foreach($equipment as $key4 => $menu)
		                 						<p>{{ ucfirst(str_replace('_' , ' ' , $key4)) }} : {{ $menu }}</p>
		                 					@endforeach
		                 					@continue
		                 			@endif
		                 			<p>{{ ucfirst(str_replace('_' , ' ' , $key3)) }} : {{ $equipment }}</p>
		             			@endforeach
	             			</div>
	             		@endforeach
             		</div>
             	@endforeach

             </div>
			
			<div class="col-md-12 content-holder">
				<?= $perposal->payment_packages_other; ?>
			</div>

			<div class="col-md-12 content-holder">
				<?= $perposal->current_applicable_taxes; ?>
			</div>

			<div class="col-md-12 content-holder">
				<?= $perposal->permission_for_event; ?>
			</div>

			<div class="col-md-12 content-holder">
				<?= $perposal->damage_payment; ?>
			</div>

			<div class="col-md-12 content-holder">
				<?= $perposal->deposite; ?>
			</div>

			<div class="col-md-12 content-holder">
				<?= $perposal->refunds_cancellation; ?>
			</div>

			<div class="col-md-12 content-holder">
				<?= $perposal->changes_acceptance; ?>
			</div>

			
			<!-- <form id="proposal_accept"> -->
				<div class="col-md-12 content-holder">
					<p><strong>SIGNATURES</strong></p>

					<p>&nbsp;</p>

					<p>Approved and authorized by the following representative of <strong>{{ $request_data->user_details->group_contact }}</strong></p>

					<p>&nbsp;</p>

					<p>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>{{ $request_data->user_details->group_contact }}</strong></p>

					<p>Signature:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $perposal->signature ? $perposal->signature->text_signature : null }}

				</div>

				<div class="col-md-12 content-holder">
					<?= $perposal->bottom_signature; ?>
				</div>
				<!-- <input class="btn btn-success" type="submit" value="Submit Proposal">
			</form> -->
			<hr>
			@if($perposal->perposalRoomHistory->count() > 1)
			<div class="room-history"><h3 style="text-align: center;"><b>Room Commitment History</b></h3></div>
			
			@endif
			@foreach($perposal->perposalRoomHistory as $perposal_h)
				@if($perposal_h->isActive)
					@continue
				@endif
				<div class="col-md-12 content-holder">
					<table  cellspacing="0" style="">
						<tbody id="rooms-table">
							<tr><th>Room Type</th>
								@foreach(json_decode($perposal_h->room_commitment_data)->date as $key => $bookings)
									<th colspan='2'>
										{{ $bookings }}
										<input value="{{ $bookings }}" name='date[]' placeholder='Date' class='in-table' type='hidden'>
									</th>
								@endforeach
							</tr>
							@foreach(json_decode($perposal_h->room_commitment_data)->room_type as $key2 => $room_type)
								<tr>
									<td colspan="{{ count(json_decode($perposal_h->room_commitment_data)->date)*2+1 }}">
										{{ $room_type }}
										<input value="{{ $room_type }}" name='room_type[]' placeholder='Room Type' class='in-table' type='hidden'>
									</td>
								</tr>

								<tr>
									<td>
										{{ json_decode($perposal_h->room_commitment_data)->room[$key2] }}
										<input name='room[]' placeholder='Room' class='in-table' type='hidden' value="{{ json_decode($perposal_h->room_commitment_data)->room[$key2] }}">
									</td>
									<?php
									$j = count(json_decode($perposal_h->room_commitment_data)->date)*$key2;
									$iterate = $j+count(json_decode($perposal_h->room_commitment_data)->date); 
									?>
									@for($i=$j ; $i<$iterate ; $i++)
								  	<td>
								  		{{ json_decode($perposal_h->room_commitment_data)->total_room[$i] }}
	                                	<input name='total_room[]' value="{{ json_decode($perposal_h->room_commitment_data)->total_room[$i] }}" placeholder='Total Room' class='in-table' type='hidden'>
	                            	</td>

		                            <td>
		                            	<span>INR</span>
		                                <input class="in-table edditable price-input" readonly="" name='price[]' value="{{ json_decode($perposal_h->room_commitment_data)->price[$i] }}" placeholder='Price' type='text'>
		                                <span>+Taxes</span>
		                            </td>
		                            @endfor
								
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			@endforeach
			
		</div>
	</div>

	 <!-- chat box -->
    <!-- <div class="chatbox">
      <div class="container">
        <div class="row">
          <div class="room-history">
            <h3 style="text-align: center;"><b>Chat History</b></h3>
          </div>
          <div class="inner-chat-b">
            <div class="chat-cont">
               	@if($perposal->perposalConversationHistory)
	            	@foreach($perposal->perposalConversationHistory as $messege)
	            		
		              <div class="bubbleWrapper">
		                <div class="inlineContainer @if($messege->messeged_by == 1) own @endif">
		                  <i class="fa fa-user" aria-hidden="true"></i>
		                  <div class="@if($messege->messeged_by == 1)ownBubble own @else otherBubble other @endif">
		                    {{ $messege->message }}
		                  </div>
		                </div>
		                <span class="@if($messege->messeged_by == 1) own @else other @endif">{{ $messege->created_at }}</span>
		              </div>
		             
	            	@endforeach
            	@endif
            </div>
           
            <form id="msg-form" method="post" action="{{ route('tenant.admin.storeAdminConversation' , ['hotel_code'=>$hotel_code , 'perposal_id'=>$perposal->id]) }}" autocomplete="off">
            	@csrf
	            <div class="typing-box">
				<button id="msg-btn" type="submit" disabled=""><i class="fa fa-caret-right" aria-hidden="true"></i></button>
	              <input
	                type="text"
	                name="message"
	                id="typing"
	                placeholder="Type your message here"
	              />
	            </div>
        	</form>
          </div>
        </div>
      </div>
    </div> -->
    <!-- chat box end -->
	<script type="text/javascript">
		jQuery(document).on('keydown' , '#typing' , function(e){
			jQuery('#msg-btn').attr('disabled' , 'disabled');
			if(jQuery.trim(jQuery(this).val()) != '')
			{
				jQuery('#msg-btn').removeAttr('disabled');
			}
		});

		jQuery(document).on('submit' , '#msg-form' , function(e){
			if(jQuery.trim(jQuery('#typing').val()) == '')
			{
				e.preventDefault();
			}
		});

		jQuery(document).on('click' , '#edit_price' , function(e){
			e.preventDefault();
			jQuery(".edditable").removeAttr('readonly');
			jQuery(this).hide();
			jQuery('#submit_request').show();
			
		});
		jQuery(document).on('keydown' , '.edditable' , function(e){
			jQuery('#submit_request').removeAttr('disabled');
		});
		jQuery(document).on('submit' , '#proposal_accept' , function(e){
			return false;
			//e.preventDefault();
			Swal.fire({
			  // title: 'Are you sure?',
			  text: "You Agree that , you will submit 50% amount of booking in advance.!",
			  icon: 'info',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, do it!'
			}).then((result) => {
			  if (result.value) {
			    Swal.fire(
			      'Accepted!',
			      'Proposal has been accepted.',
			      'success'
			    )
			    jQuery(this).submit();

			  }
			  // else{
			  // 	e.preventDefault();
			  // }
			});
		});

		@if(!$perposal->isAdminApproved)
			jQuery(document).on('click' , '#approve-btn' , function(){
				if(confirm("Are you sure ?")){
					jQuery("#approve-price").submit();
				}

				return false;
			});
		@endif
	</script>
</body>
</html>