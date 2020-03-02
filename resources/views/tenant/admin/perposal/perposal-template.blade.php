<!DOCTYPE html>
<html>
<head>
	<title>Perposal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&display=swap" rel="stylesheet">
  	<script src="{{ asset('js/tenant/jSignature/libs/modernizr.js') }}"></script>
  	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  	<style type="text/css">
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

		.heading{

		    background: #e0e0e0;
		    padding-top: 10px;
		    padding-bottom: 10px;
		    padding-left: 20px;
		    padding-right: 20px;
		    border-radius: 10px;
		}
		h3.heading {
   
    background-color: rgba(23, 119, 203, 0.1);
	text-transform: capitalize !important;
	font-size:15px !important;
}
.cke_top {
   
    background: #e7f1fa !important;
}
body h3.heading strong {
    color: #1777cb !important;
    font-size: 15px important;
    text-transform: capitalize !important;
    font-weight: 600;
}
		.content-section{
			display: none;
		}
		.price-input {
			    width: 50%;
    			padding-left: 2px;
		}
		h3.f-head {
    font-size: 19px;
   
}
.f-box h4 {
    font-size: 15px;
    border-bottom: 1px solid #e7f1fa;
    
    padding-bottom: 10px;
}
.f-box h5 b {
    background: #e7f1fa;
    color: #1777cb !important;
    padding: 10px;
}
.f-box h5 {
    margin-bottom: 18px;
    margin-top: 24px;
}
tbody#rooms-table tr th,
 tbody#rooms-table tr td {
    padding: 10px;
}
.btn-info{
	margin-top:20px;
}
.f-box {
    padding-top: 10px;
}
.f-box h4 {
    padding-top: 10px;
    font-weight: 600;
}
.preview-popup{
	display:none;
}
.preview-popup {
    position: absolute;
    top: 20px;
    z-index: 9;
    background: #fff;
    width: 97.5%;
    border-radius: 10px;
    border: 1px solid #f2f2f2;
	padding: 24px 37px;
    overflow: auto;
	box-shadow: 0px 3px 15px rgba(0,0,0,0.2);
}
.close-btn {
    display: inline-block;
    float: right;
    padding-right: 10px;
    color: #1777cb;
    font-weight: bold;
    font-size: 13px;
	cursor: pointer;
}

.ok-cancel {
    text-align: center;
}
.ok-cancel span button {
    background: #1777cb;
    border: 1px solid #1777cb;
    color: #fff;
    width: 73px;
    padding: 5px 0;
    border-radius: 5px;
}
#popup-btn {
    margin-bottom: 10px;
}
button.cancel {
    background: #fff !important;
    color: #1777cb !important;
}
  	</style>
