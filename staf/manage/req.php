<?php 
include('connection.php');
session_start();

$uid = $_SESSION['cid'];
$dname = $_POST['d_name'];
$sno = $_POST['sno'];
$pro = $_POST['prob'];
$date = date("Y-m-d");
$rdate = "0000-00-00";
$desc = $_POST['textar'];
$status = "init";

$sql = "INSERT INTO `request`(`rid`, `uid`, `device_name`, `problemCS`, `serial`, `registerd_date`, `description`, `recive_date`, `status`) VALUES  (NULL, '$uid', '$dname', '$pro', '$sno', '$date', '$desc', '$rdate', '$status' )";
$query= mysqli_query($con,$sql);

if($query ==true)
{
   header("Location: manage.php?error= Your request is sent Successfully");
   $_SESSION['status'] = "Your request is sent Successfully";
                        exit();
}
else
{
     header("Location: manage.php?error= Your request is NOT sent ");
     $_SESSION['status'] = "Your request is NOT sent";
                        exit();
}
?>