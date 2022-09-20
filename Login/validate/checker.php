<?php 
session_start();


$con  = mysqli_connect('localhost','root','','maintenance');

	if (isset($_POST['username']) && isset($_POST['password'])) {

	    function validate($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

		$uname = validate($_POST['username']);
		$pass = validate($_POST['password']);
        $defpa = "12345678";
       if (!filter_var($uname, FILTER_VALIDATE_EMAIL)) 
			{
             //Username
                $sql = "SELECT * FROM `officer` WHERE username = '$uname' AND password = '$pass'";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) == 1) {
					$row = mysqli_fetch_assoc($result);
					if ($row['username'] == $uname && $row['password'] == $pass) {
						if ($row['password'] == $defpa) {
							$_SESSION['user_name'] = $row['username'];
							$_SESSION['cid'] = $row['o_id'];
	          				$_SESSION['fname'] = $row['fname'];
	          				$_SESSION['role'] = $row['role'];
							header("Location: change-password.php");
							exit();
						}

						else{
							$_SESSION['fname'] = $row['fname'];
							$_SESSION['lname'] = $row['lname'];
							$_SESSION['user_name'] = $row['username'];
							$_SESSION['cid'] = $row['o_id'];
	          				$_SESSION['role'] = $row['role'];
							$_SESSION['logged_in'] = '1';
							$_SESSION['pass'] = "left";
							if ($row['role'] == "admin") {
								header('Location: ../../dashboard/index.php');
								exit();
							}else{
								header('Location: ../../tec/index.php');
								exit();
							}

								
						}
					}else{
						header("Location: ../index.php?error= Incorrect username or password");
						exit();
					}

			}else{
						header("Location: ../index.php?error= Incorrect username or password");
						exit();
					}
		}
        
        else {
          	//Email
            $sql = "SELECT * FROM `user` WHERE email = '$uname' AND password = '$pass'";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) == 1) {
					$row = mysqli_fetch_assoc($result);
					if ($row['email'] == $uname && $row['password'] == $pass) {
						    $_SESSION['fname'] = $row['fname'];
							$_SESSION['lname'] = $row['lname'];
							$_SESSION['user_name'] = $row['email'];
							$_SESSION['cid'] = $row['uid'];
							$_SESSION['logged_in'] = '1';
							$_SESSION['pass'] = "left";
							header('Location: ../../staf/index.php');
								exit();
								}else{
						header("Location: ../index.php?error= Incorrect email or password");
						exit();
					}

			}else{
						header("Location: ../index.php?error= Incorrect email or password");
						exit();
					}
          }
			
   }
			


// 		if (strlen($pass) > 7) {

		





// 		if (empty($uname)) {
// 			header("Location: ../index.php?error=User name is required");
// 			exit();
			
// 		}elseif (empty($pass)) {
// 			header("Location: ../index.php?error=Password is required");
// 			exit();
// 		}
// 		else{

//      		$newString = '';

//          foreach (str_split($pass) as $character) {
//              $newString .= chr(ord($character) + 4);
//          }

//         foreach (str_split($uname) as $character) {
//             $newString .= chr(ord($character) + 4);
//         }
// 			  $pa = $newString;

// 			  $def = '';
// 			  $passdef = "00000000";

//          foreach (str_split($passdef) as $character) {
//              $def .= chr(ord($character) + 4);
//          }

//         foreach (str_split($uname) as $character) {
//             $def .= chr(ord($character) + 4);
//         }

// 			$defpa = $def;


//             if($role == "etmsz"){
// 				$sql = "SELECT * FROM zonal WHERE username = '$uname' AND password = '$pa'";
// 				$result = mysqli_query($con, $sql);
// 				if (mysqli_num_rows($result) == 1) {
// 					$row = mysqli_fetch_assoc($result);
// 					if ($row['username'] == $uname && $row['password'] == $pa) {
// 						if ($row['password'] == $defpa) {
// 							$_SESSION['user_name'] = $row['username'];
// 							$_SESSION['cid'] = $row['id'];
// 	          				$_SESSION['region'] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 							header("Location: change-password.php");
// 							exit();
// 						}

