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
       
		        <form method="post" enctype="multipart/form-data" action="{{ route('tenant.admin.showPerposalTemplate.store') }}">
		            @csrf
		            <div class="header">
		                <h3 class="heading"><strong><i class="fa fa-plus"></i>&nbsp;GREETING</strong></h3>
		            </div>
		            <div class="row clearfix content-section">
		                <div class="col-lg-12 col-md-12 col-sm-12">
		                    <div class="card">
		                        <div class="body">
		                            <textarea rows="25" id="editor1" name="greeting">
		                            	{{ $template->greeting }}
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

		<!-- <form action="{{ route('tenant.admin.showPerposalTemplate.store') }}" method="post">
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