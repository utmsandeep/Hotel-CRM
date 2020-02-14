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
				<form>
					<table  cellspacing="0" style="">
						<tbody id="rooms-table">
							<tr><th>Room Type</th>
								@foreach(json_decode($perposal->room_commitment_data)->date as $key => $bookings)
									<th colspan='2'>
										{{ $bookings }}
										<!-- <input value="{{ $bookings }}" name='date[]' placeholder='Date' class='in-table' type='text'> -->
									</th>
								@endforeach
							</tr>
							@foreach(json_decode($perposal->room_commitment_data)->room_type as $key2 => $room_type)
								<tr>
									<td colspan="{{ count(json_decode($perposal->room_commitment_data)->date)*2+1 }}">
										{{ $room_type }}
										<!-- <input value="{{ $room_type }}" name='room_type[]' placeholder='Room Type' class='in-table' type='text'> -->
									</td>
								</tr>

								<tr>
									<td>
										{{ json_decode($perposal->room_commitment_data)->room[$key2] }}
										<!-- <input name='room[]' placeholder='Room' class='in-table' type='text' value="{{ json_decode($perposal->room_commitment_data)->room[$key2] }}"> -->
									</td>
									<?php
									$j = count(json_decode($perposal->room_commitment_data)->date)*$key2;
									$iterate = $j+count(json_decode($perposal->room_commitment_data)->date); 
									?>
									@for($i=$j ; $i<$iterate ; $i++)
								  	<td>
								  		{{ json_decode($perposal->room_commitment_data)->total_room[$i] }}
	                                	<!-- <input name='total_room[]' value="{{ json_decode($perposal->room_commitment_data)->total_room[$i] }}" placeholder='Total Room' class='in-table' type='text'> -->
	                            	</td>

		                            <td>
		                                <input class="edditable" readonly="" name='price[]' value="{{ json_decode($perposal->room_commitment_data)->price[$i] }}" placeholder='Price' class='in-table' type='text'>
		                            </td>
		                            @endfor
								
								</tr>
							@endforeach
						</tbody>
					</table>
					<input class="btn btn-info" type="submit" value="Edit Price" id="edit_price">
					<input disabled="" style="display: none;" class="btn btn-success" type="submit" value="Post Price" id="submit_request">
				</form>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">
             	<h3>Food & Drinks</h3>
             	@foreach($request_data->bookings as $key => $bookings)
             		<h4>{{ $bookings->date }}</h4>
             		@foreach($bookings->foods as $key2 => $food)
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
             		@endforeach
             	@endforeach

             	<h3>Equipments</h3>
             	@foreach($request_data->bookings as $key => $bookings)
             		<h4>{{ $bookings->date }}</h4>
             		@foreach($bookings->rooms as $key2 => $room)
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
             		@endforeach
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

			
			<form id="proposal_accept">
				<div class="col-md-12 content-holder">
					<p><strong>SIGNATURES</strong></p>

					<p>&nbsp;</p>

					<p>Approved and authorized by the following representative of <strong>{{ $request_data->user_details->group_contact }}</strong></p>

					<p>&nbsp;</p>

					<p>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>{{ $request_data->user_details->group_contact }}</strong></p>

					<p>Signature:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="signature"></p>


				</div>

				<div class="col-md-12 content-holder">
					<?= $perposal->bottom_signature; ?>
				</div>
				<input class="btn btn-success" type="submit" value="Accept Proposal">
			</form>
			
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
			e.preventDefault();
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