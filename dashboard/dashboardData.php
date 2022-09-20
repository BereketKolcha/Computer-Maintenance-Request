<?php 

	include('../Login/validate/connection.php');

	$sql = "SELECT count(*) as total from user";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);

		$_SESSION['user'] = $row['total'];
		
	}

	$sql2 = "SELECT count(*) as total from officer";
	$result2 = mysqli_query($con, $sql2);

	if (mysqli_num_rows($result2) == 1) {
		$row2 = mysqli_fetch_assoc($result2);

		$_SESSION['officer'] = $row2['total'];
		
	}


 ?>