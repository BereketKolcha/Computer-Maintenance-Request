<?php
        session_start();
        if ($_SESSION['logged_in'] == 1) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Report</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
			<div class="card mt-4">
			    <div class="card-body">
			    	<a href="../index.php"><button type="button" class="btn btn-secondary">back</button></a>
                	<?php 
                 $con  = mysqli_connect('localhost','root','','maintenance');

			        $id = $_SESSION['cid'];

	$sql2 = "SELECT fname FROM user WHERE uid='$id'";
	$query2 = mysqli_query($con,$sql2);
	$count_rows2 = mysqli_num_rows($query2);
	$row2 = mysqli_fetch_assoc($query2);
	$fname = $row2['fname'];

	$sql1 = "SELECT * FROM request WHERE uid='$id'";
	$query1 = mysqli_query($con,$sql1);
	$count_rows1 = mysqli_num_rows($query1);
	$row1 = mysqli_fetch_assoc($query1);
	$rid = $row1['rid'];
	$dname = $row1['device_name'];
	$prob = $row1['problemCS'];
	$serial = $row1['serial'];
	$date = $row1['registerd_date'];
	$recive = $row1['recive_date'];
	$status = $row1['status'];
if ($status == "init") {?>    

<p>Dear <?php echo $fname ?> : your device is in progress initate to technitian if ther is device we maintain and contact you soon.</p>
	<?php 
	
}elseif ($status == "sent") { ?>
<p>Dear <?php echo $fname ?> : your device is in progress sent to technitian if ther is device we maintain and contact you soon. Thank you.</p>


  <?php 
	
}elseif ($status == "disprove") { ?>
<p>Dear <?php echo $fname ?> : your device is in progress but in the shortage of maintenance material we can not help your pleace come and take your device Thank you.</p>


  <?php 
	
}elseif ($status == "finished") {?>
	<a href="user.php"><button type="button" class="btn btn-primary">Download PDF</button></a>
<div style="padding-left: 50px; padding-right: 50px;">
<h4>Dear <?php echo $fname ?> : Your device is successfully maintained so please check information below and compleate your payment in belowe accout so,</h4>
<div style="padding-right: 60px; padding-left: 60px;">
<p> request id is : <?php echo $row1['rid']; ?> </p>
<p> device name is : <?php echo $row1['device_name']; ?> </p>
<p> problem in : <?php echo $row1['problemCS']; ?> </p>
<p> serial number is : <?php echo $row1['serial']; ?> </p>
<p> registeration date is : <?php echo $row1['registerd_date']; ?> </p>
<p> finished date is : <?php echo $row1['recive_date']; ?> </p>
<p> our account is <b>1351331188134354</b> CBE </p></div>
<p> please print this page and pay online come with transaction reference number thank you </p></div>
    <?php 
}
  

  ?>
			            
			    </div>
			</div>

			</div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php } 
else{
    header('location: ../../Login/index.php');
}
?>