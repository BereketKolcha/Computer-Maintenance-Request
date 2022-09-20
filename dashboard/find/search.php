<?php
include "connection.php";

session_start();

if(isset($_POST["code"]) && isset($_POST["plate"])){

	$code = $_POST["code"];
	$plate = $_POST["plate"];
  $area = $_POST["area"];

   $sql = "SELECT * FROM vehicle WHERE code = '$code' AND plate_no = '$plate' AND office_code = '$area'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
   $row = mysqli_fetch_array($run_query);

   $chassis = $row['chassis_no'];
   $code = $row['code'];
   $plate = $row['plate_no'];
   $region = $row['region'];
   $motor_no = $row['motor_no'];
   $manufacture_comp = $row['manufacture_comp'];
   $vehicle_model = $row['vehicle_model'];
   $manufacture_year = $row['manufacture_year'];
   $seat = $row['seat'];
   $quintal = $row['quintal'];
   $catagory = $row['category'];
   $fuel_type = $row['fuel_type'];
   $motor_size = $row['motor_size'];
   $horse_power = $row['horse_power'];
   $registeration_date = $row['registration_date'];
   $last_inspect_date = $row['last_inspect_date'];
   $vehicle_type = $row['vehicle_type'];
   $vehicle_width = $row['vehicle_width'];
   $number_of_cylinders = $row['number_of_cylinders'];
   $tyre_size = $row['tyre_size'];
   $number_of_tyre = $row['number_of_tyre'];
   $number_of_axles = $row['number_of_axles'];
   $front_axles_load = $row['front_axles_load'];
   $other_axles_load = $row['other_axles_load'];
   $tare_weight = $row['tare_weight'];
   $pay_load = $row['pay_load'];
   $gross_vehicle_weight = $row['gross_vehicle_weight'];
   $office_code = $row['office_code'];
   $vowner_id = $row['owner_id'];
   $vehicle_color = $row['vehicle_color'];



   $sql = "SELECT * FROM owner_info WHERE owner_id = '$vowner_id'";
   $run_query = mysqli_query($con,$sql);
   $count = mysqli_num_rows($run_query);
   $row = mysqli_fetch_array($run_query);

   $uid = $row['user_id'];
   $fname = $row['first_name'];
   $lname = $row['last_name'];
   $region = $row['region'];
   $zone = $row['zone'];
   $city = $row['city'];
   $kebele = $row['kebele'];
   $higher = $row['higher'];
   $house = $row['house_no'];
   $phone = $row['phone_no'];
   $email = $row['email'];
   $date = $row['date'];
	 



   $sql = "SELECT * FROM user WHERE id = '$uid'";
   $run_query = mysqli_query($con,$sql);
   $count = mysqli_num_rows($run_query);
   $row = mysqli_fetch_array($run_query);


   $ufname = $row['fname'];
   $ulname = $row['lname'];	
		
}

