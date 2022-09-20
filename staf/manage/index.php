<?php include('connection.php'); 
session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <title>cm</title>
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div style="padding-left: 20%;padding-right: 20%;" class="container-fluid">
          
            
            
            <!-- /Billing Details -->
            
                <form method="post" action="req.php">
                  <div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Fill out Request Form</h2>
                                        <?php if (isset($_SESSION['status'])) {
                                        $a = $_SESSION['status']; ?>
                                        <p style="color: green;"><?php echo $a; ?></p>
                                    
                                   <?php unset($_SESSION['status']);
                                 } ?>
                                    </div>
                                    
                                    <div class="form-group ">
                                    
                                        <input style="width: 50%;" class="input form-control input-borders" type="text" name="d_name" id="d_name" placeholder="Device Name" required="">
                                    </div>
                                    <div class="form-group">
                                    
                                        <input style="width: 50%;" class="input form-control input-borders" type="text" name="sno" id="sno" placeholder="Serial number" required="">
                                    </div>

                                    <div class="form-group">
                                            <select style="width: 50%; color: gray;" class="input form-control input-borders" name="prob" id="prob" >
                                            <option >Please select problem type</option>
                                              <option value="software">Software</option>
                                              <option value="hardware">Hardware</option>
                                              <option value="no">I am not figure out</option>
                                            </select >
                                    </div>
                                    <div class="form-group">
                                      <textarea style="height: 200px;" name="textar" class="input form-control input-borders" placeholder="Comment" id="txta"></textarea>
                                    </div>
                                    
                                    <div style="form-group">
                                       <input style="background-color: #008CBA; 
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
  font-size: 16px;"  value="Send Request" type="submit" name="signup_button">
                                    </div>
                                    
                           </div>     
                </form>
                              
            
          </div>
          <p></p>
              
</body>

</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>