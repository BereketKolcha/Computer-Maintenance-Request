<?php
		session_start();
		include "quotes.php";

		include "dashboardData.php";

		if ($_SESSION['logged_in'] == 1) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<script language="javascript" type="text/javascript">window.history.forward();</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zonal Manager Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
  <body>

    <div class="container-scroller">
				
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">

            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <p style="color: #2487ce;">ኮምፒውተር ጥገና&nbsp;</p>
                <p> | COMPUTER MAINTENANCE</p>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                
                <!-- <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                  Get Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a class="dropdown-item" href="report/index.php">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                  </div>
                </li> -->
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php echo $_SESSION['fname']; ?></span>
                    <span class="online-status"></span>
                    <img src="images/user.png" style="border-radius: 50%;" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a href="../Login/logout.php" class="dropdown-item">
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
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                  <a href="manage/manage.php" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Manage Technician</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="request/request.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Request</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="reports/report.php" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Report</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="cangepass/change-password.php" class="nav-link">
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
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">

					<div class="row mt-4">
						<div class="col-lg-8 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-5">
											<h4 class="card-title">Welcome back</h4>
											<h1 style="font-size: 100px; margin-top: -5%;"><?php echo $_SESSION['fname']; ?></h1>
											<canvas id="salesDifference"></canvas>
										</div>
										<div class="col-lg-7">
											<h4 class="card-title">Registered Device</h4>
											<div class="row">
												<div class="col-sm-12">
													<div class="progress progress-lg grouped mb-2">
														<div class="progress-bar  bg-danger" role="progressbar" style="width: <?php echo $percent1; ?>%" aria-valuenow="<?php echo $_SESSION['counts1']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
														<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent2; ?>%" aria-valuenow="<?php echo $_SESSION['counts2']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
														<div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $percent3; ?>%" aria-valuenow="<?php echo $_SESSION['counts3']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
														<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percent4; ?>%" aria-valuenow="<?php echo $_SESSION['counts4']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
														<div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $percent5; ?>%" aria-valuenow="<?php echo $_SESSION['counts5']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-sm-4">
													<ul class="graphl-legend-rectangle">
														<li><span class="bg-danger"></span>laptop</li>
														<li><span class="bg-info"></span>desktop</li>
														<li><span class="bg-success"></span>printer</li>
                            <li><span class="bg-primary"></span>phone</li>
                            <li><span class="bg-warning"></span>tablet</li>
													</ul>
												</div>
												<div class="col-sm-8 grid-margin">
													<canvas id="bestSellers"></canvas>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="row">

										<div class="col-lg-8">
											<h1 class="text-dark font-weight-bold" id="name"></h1>
											<p class="text-dark dates"></p>
											<div class="d-lg-flex align-items-baseline">
												<h1 class="text-dark font-weight-bold temp"></h1>
											</div>
											<p class="text-dark desc"></p>
										</div>

										<div class="col-lg-4">
											<div class="position-relative">
												<div class="live-info badge badge-success">Live</div>
											</div>
										</div>

									</div>
									
								</div>
							</div>
						</div>
					</div>

				<!-- 	<div class="row">
					<div class="col-sm-12 flex-column d-flex stretch-card"> -->

				<footer class="footer">
		          <div class="footer-wrap">
		            <div class="d-sm-flex justify-content-center justify-content-sm-between">
		              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="http://www.motr.gov.et" target="_blank"> Computer Maintenance </a> </span>
		              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Powered by <a href="http://www.wcu.edu.et" target="_blank"> Wolaita sodo University </a> </span>
		             </div>
		           </div>
		        </footer>
			
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>

    <script type="text/javascript">
    	var desc = document.querySelector('.desc');
			var cname = document.querySelector('#name');
			var temp = document.querySelector('.temp');
			var cdate = document.querySelector('.dates');
			var inputValue = "Sodo";

			var objToday = new Date(),
			weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
			dayOfWeek = weekday[objToday.getDay()],
			domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
			months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
			curMonth = months[objToday.getMonth()],
			curYear = objToday.getFullYear(),
			curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
			curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
			curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
			var today = curHour + ":" + curMinute + " " + curMeridiem + " " + dayOfWeek + " " + curMonth + ", " + curYear;

			window.onload = function weather(){
				fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputValue+'&units=metric&appid=757b80ecf4d7e676eb0423f2df322825')
					.then(response => response.json())
					.then(data => {
						var tempValue = data['main']['temp'];
						var nameValue = data['name'];
						var descValue = data['weather'][0]['description'];

						temp.innerHTML = tempValue+"&#176 Celsius";
						cname.innerHTML = nameValue;
						desc.innerHTML = descValue;
						cdate.innerHTML = today;
					})

			//.catch(err => alert("Wrong city name!"))
			};

    </script>

    <!-- <script src="app.js"></script> -->

    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- <script src="vendors/chart.js/Chart.min.js"></script> -->
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
		<script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->

	  <script src="js/sweetalert.js"></script>

		<?php 
		  if (isset($_SESSION['pass']) && $_SESSION['pass'] == 'right') { ?>
		    <script type="text/javascript">
		      swal({
		        title: "Password Changed Successfully!",
		        text: "thanks for your time,you won't be bothered anymore.",
		        icon: "success",
		        button: "Aww yiss!",
		      });
		    </script>
		 <?php unset($_SESSION['status']);  }
		 ?>

</body>
</html>

<?php } 
else{
	header('location: ../Login/index.php');
}
?>