if ($_SESSION['logged_in'] == 1) {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Search Vehicle</title>
    <!-- base:css -->

    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
  
  <style>
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
@media only screen and (min-width: 250px) {
      
      .search {margin-left: 50px;margin-top: 70px;}
      #ali{margin-left: 0px;}
      .pad{padding-left: 40px;}
    }
@media only screen and (min-width: 600px) {
       .pad{padding-left: 40px;}
      .search {margin-left: 30px;margin-top: 70px;}
      #ali{margin: center;}
    }
@media only screen and (min-width: 768px) {
      .search {margin-left: 250px;margin-top: 10px;}
    }
  </style>
   </head>
  <body>
    <div class="container-scroller">
            
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
          
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <p style="color: #2487ce;">የኢትዮጵያ መንገድ ትራንስፖርት ባለስልጣን&nbsp;</p>
                <p> | Ethiopian Road Transport Authority</p>
                <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php echo $_SESSION['name']; ?></span>
                    <span class="online-status"></span>
                    <img src="../images/user.png" style="border-radius: 50%;" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item" href="../../Login/logout.php">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>

      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">

              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>

              <li class="nav-item">
                  <a href="../manage/manage.php" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Manage Users</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="../vehicle/vehicle.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Vehicle info</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="search.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Search Vehicle</span>
                </a>
              </li>

              <li class="nav-item">
                  <a href="../cangepass/change-password.php" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Change Password</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
            </ul>
        </div>
      </nav>
    </div>

    <!-- partial -->
      
      <!-- page-body-wrapper ends -->
    </div>
      <!-- container-scroller -->
    <!-- base:js -->
    <script src="../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="../vendors/chart.js/Chart.min.js"></script>
    <script src="../vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="../vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="../vendors/justgage/justgage.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="../js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <link rel="stylesheet" type="text/css" href="mystyle.css">


      <div  class ="header1">
        <br>
    <form method="post" action="search.php">
          <div class="search">
            <input type="search" class="srch" name="code" placeholder="code here.." style="width: 250px;alignment-baseline: center; " required>&nbsp;&nbsp;
            <input type="search"  name="plate" placeholder="plate number here.." style="width: 250px; margin-top: 5px;"required>
            <input type="search"  name="area" placeholder="area code here.." style="width: 250px; margin-top: 5px;"required>
            <input type="submit" value=" " style="width: 60px;">
          </div>
        </form>
      </div><br>
	  <div  class = "row" >
      <div class = "col-2"></div>
         <div class = "col-3 col-s-6 menu" id="ali" style="background-color: white;color: black;padding-left: 40px;">
             <label>REGION: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$region"; ?>" disabled><br>
             <label>ZONE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$zone"; ?>" disabled><br>
             <label>CITY: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$city"; ?>" disabled><br>
             <label>HIGHER: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$higher"; ?>" disabled><br>
             <label>KEBELE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$kebele"; ?>" disabled><br>
             <label>CODE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$code"; ?>" disabled><br>
             <label>PLATE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$plate"; ?>" disabled><br>
             <label>CHASSIS: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$chassis"; ?>" disabled><br>
             <label>OFFICE CODE: </label>
             <input type="text" name="fname" value="<?php echo "$office_code"; ?>" disabled><br>
             <label>FEUL TYPE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$fuel_type"; ?>"disabled><br>
             <label>EMAIL: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$email"; ?>" disabled><br>
             <label>CATAGORY: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$catagory"; ?>" disabled><br>
             <label>REMARK: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "private"; ?>" disabled>
         </div>
      <div  class = "col-3 col-s-6 main" style="background-color: white;color:black;padding-left: 40px; ">
             <label>NUMBER OF SEAT: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$seat"; ?>" disabled><br>
             <label>CARRYING CAPACITY: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$quintal"; ?>" disabled><br>
             <label>MOTOR SIZE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$motor_size"; ?>" disabled><br>
             <label>MANUFACTURE COMPANY: </label>
             <input type="text" name="fname" value="<?php echo "$manufacture_comp"; ?>"disabled><br>
             <label>MODEL OF VEHICLE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$vehicle_model"; ?>" disableddisableddisableddisabled disabled><br>
             <label>MANUFACTURE YEAR: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$manufacture_year"; ?>" disableddisableddisabled disabled><br>
             <label>REGISTERATION DATE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$registeration_date"; ?>" disableddisabled disabled><br>
             <label>LAST INSPECTION: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$last_inspect_date"; ?>" disabled disabled><br>
             <label>HORSE POWER: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$horse_power"; ?>" disabled><br>
             <label>VEHICLE TYPE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$vehicle_type"; ?>" disabled><br>
             <label>VEHICLE COLOR: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$vehicle_color"; ?>" disabled><br>
             <label>NUMBER OF CYLINDERS: </label>&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$number_of_cylinders"; ?>" disabled><br>
             <label>TYRE SIZE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$tyre_size"; ?>" disabled>
		 </div>
		 <div class = "col-3  col-s-12 aside" style="background-color: white;color: black;padding-left: 40px;">
             <label>VEHICLE WIDTH: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$vehicle_width"; ?>" disabled><br>  
             <label>NUMBER OF TYRE: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$number_of_tyre"; ?>" disabled><br>
             <label>NUMBER OF AXLES: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$number_of_axles"; ?>" disabled><br>
             <label>FRONT AXLES LOAD: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$front_axles_load"; ?>" disabled><br>
             <label>OTHER AXLES LOAD: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$other_axles_load"; ?>" disabled><br>
             <label>PAY LOAD: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$pay_load"; ?>" disabled><br>
             <label>TARE WEIGHT: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$tare_weight"; ?>" disabled><br>
             <label>GROSS VEHICLE WEIGHT: </label>
             <input type="text" name="fname" value="<?php echo "$gross_vehicle_weight"; ?>" disabled><br>
             <label>OWNER ID: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$vowner_id"; ?>" disabled><br>
             <label>OWNER NAME: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$fname".' '.'"$lname"'; ?>" disabled ><br>
             <label>HOUSE NUMBER: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$house"; ?>" disabled><br>
             <label>PHONE NUMBER: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$phone"; ?>" disabled><br>
             <label>USER ID: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname" value="<?php echo "$uid"; ?>" disabled>
      </div>
      
      <div class ="footer">
         <h6>&copy; 2022 All Rights Reserved.</h6>
      </div>
   </body>
</html>

<?php } 
else{
  header('location: ../../Login/index.php');
}
?>