<?php
include "connection.php";

if(isset($_POST["code"]) && isset($_POST["plate"])){

	$code = $_POST["code"];
	$plate = $_POST["plate"];

	$sql = "SELECT * FROM vehicle WHERE code = '$code' AND plate_no = '$plate'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);

    $region = $row['region'];$cod = $row['code'];
    $plat = $row['plate_no'];$chas = $row['chassis_Number'];
    $motno = $row['motor_Number'];$manufact = $row['Munfct_Comp'];
    $vmode = $row['vehicle_Mode'];$manyear = $row['mnfct_Year'];
    $vtype = $row['vehicle_Type'];$seat = $row['seat'];
    $carry = $row['carrying_capacity'];$catago = $row['catagory'];
    $feul = $row['fuel_Type'];$msize = $row['motor_Size'];
    $horse = $row['horse_Power'];$reg = $row['regster_Date'];
    $inspect = $row['last_inspec_year'];$address = $row['address'];
    $remark = $row['remark'];$zone = $row['zone'];
    $user = $row['user_id'];$owner = $row['owner_id'];
		
		
}

?>
<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>search vehicle</title>
	  <link rel="stylesheet" type="text/css" href="mystyle.css">
	  <style>
	  	html{
		
		background-color: white;
		   }
		input[type="text"]
		{
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    outline: none;
    border-bottom: 1px solid #aaa;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.5s ease;
		}
	input[type="search"] {
    outline: none; 
    border: 2px solid #eee;
    border-radius: 15px;
    width: 30%;
    padding: 14px 10px;
    color: #848484;
    font-size: 16px;
}
  input[type="submit"]{
    background: url(search.png) no-repeat 4px 0px #848484;
    width: 30%;
    height: 50px;
    border: none;
    border-radius: 5px;
    padding: 0;
    border:none;
    outline:none;
}
	</style>
   </head>
   <body>
      <div  class ="header1">
        <div > 
			   <ul class ="horizontal"> 
				   <li><a href = "#"> <h1>M</h1> </a></li>
				   <li><a href = "#"> <h1>E </h1></a></li>
				   <li><a href = "#"> <h1>N</h1> </a></li>
				   <li><a href = "#"> <h1>U</h1></a></li>
				   <li><a href = "#"><h1>S</h1></a></li>
				</ul>
		</div><br>
		<form method="post" action="search.php">
					<div class="search">
						<input type="search" class="srch" name="code" value="<?php echo "$cod"; ?>" style="width: 250px;alignment-baseline: center;">&nbsp;&nbsp;
						<input type="search"  name="plate" value="<?php echo "$plat"; ?>" style="width: 250px;">
						<input type="submit" value=" " style="width: 60px;">
					</div>
					<div class="sear-sub">
						
					</div>
					<div class="clearfix"></div>
				</form>
      </div><br>
	  <div  class = "row">
         <div class = "col-4 col-s-6 menu" style="background-color: white;padding-left: 50px;">
             <label>REGION: </label>
             <input type="text" name="fname" value="<?php echo "$region"; ?>" /><br>
             <label>CODE: &nbsp;&nbsp;</label>
             <input type="text" name="fname" value="<?php echo "$cod"; ?>" /><br>
             <label>PLATE NUMBER: </label>
             <input type="text" name="fname" value="<?php echo "$plat"; ?>" /><br>
             <label>CHASSIS NUMBER: </label>
             <input type="text" name="fname" value="<?php echo "$chas"; ?>" /><br>
             <label>MOTOR NUMBER: </label>
             <input type="text" name="fname" value="<?php echo "$motno"; ?>"/><br>
             <label>MANUFACTURE: </label>
             <input type="text" name="fname" value="<?php echo "$manufact"; ?>" /><br>
             <label>VEHICLE MODE: </label>
             <input type="text" name="fname" value="<?php echo "$vmode"; ?>" /><br>
             <label>MANUFACT YEAR: </label>
             <input type="text" name="fname" value="<?php echo "$manyear"; ?>" /><br>
             <label>VEHICLE TYPE: </label>
             <input type="text" name="fname" value="<?php echo "$vtype"; ?>" />
         </div>
		 <div  class = "col-4 col-s-6 main" style="background-color: white;">
		    <label>NUMBER OF SEAT: </label>
             <input type="text" name="fname" value="<?php echo "$seat"; ?>" /><br>
             <label>CARRYING CAPACITY: </label>
             <input type="text" name="fname" value="<?php echo "$carry"; ?>" /><br>
             <label>CATAGORY: </label>
             <input type="text" name="fname" value="<?php echo "$catago"; ?>" /><br>
             <label>FEUL TYPE: </label>
             <input type="text" name="fname" value="<?php echo "$feul"; ?>"/><br>
             <label>MOTOR SIZE: </label>
             <input type="text" name="fname" value="<?php echo "$msize"; ?>" /><br>
             <label>HORSE POWER: </label>
             <input type="text" name="fname" value="<?php echo "$horse"; ?>" /><br>
             <label>REGISTERATION DATE: </label>
             <input type="text" name="fname" value="<?php echo "$reg"; ?>" /><br>
             <label>LAST INSPECTION: </label>
             <input type="text" name="fname" value="<?php echo "$inspect"; ?>" /><br>
             <label>ADDRESS: </label>
             <input type="text" name="fname" value="<?php echo "$address"; ?>" />
		 </div>
		 <div class = "col-4  col-s-12 aside" style="background-color: white;box-shadow: none;">  
		 	<label>REMARK: </label>
             <input type="text" name="fname" value="<?php echo "$remark"; ?>" /><br>
             <label>ZONE: </label>
             <input type="text" name="fname" value="<?php echo "$zone"; ?>" /><br>
             <label>USER ID: </label>
             <input type="text" name="fname" value="<?php echo "$user"; ?>" /><br>
             <label>OWNER ID: </label>
             <input type="text" name="fname" value="<?php echo "$owner"; ?>" /><br>
             <label>SERIAL NUM: </label>
             <input type="text" name="fname" value="<?php echo "serial number"; ?>" /><br>
             <label>ZONE CODE: </label>
             <input type="text" name="fname" value="<?php echo "zone code"; ?>" /><br>
             <label>OWNER NAME: </label>
             <input type="text" name="fname" value="<?php echo "owner name"; ?>" /><br>
             <label>HOUSE NUMBER: </label>
             <input type="text" name="fname" value="<?php echo "house number"; ?>" /><br>
             <label>EMAIL: </label>
             <input type="text" name="fname" value="<?php echo "email"; ?>" />
      </div>
      
      <div class ="footer">
         <h6>&copy; 2022 All Rights Reserved.</h6>
      </div>
   </body>
</html>