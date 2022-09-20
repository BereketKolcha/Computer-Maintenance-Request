<!DOCTYPE html>
<html lang="en">
<head>
	<title>CMR create account</title>
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
        
</head>
<body>
	       


	<div class="limiter">

		<div class="container-login100">

			<!-- <div class="wrap-login100"> -->
				<!-- <div class="login100-pic js-tilt" data-tilt>
					<img src="images/img01.png" alt="IMG"><p></p><p></p>
					<p>Manula is exactly what we've been looking for for years. We needed a platform with a focus on user facing documentation with multi-language support.
                    A bonus is that users can get a printed copy and authoring is easy with a straightforward dialect of Markdown.The Manula team's response to our feature requests was astonishing quick.</p>
				</div> -->
				<form action="Insert.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Create Account
					</span>
                 
					<div class="wrap-input100 validate-input" data-validate = "Valid fname is required">
						<input class="input100" type="text" name="fname" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid lname is required">
						<input class="input100" type="text" name="lname" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "phone is required">
						<input class="input100" type="number" name="phone" placeholder="Phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "select sex is required">
						<select class="input100" name="sex" ><option>Select Sex</option>
                                <option>Male</option>
                                <option>Female</option>
                        </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-transgender" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "select department is required">
						<select class="input100" name="department"><option>Select Department</option>
                                <option>Economics</option>
                                <option>Management</option>
                                <option>Accounting</option>
                                <option>Computer Sc</option>
                        </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-university" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "select position is required">
						<select class="input100" name="position"><option>Select Your Position</option>
                                <option>Staff</option>
                                <option>Student</option>
                        </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-tasks" aria-hidden="true"></i>
						</span>
					</div>

					<?php if (isset($_GET['error'])) { ?>
						<div class="wrap-input100">
			     			<p class="error" style="color: red;"><?php echo $_GET['error']; ?></p>
							<a style="background-color: #B0C4DE; border-radius: 15px; text-decoration-line: none;padding-top: 5px; padding-bottom: 5px; padding-left: 15px;padding-right: 15px;" href="index.php">back to login</a>
			     		</div>
			     	<?php } ?>
			     	<?php if (isset($_GET['success'])) { ?>
						<div class="wrap-input100">
			     			<p class="success" style="color: green;"><?php echo $_GET['success']; ?></p>
							<a style="background-color: #00CED1; border-radius: 15px; text-decoration-line: none;padding-top: 5px; padding-bottom: 5px; padding-left: 15px;padding-right: 15px;" href="index.php">back to login</a>
			     		</div>
			     	<?php } ?>
					
					<div class="container-login100-form-btn">

						<button name="submit" value="submit" class="login100-form-btn">
							Create Account
						</button>

					</div>

				</form>
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