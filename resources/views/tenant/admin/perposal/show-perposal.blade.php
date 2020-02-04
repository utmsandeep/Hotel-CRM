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
  		.content-holder{
  			margin-top: 20px;
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
			</div>
			
			<div class="col-md-12 content-holder">
				<?= $perposal->payment_packages_other; ?>
			</div>
			
		</div>
	</div>
</body>
</html>