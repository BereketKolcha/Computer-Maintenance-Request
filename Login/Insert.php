<?php 
session_start();


$con  = mysqli_connect('localhost','root','','maintenance');

	if (isset($_POST['email']) && isset($_POST['password'])) {
		  function validate($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

		$fname = validate($_POST['fname']);
		$lname = validate($_POST['lname']);
		$email = validate($_POST['email']);
		$phone = validate($_POST['phone']);
		$pass = validate($_POST['password']);
		$sex = validate($_POST['sex']);
		$dep = validate($_POST['department']);
        $letter = "/^[a-zA-Z ]+$/";
		$position = validate($_POST['position']);
		if (strlen($pass) > 7) {
			if(!preg_match($letter,$fname) || !preg_match($letter,$lname)){
              header("Location: create.php?error=User name is not valid");
			  exit();
			}else{

				$sql = "INSERT INTO `user`(`uid`, `fname`, `lname`, `email`, `phone`, `password`, `sex`, `dep`, `position`) VALUES (NULL,'$fname', '$lname', '$email', '$phone', '$pass', '$sex', '$dep', '$position')";
                $query= mysqli_query($con,$sql);
                header("Location: create.php?success=Registered Successfully");
			  exit();
			}

		}	
	 else{
	 	header("Location: create.php?error=password length is lessthan 8");
			  exit();
	 }		

}

else{
		header("Location: create.php");
		exit();
	}
 ?>