// 						else{
// 							$_SESSION['name'] = $row['fname'];
// 							$_SESSION['lname'] = $row['lname'];
// 							$_SESSION['user_name'] = $row['username'];
// 							$_SESSION['cid'] = $row['id'];
// 	          				$_SESSION['region'] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 							$_SESSION['logged_in'] = '1';
// 							$_SESSION['pass'] = "left";

// 								header('Location: ../../dashboard/index.php');
// 								exit();
// 						}
// 					}
// 					else{
// 						header("Location: ../index.php?error= Incorrect username or password");
// 						exit();				
// 					}
// 				}else{
// 					header("Location: ../index.php?error=Incorrect username or password");
// 					exit();
// 				}
// 			}
// 				else{
// 					$sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pa'";
// 				$result = mysqli_query($con, $sql);
// 				if (mysqli_num_rows($result) == 1) {
// 					$row = mysqli_fetch_assoc($result);
// 					if ($row['username'] == $uname && $row['password'] == $pa) {


// 						if ($row['role'] == "TCU Officer") {
// 							if ($row['password'] == $defpa) {
// 							$_SESSION['user_name'] = $row['username'];
// 							$_SESSION['cid'] = $row['id'];
// 							$_SESSION["region"] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 	          				$_SESSION['role'] = $row['role'];
// 							header("Location: change-password.php");
// 							exit();
// 						}

// 						else{
// 							$_SESSION['name'] = $row['fname'];
// 							$_SESSION['lname'] = $row['lname'];
// 							$_SESSION['cid'] = $row['id'];
// 							$_SESSION['user_name'] = $row['username'];
// 							$_SESSION["region"] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 	          				$_SESSION['role'] = $row['role'];
// 							$_SESSION['logged_in'] = '1';
// 							$_SESSION['pass'] = "left";

// 								header('Location: ../../TCU/index.php');
// 								exit();
// 						}
// 						}
// 						else if($row['role'] == "Branch Officer"){
//                           if ($row['password'] == $defpa) {
// 							$_SESSION['user_name'] = $row['username'];
// 							$_SESSION['cid'] = $row['id'];
// 							$_SESSION["region"] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 	          				$_SESSION['role'] = $row['role'];
// 							header("Location: change-password.php");
// 							exit();
// 						}

// 						else{
// 							$_SESSION['name'] = $row['fname'];
// 							$_SESSION['lname'] = $row['lname'];
// 							$_SESSION['cid'] = $row['id'];
// 							$_SESSION["region"] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 	          				$_SESSION['role'] = $row['role'];
// 							$_SESSION['logged_in'] = '1';
// 							$_SESSION['pass'] = "left";

// 								header('Location: ../../Branch/index.php');
// 								exit();
// 						}
// 						}
// 						else if($row['role'] == "Traffic Police"){
//                           if ($row['password'] == $defpa) {
// 							$_SESSION['user_name'] = $row['username'];
// 							$_SESSION['cid'] = $row['id'];
// 							$_SESSION["region"] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 	          				$_SESSION['role'] = $row['role'];
// 							header("Location: change-password.php");
// 							exit();
// 						}

// 						else{
// 							$_SESSION['name'] = $row['fname'];
// 							$_SESSION['lname'] = $row['lname'];
// 							$_SESSION['cid'] = $row['id'];
// 							$_SESSION["region"] = $row['region'];
// 	          				$_SESSION['zone'] = $row['zone'];
// 	          				$_SESSION['role'] = $row['role'];
// 							$_SESSION['logged_in'] = '1';
// 							$_SESSION['pass'] = "left";

// 								header('Location: ../../Traffic/index.php');
// 								exit();
// 						}
// 						}
						
// 					}
// 					else{
// 						header("Location: ../index.php?error= Incorrect username1 or password1");
// 						exit();				
// 					}
// 				}else{
// 					header("Location: ../index.php?error=Incorrect usernamesssssss or password");
// 					exit();
// 				}
// 				}
// 		}
// 	}else{
// 		header("Location: ../index.php");
// 		exit();
// 	}
// 	} else {
// 	    header("Location: ../index.php?error= Please complete reCaptha first!");
//   	    exit();
// 	  }
// }
// else{
// 		header("Location: ../index.php");
// 		exit();
// 	}
//  
?>
