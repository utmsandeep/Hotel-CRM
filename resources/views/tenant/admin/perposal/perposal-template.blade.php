<!DOCTYPE html>
<html>
<head>
	<title>Perposal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="{{ asset('js/tenant/jSignature/libs/modernizr.js') }}"></script>
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
		.content-section{
			display: none;
		}
  	</style>
</head>
<body>
	<div class="container" id="myP">
		<div class="row clearfix">
    		<div class="col-lg-12 col-md-12 col-sm-12">
       
		        <form method="post" enctype="multipart/form-data" action="">
		            @csrf
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;Greeting</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor1" name="booking_policy">{{ $template->greeting }}</textarea>
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
		                            <textarea rows="25" id="editor2" name="booking_policy">
		                            	{{ $template->g_c_sales_agreement }}
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
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>ORGANIZATION</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>YRF &nbsp;xxxxxxxxxx &nbsp;PVT LTD.</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>GROUP CONTACT</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>Mr. Xxxxx Singh</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; vertical-align:top">
													<p>ADDRESS</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:33px; vertical-align:bottom">
													<p>G-1 A, AHINSA CIRCLE, ASHOK MARG,&nbsp;</p>

													<p>C-Scheme, Jaipur, Rajasthan, 302001.</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>PHONE NUMBER</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>91 xxxxxxxxx40</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>E-MAIL</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>sanjay@xxxxxxx.com</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>NAME OF THE EVENT</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>YRF xxxxxxxx PVT LTD.</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>DATE OF THE EVENT</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>&nbsp;02nd March to 06th March</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>MINIMUM ATTENDANCE</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>&nbsp;10</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>DATE OF ISSUE OF AGREEMENT</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>28 January 2020</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>REVISED AND REISSUED ON</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; vertical-align:bottom">
													<p>28-Jan-20</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom">
													<p>BOOKING ID</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom">
													<p>156037</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom">
													<p>PAN Number</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom">
													<p>AAACY3361K</p>
													</td>
												</tr>
												<tr>
													<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom">
													<p>GST IN Number</p>
													</td>
													<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom">
													<p>08AAACY3361K1Z3</p>
													</td>
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
		                            <textarea rows="25" id="editor3" name="booking_policy">
		                            	<p>The Hotel agrees that it will provide below listed rooms per night and following group rates for listed nights to the <strong>Mr</strong><strong> Sanjay Shivalkar/ YRF xxxxx PVT LTD.</strong> to be utilized as follows:</p>
		                            </textarea>
		                        </div>
		                    </div>
		                    <br>
		                    <table  cellspacing="0" style="">
								<tbody id="rooms-table">
								</tbody>
							</table>
							<a class="btn btn-info"  id="genrate-header-row">Draw Table</a>
							<a class="btn btn-info"  id="genrate-row" style="display: none">Insert Row</a>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;Packages and Other</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor4" name="booking_policy">{{ $template->payment_packages_other	 }}</textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </form>
    		</div>
		</div>

		<!-- <form action="{{ route('tenant.admin.showPerposalTemplate.store') }}" method="post">
			@csrf -->
		
		
		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p><strong>PACKAGE INCLUSIONS</strong></p>

		<ul>
			<li>Accommodation in well-appointed rooms with Buffet breakfast and taxes.</li>
			<li>Use of the Swimming pool &amp; Gymnasium (Spa services and therapies would be charged additionally).</li>
		</ul>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p><strong>PLEASE NOTE (package inclusions )</strong></p>

		<ul>
			<li><strong>Mr</strong><strong> xxxx Singh </strong>&nbsp;and Hotel mutually agree to keep the above rates confidential.</li>
			<li>Should the Government of Rajasthan/India modify the tax structure the same will be applicable to <strong>Mr</strong><strong> xxx Singh YRF xxxxxxx PVT LTD.</strong></li>
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

		<p>Reservations for the Event will be made by a Rooming List. The Organizer will forward the rooming list latest by <strong>20th Feb, 2020. </strong>At this Cut-Off-Date, the Hotel will review the reservation pick up for the group and release the unreserved rooms for general sale, as well as determine whether or not it can accept reservations based on availability at the special<strong> </strong>group rate.</p>

		<p>Should the room nights confirmed on the rooming list be less than 90 % of the Total Rooms <strong>per night</strong> (as mentioned on Page 2 of the agreement), the organizer<strong> </strong>agrees to pay, the difference between 90% of the Total Contracted Rooms per night and the room nights confirmed on the rooming list; multiplied by the group room rate. Please note that all rooms must be used during the dates specified under the Guest Room commitment (as mentioned on Page 2 of the agreement)</p>

		<p>&nbsp;</p>

		<p>Hotel will not permit any slippage after the above mentioned cutoff date of rooming list. The 10% slippage clause will not be applicable in this case. The special group rate is applicable subject to a minimum materialization of 10 rooms per night.</p>

		<p>&nbsp;</p>

		<p>Hotel is relying upon <strong>Mr</strong><strong> Sanjay Shivalkar</strong> to use all room nights totaling to <strong>67</strong> room nights. Should the number of rooms drop below 10 rooms per night, the company would still be charged for a minimum of 10 rooms per night as per the group rate.</p>

		<p>&nbsp;</p>

		<p>In case of direct payment by the guests, the rooming list must mention the individual credit card number and expiry dates. However, please note that the underlying guarantee for the total room nights still remains with the authorized signatory/ company of this agreement.</p>

		<p>&nbsp;</p>

		<p><strong>GUARANTEED RESERVATIONS &amp; N0-SHOWS</strong></p>

		<p><strong>Mr</strong><strong> Sanjay Shivalkar</strong> guarantees that all the individuals whose names appear in the rooming list do not check in to the hotel on the date/s specified, <strong>Hotel</strong> will automatically post a &ldquo;no-show&rdquo; charge on the master account for the entire duration of the event (room and tax charge)</p>

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

		<p>The Organizer<strong> </strong>will guarantee the number of meals required for the banquet events. If the final materialization of guests fall below the guaranteed number mentioned below, the differences would be charged to the master account. In case of an increase of more than 10% in the guaranteed attendees prior to the event, the hotel reserves the right to revise the per person meal prices. The organizer needs to inform about the change not later than <strong>three days</strong> prior to the event.</p>

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

		<p>The organizer will inform all your participants accordingly to avoid any unnecessary cause for grievance as hotel will be liable&nbsp;to enforce this new&nbsp;law within our premises.</p>

		<p>&nbsp;</p>

		<p><strong>CURRENT APPLICABLE</strong><strong> TA</strong></p>

		<p><strong>XES</strong></p>

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
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>ROOMS ONLY below 7500</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>6.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>6.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>12.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>ROOMS ONLY Above 7500</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>FOOD &amp; BEVERAGE &ndash; BANQUET WITH ROOMS if Room is below INR 7500</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>FOOD &amp; BEVERAGE &ndash; BANQUET WITH ROOMS if Room is above INR 7500</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>FOOD &amp; BEVERAGE &ndash; BANQUET ONLY</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>LIQUOR &amp; WINE</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>24%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>0.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>0.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>24.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>SOFT/AERATED WATER/CARBONATED WATER</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>CANNED JUICES / SPARKLING WATER</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>HALL RENTAL CHARGES</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>FRESH JUICES</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>TOBACCO</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:20px; width:323px">
					<p>AUDIO VISUAL</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; width:73px">
					<p>NA</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:70px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:51px">
					<p>9.00%</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; width:58px">
					<p>18.00%</p>
					</td>
				</tr>
			</tbody>
		</table>

		<p>&nbsp;</p>

		<p><em>(Please note that above taxes are subject to change as per change in government norms. Should there be any modification in the tax structure, it shall be borne by the client)</em></p>

		<p>&nbsp;</p>

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

		<p><strong>DAMAGE CLAUSE</strong></p>

		<p>The Organizer will take full responsibility for any damages incurred during the event &amp; construction / dismantling of the set up by the company&#39;s setup staff or guests. The Organizer agrees to compensate for the same / replace, irrespective of the amount.</p>

		<p>&nbsp;</p>

		<p><strong>INSURANCE</strong></p>

		<p>Organizer shall at all times for and during the occupancy of the said premises (i.e. from the time of taking possession of the premises to handing over the vacant possession of the same back to Hotel after completion of the event), shall at its own cost and expense comprehensively insure its material, equipment, stock, material, furniture, equipment, etc. brought in by the Organizer, its exhibitors, customers, visitors, contractors, service providers, agencies, representatives, and others on account of the event, in the said premises against all Risks such as Public</p>

		<p>Liability, damage by fire, tempest, earthquake, mob or any violence, act of GOD and other irresistible force in respect of the Said Premises. Hotel shall in no way be responsible for any loss occasioned by the ORGANIZER, its exhibitors, customers, visitors, contractors, service providers, agencies, representatives, and others on account of the ORGANIZER not obtaining comprehensive insurance coverage of material, equipment, stock, material, furniture, equipment and/or other items kept or stored by it in the Said Premises.</p>

		<p>&nbsp;</p>

		<p><strong>FORCE MAJEURE</strong></p>

		<p>The performance of this agreement is subject to termination without liability upon the occurrence of any circumstance beyond the control of either party such as acts of god, war, government regulations, disasters, civil disorder, strikes (except those involving the employees or agents of the parties seeking protection of this clause) or curtailment of transportation facilities-to the extent that such circumstance make it illegal or impossible to provide or use the hotel facilities. The ability to terminate this agreement without liability pursuant to this paragraph is conditional upon delivery of written notice to the other party setting forth the basis for such termination as soon as reasonably practical; but in no event later than ten (10) days after learning of such basis. Mr Sanjay Shivalkar agrees that if the event is cancelled due to FORCE MAJEURE they will rebook in future (within 3 months) as per availability in the hotel. The rates applicable for the re booking option will be as per the hotel strategy for that period.</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p><strong>METHOD OF PAYMENT</strong></p>

		<p>&nbsp;</p>

		<p>The following billing arrangements apply:</p>

		<p>&nbsp;</p>

		<ul>
			<li>100% advance on the minimum guarantee prior to the function, the schedule of which is mentioned.</li>
			<li>Bills will be presented at the end of the function for your review and signature.</li>
			<li>Should <strong>Mr</strong><strong> Sanjay Shivalkar</strong> wish to pay by cash, kindly produce pan card for amounts over 25,000/-.</li>
			<li>The outstanding amount is to be cleared after the function by cash or credit card. Cheque as the mode of payment for the final settlement on the day of the event will not be acceptable</li>
			<li>Should an outstation cheque be presented, the amount needs to be realized prior to conference checking in</li>
			<li>In case of delay in the prescribed payment schedule, interest will be payable @ 3% (per month) from the due date till the payment is realized with Hotel.</li>
			<li>Non-compliance of the above payment schedule shall attract annulment of this contract at the sole discretion of Hotel as well as forfeiture of the amounts paid/deposited by the ORGANIZER.</li>
			<li>Entire bill of all guests stay will be borne by the company including alcohol</li>
			<li>No payment to be taken from any guests</li>
			<li>Twin bed rooms should be allotted as per the rooming list</li>
			<li>All Incidentals will be paid on receipt of final bills at the time of final check out date on March 06, 2020</li>
		</ul>

		<p>&nbsp;</p>

		<p><strong>DEPOSIT</strong></p>

		<p>The organizer<strong> </strong>agrees to pay the following advance payment/deposit schedule:</p>

		<table cellspacing="0" style="border-collapse:collapse; width:0px">
			<tbody>
				<tr>
					<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:15px; vertical-align:top; width:312px">
					<p><strong>SEQUENCE OF DEPOSIT</strong></p>
					</td>
					<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:15px; vertical-align:top; width:355px">
					<p><strong>DEPOSIT FOR CATERING/ ROOMS</strong></p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:30px; width:312px">
					<p>Good Faith Deposit (Signed Contract)</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:30px; width:355px">
					<p>INR 342,990/- 50%of Room and Catering Charges (Non&nbsp; - Refundable) and 50% Security Deposit</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; width:312px">
					<p>02nd Feb, 2020</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; width:355px">
					<p>INR 342,990/- 50% of Room and Catering Charges</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:16px; width:312px">
					<p>Incidentals</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:16px; width:355px">
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
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>Account Number</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>Bank Name</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:19px; vertical-align:bottom; width:282px">
					<p>Account Type</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:19px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:282px">
					<p>IFSC Code</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:282px">
					<p>MICR Code</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>BSR Code</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>Address</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>Branch Code</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:13px; vertical-align:bottom; width:282px">
					<p>Branch Name</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:13px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>Account Name</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:282px">
					<p>Account Number</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:15px; vertical-align:bottom; width:325px">
					<p>&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>

		<p>&nbsp;</p>

		<p><strong>REFUNDS </strong></p>

		<p>As per Reserve Bank of India regulations, refund of&nbsp;any excess deposit for the event can be processed against a recall request by the&nbsp;Organizer&rsquo;s&nbsp;Banker to&nbsp;Hotel&#39;s Bankers. Once authorization is received, the amount required to be refunded&nbsp;will be&nbsp;remitted to the Organizer&rsquo;s Bank Account within <strong>30 / 15 working days</strong>.</p>

		<p>&nbsp;</p>

		<p><strong>CANCELLATION POLICY</strong></p>

		<p>&nbsp;</p>

		<p>The hotel will be holding all the space listed in the contract once the function is confirmed. Should any specified function on any listed date be cancelled, the following cancellation charges will be imposed:</p>

		<p>&nbsp;</p>

		<table cellspacing="0" style="border-collapse:collapse">
			<tbody>
				<tr>
					<td style="background-color:black; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:18px; vertical-align:top; width:301px">
					<p>CANCELLATION PERIOD</p>
					</td>
					<td style="background-color:black; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:18px; vertical-align:top; width:366px">
					<p>ROOM AND CATERING CHARGES</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:top; width:301px">
					<p>Up to 91 days prior to arrival</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:top; width:366px">
					<p>25% of Room and Catering Charges</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:top; width:301px">
					<p>90 to 61 days prior to arrival</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:top; width:366px">
					<p>50% of Room and Catering Charges</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; vertical-align:top; width:301px">
					<p>60 to 31 days prior to arrival</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; vertical-align:top; width:366px">
					<p>75% of Room and Catering Charges</p>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:301px">
					<p>Within 30 days prior to arrival</p>
					</td>
					<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:366px">
					<p>100% of Total Room and Catering Charges</p>
					</td>
				</tr>
			</tbody>
		</table>

		<p>*Total Room Charges = Total Room Nights multiplied by Average Room Rate.</p>

		<p>&nbsp;</p>

		<p><strong>CHANGES, ADDITIONS &amp; MODIFICATIONS</strong></p>

		<p>All changes, additions, deletions, or stipulations by either the Hotel or the organizer will not be considered agreed to, or binding to the other, unless such modification has been initiated or otherwise approved in writing by the other.</p>

		<p>&nbsp;</p>

		<p><strong>PURPOSE OF THE EVENT</strong></p>

		<p>The Purpose of the scheduled event at Hotel is a <strong>Working</strong>. In the event that Organizer decides to change the purpose of the event, the same should be intimated to the Hotel in writing within 72 hours, this time of change in the purpose should not be less than 7 days prior to the date of the event. The Organizer agrees that the Hotel shall reserve the right to terminate or continue with the contract, upon the sole discretion of the Hotel.</p>

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

		<p><strong>SAFETY, FIRE AND SECURITY </strong></p>

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

		<p><strong>RIGHTS OF HOTEL</strong><strong> </strong></p>

		<p>Hotel shall reserve the right to change the halls in the event of unforeseen &amp; unavoidable circumstances. Hotel shall reserve the right to cancel the booking in the event of noncompliance of payments terms payment schedule, or in case of any other breach by the Organizer in the performance and observance of any of the covenants, terms and conditions herein contained in the Agreement and on its part to be observed and performed. In the event of cancellation by Hotel, all the amounts paid by the Organizer shall be refunded by the hotel, without any interest, after deducting dues if any and/or Cancellation Charges under Event Cancellation policy. No damages / compensation / loss of profit of whatsoever in nature shall be payable by HOTEL.</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p><strong>GOVERNING LAW AND JURISDICTIONS</strong></p>

		<p>This agreement shall be governed by and construed in accordance with the substantive law of India without reference to principle of conflict of laws. Subject to the terms and provisions of the Section entitled, &ldquo;Arbitration&rdquo; below, all disputes and claims that arise under or in connection with this agreement shall be subject to the court of competent supervisory jurisdiction in Jaisalmer, Rajasthan, India for trial and determination.</p>

		<p>&nbsp;</p>

		<p><strong>&nbsp;ACCEPTANCE</strong></p>

		<p>By signing and returning this agreement by <strong>11th Jan, 2020 </strong>this agreement will constitute a binding contract between the parties. The individual signing below represent that each is authorized to bind his or her party to this agreement.</p>

		<p>&nbsp;</p>

		<p>In the event a fully-signed copy of this agreement is not received by the date above, all guest rooms and meeting space referred to herein will be released, and neither party will have any further obligations under this agreement.</p>

		<p>&nbsp;</p>

		<p>In the meanwhile, should you have any queries, please feel free contact <strong>YUVRAJ SINGH TANWAR</strong></p>

		<p>&nbsp;</p>
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
		</div>

		<p>Approved and authorized by the following representative of the <strong>Jaisalmer Marriott Resort and Spa:</strong></p>

		<p>&nbsp;</p>

		<p>ame: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotels &nbsp;&nbsp;&nbsp;</p>

		<p>Signature:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="file:///C:/Users/DAYSHI~1/AppData/Local/Temp/msohtmlclip1/01/clip_image003.jpg" style="height:39px; width:77px" /></p>

		<p>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09th Jan, 2020</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		

	</div>
	<script>
  //document.getElementById("myP").contentEditable = true;
  	$(document).ready(function(){
  		var nights;
	  $(document).on('click' , '#genrate-header-row' , function(){
	  	 	nights = prompt("Please enter number of nights:", 7);
	  	 var head = "<tr><th rowspan='2'>Room Type</th>";
	  	 var firstrow = "<tr>"
	  	 for (var i = 1; i <= nights ; i++) {
	  	 	head = head+"<th colspan='2'><input name='day[]' placeholder='Day' class='in-table' type='text'></th>";
	  	 	firstrow = firstrow+"<td colspan='2'><input name='date[]' placeholder='Date' class='in-table' type='text'></td>";
	  	 }
	  	 head = head+"</tr>";
	  	 firstrow = firstrow+"</tr>";
	  	 $('#rooms-table').append(head);
	  	 $('#rooms-table').append(firstrow);
	  	 $(this).hide();
	  	 $("#genrate-row").show();
	  });

	  $(document).on('click' , '#genrate-row' , function(){
	  	 var room_type = "<tr><td colspan="+ nights+1+"><input name='room_type[]' placeholder='Room Type' class='in-table' type='text'></td></tr>";
	  	 var room = "<tr><td><input name='room[]' placeholder='Room' class='in-table' type='text'></td>"
	  	 for (var i = 1; i <= nights ; i++) {
	  	 	room = room+"<td><input name='total_room[]' placeholder='Total Room' class='in-table' type='text'></td><td><input name='price[]' placeholder='Price' class='in-table' type='text'></td>";
	  	 }
	  	 room = room+"</tr>";
	  	 $('#rooms-table').append(room_type);
	  	 $('#rooms-table').append(room);
	  	 $("#genrate-row").show();
	  });

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
		});
	</script>
	<script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
        CKEDITOR.replace( 'editor4' );
        // CKEDITOR.replace( 'editor5' );
        // CKEDITOR.replace( 'editor6' );
        // CKEDITOR.replace( 'editor7' );
</script>
</body>
</html>