<!DOCTYPE html>
<html lang="en">
<head>
	<title>CMR Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logos.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--===============================================================================================-->
              <!-- <script type="text/javascript">
              	function prventBack(){window.history.forward();}
              	setTimeout("prventBack()",0);
              	window.onunload=function(){null};
              </script> -->
</head>
<body>
	          


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img01.png" alt="IMG">
				</div>

				<form action="validate/checker.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						You can login here
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username" placeholder="Email or Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<?php if (isset($_GET['error'])) { ?>
						<div class="wrap-input100">
			     			<p class="error" style="color: red;"><?php echo $_GET['error']; ?></p>
			     		</div>
			     	<?php } ?>
					
					<div class="container-login100-form-btn">
						<button name="submit" value="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-50">
						<p>make sure you have login credientials to the system. if not</p>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Here is 
						</span>
						<a class="txt2" style="font-size: 17px;" name="check-email" href="create.php">
							Create Account
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- <script type="text/javascript">
		function clickMe(){
			swal("Good job!", "You have successfully logged in!", "success");
		}
	</script> -->
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>