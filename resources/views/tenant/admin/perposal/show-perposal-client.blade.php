<!DOCTYPE html>
<html>
<head>
	<title>Perposal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
  	</style>
</head>
<body>
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
				<form method="post"  action="{{ route('tenant.updateRoomCommitmentData' , ['hotel_code'=>$hotel_code , 'booking_id'=>$perposal->booking_id]) }}">
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
					@endif
				</form>
			</div>
			@if($perposal->perposalRoomHistory->count() > 1)
			<h3 style="text-align: center;"><b>History</b></h3>
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

			@if($perposal->isAdminApproved)
			<form id="proposal_accept">
			@endif
				<div class="col-md-12 content-holder">
					<p><strong>SIGNATURES</strong></p>

					<p>&nbsp;</p>

					<p>Approved and authorized by the following representative of <strong>{{ $request_data->user_details->group_contact }}</strong></p>

					<p>&nbsp;</p>

					<p>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>{{ $request_data->user_details->group_contact }}</strong></p>

					<p>Signature:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					@if($perposal->isAdminApproved && !$perposal->isClientApproved) 
						<input type="text" name="signature" required=""></p>
					@else
					
					@endif


				</div>

				<div class="col-md-12 content-holder">
					<?= $perposal->bottom_signature; ?>
				</div>
				@if($perposal->isAdminApproved)
				<input class="btn btn-success" type="submit" value="Accept Proposal">
				
			</form>
				@endif
		</div>
	</div>
	<script type="text/javascript">

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
	</script>
</body>
</html>