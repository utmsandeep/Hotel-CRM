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
       
		        <form method="post" enctype="multipart/form-data" action="{{ route('tenant.admin.showPerposalTemplate.store' , ['lead_id'=>$lead->id]) }}">
		            @csrf
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;GREETING</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor1" name="greeting">
		                            	<p><strong>Mr XXXX Singh</strong></p>

										<p><strong>YRF xxxxxxxxxxxxxx. PVT LTD</strong></p>

										<p><strong>G-1 A, AHINSA CIRCLE, ASHOK MARG,</strong></p>

										<p><strong>C-Scheme,</strong></p>

										<p><strong>Jaipur, Rajasthan India</strong></p>

										<p><strong>91 xxxxxxxxxx</strong></p>

										<p>&nbsp;</p>

										<p><strong>Dear Mr. Sngh,</strong></p>

										<p>&nbsp;</p>

										<p><strong>Greetings from the Jaisalmer xxxxx Resort and Spa! (hotel name)</strong></p>

										<p>&nbsp;</p>

										<p>We would like to thank you for your enquiry and for your interest in (Hotel Name)</p>

										<p>Jaisalmer Marriott Resort and Spa is engrained with the cultural legacy of the Golden City complemented by inviting spaces that exemplify refined grace and private service. It is strategically located close to the heart of the city. Our hotel offers perfect accommodation for leisure as well as business travelers.</p>

										<p>This Contemporary Palace hotel has 135 spacious rooms including 09 suites, catering to the MICE and leisure traveler. Our hotel is a perfect destination where work and pleasure blend seamlessly into each other.</p>

										<p>We are pleased to enclose an offer tailored especially for you, one that will completely fulfill all your needs and requirements</p>

										<p>Should you have any further clarifications on the same, we are happy to help you.</p>

										<p>&nbsp;</p>

										<p>We will keep this offer reserved for you untill&nbsp;<strong>11th Jan, 2020</strong></p>

										<p>&nbsp;</p>

										<p>Thank you for trusting us to give us an opportunity to organize an event for<strong>&nbsp;</strong><strong>Mr Sanjay Shivalkar</strong></p>

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

		                            <textarea rows="25" id="editor3" name="guest_room_commitment">
		                            	<p><strong>GUEST ROOM COMMITMENT</strong></p>
		                        		&nbsp;
		                            	<p>The Hotel agrees that it will provide below listed rooms per night and following group rates for listed nights to the <strong>Mr</strong><strong> Sanjay Shivalkar/ YRF xxxxx PVT LTD.</strong> to be utilized as follows:</p>
		                            </textarea>
		                        </div>
		                    </div>
		                    <br>
		                    <table  cellspacing="0" style="">
								<tbody id="rooms-table">
								</tbody>
							</table>
							<a class="btn btn-info"  id="genrate-header-row">Redraw Table</a>
							<a class="btn btn-info"  id="genrate-row">Insert Row</a>
							<!-- <input type="number" name="nights" placeholder="Number of nights" value="5"> -->
						<!-- 	<input type="number" name="room_types" placeholder="Total Room Types" value="2">  -->
							<!-- <a class="btn btn-info"  id="">ReDraw Hotel Table</a> -->
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;PACKAGES AND OTHER</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor4" name="payment_packages_other">{{ $template->payment_packages_other	 }}</textarea>
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
		                            <textarea rows="25" id="editor7" name="damage_payment">{{ $template->damage_payment }}</textarea>
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
		                            <textarea rows="25" id="editor8" name="deposite">{{ $template->deposite }}</textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;REFUNDS AND CANCELLATION POLICY</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor9" name="refunds_cancellation">{{ $template->refunds_cancellation }}</textarea>
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
		                            <textarea rows="25" id="editor10" name="changes_acceptance">{{ $template->changes_acceptance }}</textarea>
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
		                            <textarea rows="25" id="editor11" name="bottom_signature">{{ $template->bottom_signature }}</textarea>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="text-center">
		            	<input type="submit" value="Submit" class="btn btn-success btn-lg">
		            </div>
		        </form>
    		</div>
		</div>

		<!-- <form action="{{ route('tenant.admin.showPerposalTemplate.store' , ['lead_id'=>$lead->id]) }}" method="post">
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
  	$(document).ready(function(){
  		var nights=2 , room_types;

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
	  	//rowspan='2'
	  	 //var head = "<tr><th>Room Type</th>";
	  	 //var firstrow = "<tr>"
	  	 var firstrow = '<tr><th>Room Type</th>';
	  	 for (var i = 1; i <= nights ; i++) {
	  	 	//head = head+"<th colspan='2'><input name='day[]' placeholder='Day' class='in-table' type='text'></th>";
	  	 	firstrow = firstrow+"<th colspan='2'><input name='date[]' placeholder='Date' class='in-table' type='text'></th>";
	  	 }
	  	 //head = head+"</tr>";
	  	 firstrow = firstrow+"</tr>";

	  	 //$('#rooms-table').html(head);
	  	 //$('#rooms-table').append(firstrow);
	  	  $('#rooms-table').html(firstrow);
	  	 $(this).hide();
	  	 $("#genrate-row").show();
	  }

	  function generateRow(){
	  	var room_type = "<tr><td colspan="+ nights+1+"><input name='room_type[]' placeholder='Room Type' class='in-table' type='text'></td></tr>";
	  	 var room = "<tr><td><input name='room[]' placeholder='Room' class='in-table' type='text'></td>"
	  	 for (var i = 1; i <= nights ; i++) {
	  	 	room = room+"<td><input name='total_room[]' placeholder='Total Room' class='in-table' type='text'></td><td><input name='price[]' placeholder='Price' class='in-table' type='text'></td>";
	  	 }
	  	 room = room+"</tr>";
	  	 $('#rooms-table').append(room_type);
	  	 $('#rooms-table').append(room);
	  	 $("#genrate-row").show();
	  }
	  genrateTable();
	  generateRow();
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