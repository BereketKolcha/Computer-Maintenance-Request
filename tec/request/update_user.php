<?php 
include('connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id = $_POST['id'];

$sql = "UPDATE `officer` SET `fname`='$fname',`lname`='$lname' WHERE o_id='$id' ";
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

?>