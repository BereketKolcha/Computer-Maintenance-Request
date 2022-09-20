<?php 
include('connection.php');
session_start();

$oid = $_SESSION['cid'];
$rid = $_POST['rid'];
$date = date("Y-m-d");
$desc = $_POST['textar'];
$status = "finished";

$sql = "SELECT uid FROM request WHERE rid='$rid'";
$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);
 $uid = $row['uid'];

 $sql2 = "UPDATE `request` SET `recive_date`='$date',`status`='$status' WHERE rid='$rid' ";
$query= mysqli_query($con,$sql2);
if($query ==true)
{
	
$sql3 = "INSERT INTO `report`(`rep_id`, `rid`, `uid`, `o_id`, `description`) VALUES  (NULL, '$rid', '$uid', '$oid', '$desc')";
$query= mysqli_query($con,$sql3);

if($query ==true)
{
header("Location: manage.php?error= Your report is sent Successfully");
   $_SESSION['status'] = "reported Successfully";
                        exit();
}
else
{
     header("Location: manage.php?error= Your report is NOT sent ");
     $_SESSION['status'] = "Your report is NOT sent";
                        exit();
}
                     exit();
}
?>