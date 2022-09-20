<?php 
include('connection.php');
session_start();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$usernam ="{$fname}.{$lname}";
$role = "Technician";
$password = "12345678";

if(strlen($fname) > 2 && strlen($lname) > 2){
    
$sql = "INSERT INTO `officer`(`o_id`, `fname`, `lname`, `username`, `password`, `role`) VALUES (NULL, '$fname', '$lname', '$usernam', '$password', '$role' )";
$query= mysqli_query($con,$sql);

if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 
}
else
{
     $data = array(
        'status'=>'length',
      
    );

    echo json_encode($data);
}
?>