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
@media only screen and (min-width: 450px) {
      
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

            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item nav-search d-none d-lg-block ms-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" size="50" aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>

            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <p style="color: #2487ce;">የኢትዮጵያ መንገድ ትራንስፖርት ባለስልጣን&nbsp;</p>
                <p> | Ethiopian Road Transport Authority</p>
                <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                  Get Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-excel text-primary"></i>
                        Exel
                      </a>
                  </div>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Biruke</span>
                    <span class="online-status"></span>
                    <img src="../images/faces/face28.png" style="border-radius: 50%;" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item">
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
                  <a href="../manage/manage.html" class="nav-link">
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
                <a class="nav-link" href="findvehicle.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Search Vehicle</span>
                </a>
              </li>

              <li class="nav-item">
                  <a href="../manageacc/manageaccount.html" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Manage Account</span>
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
            <input type="search" class="srch" name="code" placeholder="code here.." style="width: 250px;alignment-baseline: center; ">&nbsp;&nbsp;
            <input type="search"  name="plate" placeholder="plate number here.." style="width: 250px; margin-top: 5px;">
            <input type="submit" value=" " style="width: 60px;">
          </div>
        </form>
      </div><br>
    <div  class = "row" >
      <div class = "col-1"></div>
         <div class = "col-3 col-s-6 menu" id="ali" style="background-color: white;color: black;padding-left: 40px;">
             <label>REGdffawadION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: &nbsp;&nbsp;</label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" />
         </div>
     <div  class = "col-4 col-s-6 main" style="background-color: white;color:black;padding-left: 40px; ">
        <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" />
     </div>
     <div class = "col-4  col-s-12 aside" style="background-color: white;color: black;padding-left: 40px;">  
      <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" /><br>
             <label>REGION: </label>
             <input type="text" name="fname" placeholder="ferst name" />
      </div>
      </div>
      <div class ="footer">
         <h6>&copy; 2022 All Rights Reserved.</h6>
      </div>
   </body>
</html>