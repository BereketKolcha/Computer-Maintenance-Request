<?php 
session_start();

$con  = mysqli_connect('localhost','root','','maintenance');

if (isset($_SESSION['cid']) && isset($_SESSION['user_name'])) {

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: change-password.php?error=Old Password is required");
	  exit();
    }else if($np != $c_np){
      header("Location: change-password.php?error=The confirmation password  does not match");
    exit();
    }else if(strlen($np)<7){
      header("Location: change-password.php?error=Incorrect password length");
	  exit();
    }else {

        $id = $_SESSION['cid'];
        $unam = $_SESSION['user_name'];
        $role = $_SESSION['role'];
                        
                       $sql = "SELECT password
                                            FROM officer WHERE 
                                            o_id='$id' AND password='$op'";
                                    $result = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($result) === 1){
                                        
                                        $sql_2 = "UPDATE officer
                                                  SET password='$np'
                                                  WHERE o_id='$id'";
                                        mysqli_query($con, $sql_2);
                                        $_SESSION['pass'] = "right";

                                        header('Location: ../../Login/index.php');
                                        exit();

                                    }else {
                                        header("Location: change-password.php?error=Incorrect password");
                                        exit();
                                    }

                              

    }
    
}else{
	header("Location: change-password.php?error=please enter correct information");
	exit();
}

}else{
     header("Location: ../index.php");
     exit();
}