</head>
<body>
	
	<div class="container" id="myP">
		<div class="row clearfix">
    		<div class="col-lg-12 col-md-12 col-sm-12">
       
		        <form method="post" enctype="multipart/form-data" action="{{ route('tenant.admin.showPerposalTemplate.store' , ['lead_id'=>$lead->id , 'hotel_code'=>$hotel_code]) }}" id="perposal-form">
		            @csrf
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;GREETING</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor1" name="greeting">
		                            	<p><strong>{{ $request_data->user_details->group_contact }}</strong></p>

										<p><strong>{{ $request_data->user_details->organization }}</strong></p>

										<p><strong>{{ $request_data->user_details->address }}</strong></p>

	

										<p><strong>{{ $request_data->user_details->phone_number }}</strong></p>

										<p>&nbsp;</p>

										<p><strong>Dear {{ $request_data->user_details->group_contact }},</strong></p>

										<p>&nbsp;</p>

										<p><strong>Greetings from the {{ $hotel->name }}</strong></p>

										<p>&nbsp;</p>

										<p>We would like to thank you for your enquiry and for your interest in {{ $hotel->name }}</p>

										<p>{{ $hotel->name }} is engrained with the cultural legacy of the Golden City complemented by inviting spaces that exemplify refined grace and private service. It is strategically located close to the heart of the city. Our hotel offers perfect accommodation for leisure as well as business travelers.</p>

										<p>This Contemporary Palace hotel has 135 spacious rooms including 09 suites, catering to the MICE and leisure traveler. Our hotel is a perfect destination where work and pleasure blend seamlessly into each other.</p>

										<p>We are pleased to enclose an offer tailored especially for you, one that will completely fulfill all your needs and requirements</p>

										<p>Should you have any further clarifications on the same, we are happy to help you.</p>

										<p>&nbsp;</p>

										<p>We will keep this offer reserved for you untill&nbsp;<strong>11th Jan, 2020</strong></p>

										<p>&nbsp;</p>

										<p>Thank you for trusting us to give us an opportunity to organize an event for<strong>&nbsp;</strong><strong>{{ $request_data->user_details->group_contact }}</strong></p>

										<p>&nbsp;</p>

										<p><strong>Yours sincerely,</strong></p>

										<p><img alt="" src="data:image/png;base64,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" style="height:44px; width:175px" /></p>

										<p><strong>YUVRAJ SINGH TANWAR</strong></p>

										<p><strong>Sales Executive</strong></p>

		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
                        <h3 class="heading"> <strong><i class="fa fa-plus"></i>&nbsp;GROUP & CATERING SALES AGREEMENT</strong></h3>
                    </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor2" name="g_c_sales_agreement">
		                            	<p><strong>GROUP &amp; CATERING SALES AGREEMENT</strong></p>

										<p>&nbsp;</p>

										<p>The following agreement between the&nbsp;<strong>{{ $hotel->name }}</strong>&nbsp;and&nbsp;<strong>{{ $request_data->user_details->organization }}</strong><strong>&nbsp;</strong>outlines specific conditions and services to be provided.</p>

	                            		<p>&nbsp;</p>
                                    
										<table cellspacing="0" style="border-collapse:collapse; width:616px">
											<tbody>
												<tr>
													<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:16px; vertical-align:bottom">
													<p><strong>PARTICULARS</strong></p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:16px; vertical-align:bottom">
													<p><strong>DESCRIPTION</strong></p>
													</td>
												</tr>
												@foreach($request_data->user_details as $key => $value)
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>{{ ucfirst(str_replace('_' , ' ' , $key)) }}</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>{{ $value }}</p>
													</td>
												</tr>
												@endforeach
												
												</tr>
											</tbody>
										</table>
                                
		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                    <h3 class="heading"> <strong><i class="fa fa-plus"></i>&nbsp;GUEST ROOM COMMITMENT</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">

		                            <textarea rows="25" id="editor3" name="guest_room_commitment">
		                            	<p><strong>GUEST ROOM COMMITMENT</strong></p>
		                        		&nbsp;
		                            	<p>The Hotel agrees that it will provide below listed rooms per night and following group rates for listed nights to the <strong></strong><strong> {{ $request_data->user_details->group_contact }}/ {{ $request_data->user_details->organization }}.</strong> to be utilized as follows:</p>
		                            </textarea>
		                        </div>
		                    </div>
		                    <br>
		                    <table  cellspacing="0" style="" id="room-commitment-table">
								<tbody id="rooms-table">
									<tr><th>Room Type</th>
										@foreach($request_data->bookings as $key => $bookings)
											<th colspan='2'>
												<input value="{{ $bookings->date }}" name='date[]' placeholder='Date' class='in-table' type='text'>
											</th>
										@endforeach
									</tr>
									<tr><td colspan="{{ count( (array) $request_data->bookings)*2+1 }}"><input name='room_type[]' placeholder='Room Type' class='in-table' type='text'></td></tr>
									<tr><td><input name='room[]' placeholder='Room' class='in-table' type='text'></td>
									@foreach($request_data->bookings as $key => $bookings)
										<td>
											<input name='total_room[]' value="{{ count( (array) $bookings->rooms) }}" placeholder='Total Room' class='in-table' type='text'>
										</td>
										<td>
											<span>INR</span><input name='price[]' placeholder='Price' class='in-table price-input' type='text'><span>+Taxes</span>
										</td>
									@endforeach
									</tr>
								</tbody>
							</table>
							<a class="btn btn-info"  id="genrate-header-row">Redraw Table</a>
							<a class="btn btn-info"  id="genrate-row">Insert Row</a>
		                </div>
		                 <div class="col-lg-12 col-md-12 col-sm-12 f-box">
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
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;PACKAGES AND OTHER</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor4" name="payment_packages_other">
		                            	<p><strong>PACKAGE INCLUSIONS</strong></p>

										<ul>
											<li>Accommodation in well-appointed rooms with Buffet breakfast and taxes.</li>
											<li>Use of the Swimming pool &amp; Gymnasium (Spa services and therapies would be charged additionally).</li>
										</ul>

										<p>&nbsp;</p>

										<p>&nbsp;</p>

										<p><strong>PLEASE NOTE (package inclusions )</strong></p>

										<ul>
											<li><strong>{{ $request_data->user_details->group_contact }}</strong>&nbsp;and Hotel mutually agree to keep the above rates confidential.</li>
											<li>Should the Government of Rajasthan/India modify the tax structure the same will be applicable to <strong>{{ $request_data->user_details->group_contact }} {{ $request_data->user_details->organization }}.</strong></li>
											<li>The above room rate is non-commissionable</li>
											<li>Welcome drinks with Aarti and Tika upon arrival</li>
											<li>Supplement for extra bed / mattress: Extra person with Buffet breakfast and all applicable taxes &ndash; INR 2500 + Taxes <strong>[Rate per night]</strong></li>
											<li><strong>20 % Discount on Food &amp; Soft Beverage and Laundry </strong></li>
											<li>Unlimited mineral water (500 ml each) in all guest rooms</li>
										</ul>

										<ul>
											<li>Iron and iron board in all guest room</li>
										</ul>

										<ul>
											<li>Chef Special amenities per day in all guest room</li>
											<li>The group check &ndash; in time is 1500 hrs and check out time is 12 noon. Early check in/late check out will only be given subject to availability.</li>
											<li>Request for upgrades &amp; twin bedded rooms are subject to availability</li>
											<li>Exact number of single and double occupancy rooms to be advise by the organizer at the time of signing of the agreement</li>
											<li>Additional rooms required over and above the current block will be based on availability of room category and rates as per the hotel strategy for the specified period.</li>
											<li>Entire bill of all guests stay will be borne by the company including alcohol.</li>
											<li>No payment to be taken from any guests.</li>
											<li>Twin bed rooms should be allotted as per the rooming list.</li>
											<li>All Incidentals will be paid on receipt of final bills at the time of final check out date on March 06, 2020.</li>
										</ul>

										<p>&nbsp;</p>

										<p><strong>METHOD OF RESERVATION AND ATTRITION</strong></p>

										<p>Reservations for the Event will be made by a Rooming List. The Organizer will forward the rooming list latest by <strong>20th Feb, 2020. </strong>At this Cut-Off-Date, the Hotel will review the reservation pick up for the group and release the unreserved rooms for general sale, as well as determine whether or not it can accept reservations based on availability at the special group rate.</p>

										<p>Should the room nights confirmed on the rooming list be less than 90 % of the Total Rooms <strong>per night</strong> (as mentioned on Page 2 of the agreement), the organizer agrees to pay, the difference between 90% of the Total Contracted Rooms per night and the room nights confirmed on the rooming list; multiplied by the group room rate. Please note that all rooms must be used during the dates specified under the Guest Room commitment (as mentioned on Page 2 of the agreement)</p>

										<p>&nbsp;</p>

										<p>Hotel will not permit any slippage after the above mentioned cutoff date of rooming list. The 10% slippage clause will not be applicable in this case. The special group rate is applicable subject to a minimum materialization of 10 rooms per night.</p>

										<p>&nbsp;</p>

										<p>Hotel is relying upon <strong>>{{ $request_data->user_details->group_contact }}</strong> to use all room nights totaling to <strong>67</strong> room nights. Should the number of rooms drop below 10 rooms per night, the company would still be charged for a minimum of 10 rooms per night as per the group rate.</p>

										<p>&nbsp;</p>

										<p>In case of direct payment by the guests, the rooming list must mention the individual credit card number and expiry dates. However, please note that the underlying guarantee for the total room nights still remains with the authorized signatory/ company of this agreement.</p>

										<p>&nbsp;</p>

										<p><strong>GUARANTEED RESERVATIONS &amp; N0-SHOWS</strong></p>

										<p><strong>{{ $request_data->user_details->group_contact }}</strong> guarantees that all the individuals whose names appear in the rooming list do not check in to the hotel on the date/s specified, <strong>Hotel</strong> will automatically post a &ldquo;no-show&rdquo; charge on the master account for the entire duration of the event (room and tax charge)</p>

										<p>&nbsp;</p>

										<p><strong>FUNCTION SPACE &amp; FUNCTION INFORMATION AGENDA</strong></p>

										<p>Based on the anticipated requirements for the organizer, the Hotel has reserved the function space over the dates of <strong>02nd, 03rd, 04th and 05th Mar, 2020.</strong> Owing to high demand for function space, requests for extension of function space beyond the above mentioned time(s) are subject to availability of such space. Usage of Venue other facilities apart from the below agenda would be chargeable as per the current group rates applicable.</p>

										<p>&nbsp;</p>

										<p>The Hotel needs to be intimated regarding music requirements/loud Audio Visual presentations/ performances at the time of making the booking.</p>

										<p>&nbsp;</p>

										<p>Limited Parking space is available within the hotel premises. Additional parking space required will be outside the hotel &amp; will be organizer&rsquo;s responsibility and may have additional charges.</p>

										<p>&nbsp;</p>

										<p><strong>MEAL PRICES</strong></p>

										<ul>
											<li>Non Residential Buffet Breakfast at a rate of<strong> INR 1200 Rate per person</strong></li>
											<li>Non Residential Buffet Lunch at a rate of<strong> INR 1600 Rate per person</strong></li>
											<li>Non Residential Buffet Dinner at a rate of<strong> INR 1900 Rate per person</strong></li>
											<li>Any special request for your event could be organized at an extra charge or on actual consumption. (For instance Additional starters, beverages, audio visual, etc.)</li>
										</ul>

										<ul>
											<li>Serving time for meals would be as follows: Lunch / Dinner &ndash; 120 minutes, Pre-lunch/ dinner snack &ndash; 90 minutes.&nbsp; Service request beyond this period would be charged additional as mutually agreed</li>
											<li>Meal Prices are subject to the Minimum Guarantee commitments. In case of increase in the guaranteed attendees prior to the event, the hotel reserves the right to revise the per person meal prices of the contracted rates.</li>
											<li>Menus for all meals will be decided upon confirmation of the contract.</li>
											<li>The above menu structure is not inclusive of shellfish.</li>
										</ul>

										<p>&nbsp;</p>

										<p><strong>MINIMUM GUARANTEES AND MENUS</strong></p>

										<p>The Organizer will guarantee the number of meals required for the banquet events. If the final materialization of guests fall below the guaranteed number mentioned below, the differences would be charged to the master account. In case of an increase of more than 10% in the guaranteed attendees prior to the event, the hotel reserves the right to revise the per person meal prices. The organizer needs to inform about the change not later than <strong>three days</strong> prior to the event.</p>

										<p>&nbsp;</p>

										<p>In order to ensure quality and consistency of our product, we will require the related menus to be finalized <strong>three days </strong>prior to your event.</p>

										<p>&nbsp;</p>

										<p><strong>Some of the food could contain nuts, Customers concerned with food allergies need to be aware of this risk. The hotel will not assume any liability for adverse reactions to foods consumed, or items one may come in contact with while eating at any of our establishments, or catered events. </strong></p>

										<p>&nbsp;</p>

										<p>In case the organizer does not finalize the menus and initialize the Banquet Event Order at the stipulated time line, the hotel will not be responsible for the quality and the menus shall be of chef&rsquo;s choice.</p>

										<p>&nbsp;</p>

										<p><strong>MARRIOTT BONVOY PROGRAM - BONVOY EVENTS</strong></p>

										<p>MARRIOTT BONVOY member can earn MARRIOTT BONVOY points or airline miles on total revenue for qualified meetings and events held at Hotel.</p>

										<p><em>&bull; Earn 2 points for every US dollar spent, up to 60,000 maximum points per event</em></p>

										<p><em>&bull; Earn 1 mile for every US dollar spent, up to 15,000 maximum miles per event</em></p>

										<p>&nbsp;</p>

										<p><strong>Meeting planner can earn Elite status in MARRIOTT BONVOY when holding multiple meetings in a calendar year</strong></p>

										<p><em>&bull; Silver Elite Status: 1 meeting</em></p>

										<p><em>&bull; Gold Elite Status: 5 meetings</em></p>

										<p><em>&bull; Platinum Elite Status: 8 meetings</em></p>

										<p>&nbsp;</p>

										<p>Elite member will receive additional benefits such as bonus points on base stays at Marriott hotels, toll‐free</p>

										<p>Elite‐only guest services telephone line, elite only special offers, priority late check‐out and more.</p>

										<p>&nbsp;</p>

										<p>Approximately (07) business days after the conclusion of the Event (provided that the Event is not cancelled and <strong>(&ldquo;The Client&rdquo;) </strong>has otherwise complied with the material terms and conditions of this Agreement), the Hotel will either award Points or submit an award for airline miles:</p>

										<p>&nbsp;</p>

										<p>&nbsp;</p>

										<p>The number of Points or airline miles to be awarded shall be determined pursuant to the Bonvoy Program Terms and Conditions, as in effect at the time of award.&nbsp; The Bonvoy Program Terms and Conditions are available on-line at marriottrewards.com, and may be changed at the sole discretion of the Bonvoy Program at any time and without notice.&nbsp;&nbsp;</p>

										<p>&nbsp;</p>

										<p>The individual(s) identified above to receive either Points or airline miles may not be changed without such individual(s)&rsquo; prior written consent. By inserting the airline mileage account information, the recipient elects to receive airline miles rather than Points.&nbsp; All Bonvoy Program Terms and Conditions apply.</p>

										<p>&nbsp;</p>

										<p><strong>FOREIGN CORRUPT PRACTICES ACT </strong></p>

										<p>&nbsp;</p>

										<p>A Qualified Rewards Member includes any member of the Marriott Rewards Program unless he/she is:</p>

										<p>&nbsp;</p>

										<ul>
											<li>A government employee, official or anyone acting on behalf of a government agency or department when booking an event on behalf of his/her employing entity; or</li>
											<li>An employee or someone acting on behalf of a state-owned or state-controlled entity (&quot;SOE&quot;) when booking an event on behalf of his/her employing entity; or</li>
											<li>An intermediary booking an event on behalf of a non-U.S. governmental entity or SOE.</li>
											<li>In other words, government employees or officials, employees of SOEs and certain intermediaries are not considered Qualified Rewards Members and are not eligible to participate in Rewarding Events.</li>
										</ul>

										<p>&nbsp;</p>

										<p><strong>ENTERTAINMENT, ALCOHOLIC BEVERAGES &amp; TOBACCO</strong></p>

										<p>Any entertainment with loud music in any indoor / outdoor venues shall be permitted only till 2330 hours. <strong>Liquor purchase is mandatory from the hotel only</strong>. This rate is subject to change as per government norms.</p>

										<p>&nbsp;</p>

										<p>Please note that effective <strong>October 2nd 2008</strong> the&nbsp;<strong>Notification No.P.16015/20/2007-PH dated 30th May, 2008 issued by Ministry of Health and Family Welfare, New Delhi, </strong>will come into effect.</p>

										<p>&nbsp;</p>

										<p>This rule prohibits smoking in all public&nbsp;areas including Banquet spaces,&nbsp;Restaurants,&nbsp;Bars, Lobbies and&nbsp;all other areas of the hotel except for the designated guest rooms on the smoking floors of the hotel and outdoor areas.</p>

										<p>The organizer will inform all your participants accordingly to avoid any unnecessary cause for grievance as hotel will be liable&nbsp;to enforce this new&nbsp;law within our premises</p>

		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;CURRENT APPLICABLE TAXES</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor5" name="current_applicable_taxes">
		                            	<p><strong>CURRENT APPLICABLE TAXES</strong></p>
		                          		@php 
												$taxes = json_decode($hotel->hotelSetting->applicable_taxes , true);
										@endphp
												@if($taxes && is_array($taxes))  
										
		                            	<table cellspacing="0" style="border-collapse:collapse; width:575px">
											<tbody>
												<tr>
													<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid navy; border-right:none; border-top:1px solid navy; height:20px; width:323px">
													<p>DETAILS</p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:20px; width:73px">
													<p>VAT</p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:20px; width:70px">
													<p>CGST</p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:20px; width:51px">
													<p>SGST</p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid navy; border-top:1px solid navy; height:20px; width:58px">
													<p>TOTAL</p>
													</td>
												</tr>
												
												@foreach($taxes as $key => $value)
												@php
												$total = 0;
												$total += $value['vat'] && is_numeric($value['vat']) ? $value['vat'] : 0;
												$total += $value['cgst'] && is_numeric($value['cgst']) ? $value['cgst'] : 0;
												$total += $value['sgst'] && is_numeric($value['sgst']) ? $value['sgst'] : 0;
												@endphp

												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
													<p>{{ $value['tax_name'] }}</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
													<p>{{ $value['vat'] ? number_format($value['vat'], 2, '.', '').'%' : 'NA' }}</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
													<p>{{ $value['cgst'] ? number_format($value['cgst'], 2, '.', '').'%' : 'NA' }}</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
													<p>{{ $value['sgst'] ? number_format($value['sgst'], 2, '.', '').'%' : 'NA' }}</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
													<p>{{ number_format($total, 2, '.', '') }}%</p>
													</td>
												</tr>
												@endforeach
												
											</tbody>
										</table>
										@endif

										<p>&nbsp;</p>

										<p><em>(Please note that above taxes are subject to change as per change in government norms. Should there be any modification in the tax structure, it shall be borne by the client)</em></p>

										<p>&nbsp;</p>
		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;PERMISSIONS FOR THE EVENT</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor6" name="permission_for_event">
		                            	<p><strong>PERMISSIONS FOR THE EVENT</strong></p>

										<p>The necessary permissions for the event from excise, entertainment tax, police, IPRS and customs etc are to be taken well in advance and copies are to be submitted to us for final confirmation. Your confirmation letter should also clearly state that you take the full responsibility in obtaining these above-mentioned permissions.</p>

										<p>&nbsp;</p>

										<table cellspacing="0" style="border-collapse:collapse; width:102.2%">
											<tbody>
												<tr>
													<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:33px; vertical-align:top; width:7%px">
													<p><strong>SNO</strong></p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:33px; vertical-align:top; width:30%px">
													<p><strong>Name of the License / Permission</strong></p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:33px; vertical-align:top; width:26%px">
													<p><strong>List of NOC / Letter Required</strong></p>
													</td>
													<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:33px; vertical-align:top; width:35%px">
													<p><strong>Remark</strong></p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:7%px">
													<p>1</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; width:30%px">
													<p>Performance License</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; width:26%px">
													<p>NOC</p>
													</td>
													<td rowspan="2" style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; width:35%px">
													<p>This is required for Entertainment Program, i.e. Dance, Musical Performance, DJ, Exhibitions, etc.</p>

													<p>The DJ should also have the license to perform (PPL)</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:64px; width:7%px">
													<p>2</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:64px; width:30%px">
													<p>Public Performance license</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:64px; width:26%px">
													<p>NOC</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:49px; width:7%px">
													<p>3</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:49px; width:30%px">
													<p>Indemnification Letter</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:49px; width:26%px">
													<p>Letter from the hotel</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:49px; width:35%px">
													<p>Should the organizer obtain food or beverages from outside, an indemnification letter to be signed.</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:49px; width:7%px">
													<p>4</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:49px; width:30%px">
													<p>IPRS License</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:49px; width:26%px">
													<p>NOC</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:49px; width:35%px">
													<p>This is required for Entertainment Program, i.e. Dance, Musical Performance, etc.Performance, etc.</p>
													</td>
												</tr>
											</tbody>
										</table>

										<p>&nbsp;</p>

										<p><strong><em>NOTE:</em></strong><em> Kindly note the expected time period to acquire all above licenses from the government is 7 &ndash; 10 working days. A copy of all the above mentioned licenses has to be sent to the concerned Event Manger a day prior to the event, failing which the Hotel and Licensing Authorities reserve the right to stop any form of entertainment on the day of the event.</em></p>

										<p>&nbsp;</p>
		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;DAMAGE CLAUSE AND OTHER</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor7" name="damage_payment">
		                            	<p><strong>DAMAGE CLAUSE</strong></p>

										<p>The Organizer will take full responsibility for any damages incurred during the event &amp; construction / dismantling of the set up by the company&#39;s setup staff or guests. The Organizer agrees to compensate for the same / replace, irrespective of the amount.</p>

										<p>&nbsp;</p>

										<p><strong>INSURANCE</strong></p>

										<p>Organizer shall at all times for and during the occupancy of the said premises (i.e. from the time of taking possession of the premises to handing over the vacant possession of the same back to Hotel after completion of the event), shall at its own cost and expense comprehensively insure its material, equipment, stock, material, furniture, equipment, etc. brought in by the Organizer, its exhibitors, customers, visitors, contractors, service providers, agencies, representatives, and others on account of the event, in the said premises against all Risks such as Public</p>

										<p>Liability, damage by fire, tempest, earthquake, mob or any violence, act of GOD and other irresistible force in respect of the Said Premises. Hotel shall in no way be responsible for any loss occasioned by the ORGANIZER, its exhibitors, customers, visitors, contractors, service providers, agencies, representatives, and others on account of the ORGANIZER not obtaining comprehensive insurance coverage of material, equipment, stock, material, furniture, equipment and/or other items kept or stored by it in the Said Premises.</p>

										<p>&nbsp;</p>

										<p><strong>FORCE MAJEURE</strong></p>

										<p>The performance of this agreement is subject to termination without liability upon the occurrence of any circumstance beyond the control of either party such as acts of god, war, government regulations, disasters, civil disorder, strikes (except those involving the employees or agents of the parties seeking protection of this clause) or curtailment of transportation facilities-to the extent that such circumstance make it illegal or impossible to provide or use the hotel facilities. The ability to terminate this agreement without liability pursuant to this paragraph is conditional upon delivery of written notice to the other party setting forth the basis for such termination as soon as reasonably practical; but in no event later than ten (10) days after learning of such basis. >{{ $request_data->user_details->group_contact }} agrees that if the event is cancelled due to FORCE MAJEURE they will rebook in future (within 3 months) as per availability in the hotel. The rates applicable for the re booking option will be as per the hotel strategy for that period.</p>

										<p>&nbsp;</p>

										<p>&nbsp;</p>

										<p><strong>METHOD OF PAYMENT</strong></p>

										<p>&nbsp;</p>

										<p>The following billing arrangements apply:</p>

										<p>&nbsp;</p>

										<ul>
											<li>100% advance on the minimum guarantee prior to the function, the schedule of which is mentioned.</li>
											<li>Bills will be presented at the end of the function for your review and signature.</li>
											<li>Should&nbsp;<strong>>{{ $request_data->user_details->group_contact }}</strong>&nbsp;wish to pay by cash, kindly produce pan card for amounts over 25,000/-.</li>
											<li>The outstanding amount is to be cleared after the function by cash or credit card. Cheque as the mode of payment for the final settlement on the day of the event will not be acceptable</li>
											<li>Should an outstation cheque be presented, the amount needs to be realized prior to conference checking in</li>
											<li>In case of delay in the prescribed payment schedule, interest will be payable @ 3% (per month) from the due date till the payment is realized with Hotel.</li>
											<li>Non-compliance of the above payment schedule shall attract annulment of this contract at the sole discretion of Hotel as well as forfeiture of the amounts paid/deposited by the ORGANIZER.</li>
											<li>Entire bill of all guests stay will be borne by the company including alcohol</li>
											<li>No payment to be taken from any guests</li>
											<li>Twin bed rooms should be allotted as per the rooming list</li>
											<li>All Incidentals will be paid on receipt of final bills at the time of final check out date on March 06, 2020</li>
										</ul>

		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;DEPOSITE</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor8" name="deposite">
		                            	<p><strong>DEPOSIT</strong></p>

										<p>The organizer<strong>&nbsp;</strong>agrees to pay the following advance payment/deposit schedule:</p>

										<table cellspacing="0">
											<tbody>
												<tr>
													<td>
													<p><strong>SEQUENCE OF DEPOSIT</strong></p>
													</td>
													<td>
													<p><strong>DEPOSIT FOR CATERING/ ROOMS</strong></p>
													</td>
												</tr>
												<tr>
													<td>
													<p>Good Faith Deposit (Signed Contract)</p>
													</td>
													<td>
													<p>INR 342,990/- 50%of Room and Catering Charges (Non&nbsp; - Refundable) and 50% Security Deposit</p>
													</td>
												</tr>
												<tr>
													<td>
													<p>02nd Feb, 2020</p>
													</td>
													<td>
													<p>INR 342,990/- 50% of Room and Catering Charges</p>
													</td>
												</tr>
												<tr>
													<td>
													<p>Incidentals</p>
													</td>
													<td>
													<p>On the Commencement of the event</p>
													</td>
												</tr>
											</tbody>
										</table>

										<p>&nbsp;</p>

											<p><strong>Bank Detail</strong></p>

											<table cellspacing="0" style="border-collapse:collapse; width:607px">
												<tbody>
													<tr>
														<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:15px; vertical-align:top; width:282px">
														<p><strong>PARTICULARS</strong></p>
														</td>
														<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:15px; vertical-align:top; width:325px">
														<p><strong>DETAILS</strong></p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:282px">
														<p>Account Name</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['account_name'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
														<p>Account Number</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['account_number'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
														<p>Bank Name</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['bank_name'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:19px; vertical-align:bottom; width:282px">
														<p>Account Type</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:19px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['account_type'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:282px">
														<p>IFSC Code</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['ifsc_code'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:282px">
														<p>MICR Code</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['micr_code'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
														<p>BSR Code</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['bsr_code'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
														<p>Address</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['address'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
														<p>Branch Code</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['branch_code'] }}</p>
														</td>
													</tr>
													<tr>
														<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:13px; vertical-align:bottom; width:282px">
														<p>Branch Name</p>
														</td>
														<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:13px; vertical-align:bottom; width:325px">
														<p>{{ $bank_detail[0]['branch_name'] }}</p>
														</td>
													</tr>
													
												</tbody>
											</table>

											<p>&nbsp;</p>


		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;REFUNDS AND CANCELLATION POLICY</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                	<div class="form-group">
		                		<label>Policies</label>
		                		<select class="form-control" multiple="" id="policies" onchange="showPolicies();">
		                			@foreach(json_decode($hotel->hotelSetting->policies , true) as $key => $policy)
		                				<option @if($policy['default']) selected @endif value="{{ strtolower(str_replace(' ' , '_' , $policy['policy_name'])) }}">
		                					{{ $policy['policy_name'] }}
		                				</option>
		                			@endforeach
		                		</select>
		                	</div>
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor9" class="policies" name="refunds_cancellation">
		                            	<p><strong>REFUNDS </strong></p>

										<p>As per Reserve Bank of India regulations, refund of&nbsp;any excess deposit for the event can be processed against a recall request by the&nbsp;Organizer&rsquo;s&nbsp;Banker to&nbsp;Hotel&#39;s Bankers. Once authorization is received, the amount required to be refunded&nbsp;will be&nbsp;remitted to the Organizer&rsquo;s Bank Account within <strong>30 / 15 working days</strong>.</p>

										<p>&nbsp;</p>

										<p><strong>CANCELLATION POLICY</strong></p>

										<p>&nbsp;</p>

										<p>The hotel will be holding all the space listed in the contract once the function is confirmed. Should any specified function on any listed date be cancelled, the following cancellation charges will be imposed:</p>

										<p>&nbsp;</p>

										<table border="1" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td style="height:18px; width:301px">
													<p>CANCELLATION PERIOD</p>
													</td>
													<td style="height:18px; width:366px">
													<p>ROOM AND CATERING CHARGES</p>
													</td>
												</tr>
												<tr>
													<td style="height:18px; width:301px">
													<p>Up to 91 days prior to arrival</p>
													</td>
													<td style="height:18px; width:366px">
													<p>25% of Room and Catering Charges</p>
													</td>
												</tr>
												<tr>
													<td style="height:18px; width:301px">
													<p>90 to 61 days prior to arrival</p>
													</td>
													<td style="height:18px; width:366px">
													<p>50% of Room and Catering Charges</p>
													</td>
												</tr>
												<tr>
													<td style="height:18px; width:301px">
													<p>60 to 31 days prior to arrival</p>
													</td>
													<td style="height:18px; width:366px">
													<p>75% of Room and Catering Charges</p>
													</td>
												</tr>
												<tr>
													<td style="height:20px; width:301px">
													<p>Within 30 days prior to arrival</p>
													</td>
													<td style="height:20px; width:366px">
													<p>100% of Total Room and Catering Charges</p>
													</td>
												</tr>
											</tbody>
										</table>

										<p>*Total Room Charges = Total Room Nights multiplied by Average Room Rate.</p>

		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;CHANGES, ADDITIONS &amp; MODIFICATIONS</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor10" name="changes_acceptance">
		                            	<p><strong>CHANGES, ADDITIONS &amp; MODIFICATIONS</strong></p>

										<p>All changes, additions, deletions, or stipulations by either the Hotel or the organizer will not be considered agreed to, or binding to the other, unless such modification has been initiated or otherwise approved in writing by the other.</p>

										<p>&nbsp;</p>

										<p><strong>PURPOSE OF THE EVENT</strong></p>

										<p>The Purpose of the scheduled event at Hotel is a&nbsp;<strong>Working</strong>. In the event that Organizer decides to change the purpose of the event, the same should be intimated to the Hotel in writing within 72 hours, this time of change in the purpose should not be less than 7 days prior to the date of the event. The Organizer agrees that the Hotel shall reserve the right to terminate or continue with the contract, upon the sole discretion of the Hotel.</p>

										<p>&nbsp;</p>

										<p>In the event of the failure to inform the Hotel, of the change in the purpose of the event or in the case of Hotel decides not to accept the function with the changed purpose, the Hotel will exercise their right to terminate/cancel the contract without any notice period to the Organizer. Hotel will not be responsible for any damages or loss to the Organizer due to this. The Hotel will also forfeit the advance made till the date of cancellation of the event.</p>

										<p>&nbsp;</p>

										<p><strong>TERMINATION OF THE CONTRACT</strong></p>

										<p>&nbsp;Should any of the above terms &amp; conditions are not adhered to, the Organizer agrees that the Hotel reserves the right to terminate/cancel the contract, without prior notice with no responsible for any damages or loss to the Organizer due to this. Hotel will also forfeit the advance made till the date of cancellation of the event.</p>

										<p><strong>ORGANIZER SHALL NOT</strong></p>

										<p>Use any tapes, markers, nails or other fixing mechanisms on the floor, wall &amp; ceilings.</p>

										<p>Install/alter any existing electrical fittings.</p>

										<p>Use paints, colors and other adhesive materials on the floor, wall &amp; ceilings.</p>

										<p>Uproot tiles/blocks in the open area.</p>

										<p>Use Confetti &amp; Cold Pyro&rsquo;s during the event</p>

										<p>Damage the greenery/landscaping.</p>

										<p>&nbsp;</p>

										<p><strong>SAFETY, FIRE AND SECURITY</strong></p>

										<p>The Organizer shall strictly follow all fire safety &amp; security measures, rules and regulations at the hotel premises.</p>

										<p>The Organizer shall ensure that safety arrangements in relation to the event are adequate, effective and strictly observed at all times.</p>

										<p>The Organizer shall not bring any kind of explosive or combustible materials inside the hotel premises.</p>

										<p>&nbsp;</p>

										<p><strong>REFUSAL OF ADDMISSION</strong></p>

										<p>Organizer acknowledges that Hotel reserves the right to refuse admission to, or cause to be removed from the hotel of any person whose behavior is illegal, objectionable, improper, undesirable or contrary to public policy and the terms and intention of this Agreement.</p>

										<p>&nbsp;</p>

										<p><strong>INDEMNIFICATION AND HOLD HARMLESS</strong></p>

										<p>Organizer agrees to defend, indemnify and hold harmless the hotel and their officers, directors, employees and agents from and against all claims, actions, and causes of actions, or liabilities including reasonable attorney&rsquo;s fees arising out of any account/ reason with respect to its event in the said premises.</p>

										<p>&nbsp;</p>

										<p><strong>RIGHTS OF HOTEL</strong></p>

										<p>Hotel shall reserve the right to change the halls in the event of unforeseen &amp; unavoidable circumstances. Hotel shall reserve the right to cancel the booking in the event of noncompliance of payments terms payment schedule, or in case of any other breach by the Organizer in the performance and observance of any of the covenants, terms and conditions herein contained in the Agreement and on its part to be observed and performed. In the event of cancellation by Hotel, all the amounts paid by the Organizer shall be refunded by the hotel, without any interest, after deducting dues if any and/or Cancellation Charges under Event Cancellation policy. No damages / compensation / loss of profit of whatsoever in nature shall be payable by HOTEL.</p>

										<p>&nbsp;</p>

										<p>&nbsp;</p>

										<p><strong>GOVERNING LAW AND JURISDICTIONS</strong></p>

										<p>This agreement shall be governed by and construed in accordance with the substantive law of India without reference to principle of conflict of laws. Subject to the terms and provisions of the Section entitled, &ldquo;Arbitration&rdquo; below, all disputes and claims that arise under or in connection with this agreement shall be subject to the court of competent supervisory jurisdiction in Jaisalmer, Rajasthan, India for trial and determination.</p>

										<p>&nbsp;</p>

										<p><strong>&nbsp;ACCEPTANCE</strong></p>

										<p>By signing and returning this agreement by&nbsp;<strong>11th Jan, 2020&nbsp;</strong>this agreement will constitute a binding contract between the parties. The individual signing below represent that each is authorized to bind his or her party to this agreement.</p>

										<p>&nbsp;</p>

										<p>In the event a fully-signed copy of this agreement is not received by the date above, all guest rooms and meeting space referred to herein will be released, and neither party will have any further obligations under this agreement.</p>

										<p>&nbsp;</p>

										<p>In the meanwhile, should you have any queries, please feel free contact&nbsp;<strong>YUVRAJ SINGH TANWAR</strong></p>

		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;BOTTOM SIGNATURE</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor11" name="bottom_signature">
		                            	<p>Approved and authorized by the following representative of the&nbsp;<strong>{{ $hotel->name }}:</strong></p>

											<p>&nbsp;</p>

											<p>ame: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotels &nbsp;&nbsp;&nbsp;</p>

											<p>Signature:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt="" src="data:image/png;base64,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" style="height:44px; width:175px" /></p>

											<p>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09th Jan, 2020</p>

		                            </textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="text-center">
		            	<!-- <input type="submit" value="Submit" class="btn btn-success btn-lg"> -->
						<input  id="popup-btn" type="btn" value="Preview" class="btn btn-success btn-lg">
		            </div>
		        </form>
				<!-- preview popup start -->
<div class="preview-popup">
  <div class="preview-popup-inner">
    <div class="popup-container">
      <div class="popup-row">
        <div class="close-btn">X</div>
        <div id="content-to-show" class="content">
        </div>
          <!-- <h5>This is popup</h5> -->
          <div class="ok-cancel">
            <span><button type="btn" id="perposal-btn" class="ok">OK</button></span>
            <span><button type="btn" class="cancel">Cancel</button></span>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- preview popup end -->
    		</div>
		</div>

		<!-- <form action="{{ route('tenant.admin.showPerposalTemplate.store' , ['lead_id'=>$lead->id , 'hotel_code'=>$hotel_code]) }}" method="post">
			@csrf -->

		<!-- <p>&nbsp;</p>
		<div class="row">
		<div class="col-md-6">

		<p><strong>SIGNATURES</strong></p>

		<p>&nbsp;</p>

		<p>Approved and authorized by the following representative of<strong> </strong><strong>Mr. XXXX Singh</strong></p>

		<p>&nbsp;</p>

		<p>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Mr</strong><strong> XXXX Singh</strong></p>

		<p>Signature:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width: 300px;" id="current-user-sign" src=""></p>

		<p>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; __________________________</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>
		</div>
		<div class="col-md-6"> 
			<div id="content">
			<hr>
			<h4 class="text-center">Signature Area</h4>
			<div id="signature"></div>
			<div id="tools"></div>
			</div>
		</div>
		</div> -->

	</div>
	<script>
  //document.getElementById("myP").contentEditable = true;
  var policies = {};
  		

   function showPolicies(){
   		var policy_names = jQuery("#policies").val();
   		axios.get("{{ route('tenant.admin.hotel.policies' , ['hotel_code'=>$hotel_code]) }}", {
		    params: {
		      policy_names
		    }
	  	})
		  	.then(function (response) {
		  		var obj = response.data;
		  		$("#editor9").html('');
	  			var plc = '';
			    for(var key in obj){
			    	if( obj.hasOwnProperty(key) ) {
			    		console.log(obj[key]);
	  					$("#editor9").append("<p><strong>"+(key.toUpperCase()).replace(/_/g , ' ')+"</strong></p>"+obj[key]+"<br>");
		  				plc += "<p><strong>"+(key.toUpperCase()).replace(/_/g , ' ')+"</strong></p>"+obj[key]+"<br>";
			    	}
			    }
			    CKEDITOR.instances['editor9'].setData(plc);
	  	})
		  	.catch(function (error) {
		    console.log(error);
	  	})
	  		.then(function () {
	  	});
	  	// $("#editor9").html('');
	  	// var plc = '';	
	  	// if($("#policies").val()){
		  // 	$.each($("#policies").val(), function( index, value ) {
		  // 		$("#editor9").append("<p><strong>"+(value.toUpperCase()).replace(/_/g , ' ')+"</strong></p>"+policies[value]+"<br>");
		  // 		plc += "<p><strong>"+(value.toUpperCase()).replace(/_/g , ' ')+"</strong></p>"+policies[value]+"<br>";

		  // 	});
	  	// }
	  	// 	CKEDITOR.instances['editor9'].setData(plc);
	  }

  	$(document).ready(function(){
  		var nights={{ count( (array) $request_data->bookings) }} , room_types ;

  		

	  $(document).on('click' , '#genrate-header-row' , function(){
	  		if(confirm('Doing this , you will loss all the data inserted in the table.')){
	  	 	nights = prompt("Please enter number of nights:", 7);
	  	 	genrateTable();
	  	 	generateRow();
	  	 	}
	  });

	  $(document).on('click' , '#genrate-row' , function(){
	  	  generateRow();
	  });

	  function genrateTable(){
	  	 var firstrow = '<tr><th>Room Type</th>';
	  	 for (var i = 1; i <= nights ; i++) {
	  	 	firstrow = firstrow+"<th colspan='2'><input name='date[]' placeholder='Date' class='in-table' type='text'></th>";
	  	 }
	  	 firstrow = firstrow+"</tr>";
	  	  $('#rooms-table').html(firstrow);
	  	 $(this).hide();
	  	 $("#genrate-row").show();
	  }

	  function generateRow(){
	  	var room_type = "<tr><td colspan="+ nights+1+"><input name='room_type[]' placeholder='Room Type' class='in-table' type='text'></td></tr>";
	  	 var room = "<tr><td><input name='room[]' placeholder='Room' class='in-table' type='text'></td>"
	  	 for (var i = 1; i <= nights ; i++) {
	  	 	room = room+"<td><input name='total_room[]' placeholder='Total Room' class='in-table' type='text'></td><td><span>INR</span><input name='price[]' placeholder='Price' class='in-table price-input' type='text'><span>+Taxes</span></td>";
	  	 }
	  	 room = room+"</tr>";
	  	 $('#rooms-table').append(room_type);
	  	 $('#rooms-table').append(room);
	  	 $("#genrate-row").show();
	  }

	 
	  showPolicies();
	  // genrateTable();
	  // generateRow();
	});
</script>
		
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
		<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
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
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click' , '#prnt-btn' , function(){
				$(this).hide();
				$('#content').hide();

				 window.print();

				 $(this).show();
				 $('#content').show();
			});

			$(document).on('click' , '.heading' , function(){
				$(this).parent().next('.content-section').toggle('slow');
				$(this).find('strong').find('i').attr('class');
				var icon = "fa fa-plus";
				if($(this).find('strong').find('i').attr('class') === 'fa fa-plus')
					icon = "fa fa-minus";
				$(this).find('strong').find('i').attr('class' , icon);
			});	


			$('#popup-btn').click(function(){
				$("#content-to-show").html('');
				$("#content-to-show").append($("#editor1").text())
				$("#content-to-show").append($("#editor2").text())
				$("#content-to-show").append($("#editor3").text())
				$("#content-to-show").append($("#room-commitment-table").html())
				$("#content-to-show").append($("#editor4").text())
				$("#content-to-show").append($("#editor5").text())
				$("#content-to-show").append($("#editor6").text())
				$("#content-to-show").append($("#editor7").text())
				$("#content-to-show").append($("#editor8").text())
				$("#content-to-show").append($("#editor9").html())
				$("#content-to-show").append($("#editor10").text())
				$("#content-to-show").append($("#editor11").text())
				$('.preview-popup').css('display', 'block')

			})
			$('.close-btn').click(function(){
				$("#content-to-show").html('');
				$(this).parent().parent().parent().parent().css('display', 'none');
			})

			$(document).on('click' , '#perposal-btn' , function(){
				$("#perposal-form").submit()
			})
			$('.cancel').on('click', function(){
				$('.preview-popup').css('display', 'none');
			})
			
		});
	</script>
	<script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
        CKEDITOR.replace( 'editor4' );
        CKEDITOR.replace( 'editor5' );
        CKEDITOR.replace( 'editor6' );
        CKEDITOR.replace( 'editor7' );
        CKEDITOR.replace( 'editor8' );
        CKEDITOR.replace( 'editor9' );
        CKEDITOR.replace( 'editor10' );
        CKEDITOR.replace( 'editor11' );
</script>
</body>
</html>