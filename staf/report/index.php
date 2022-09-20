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
    <title>Report Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
    select{
        width: 200px;
        border:1px solid #d7d7d7;
        padding:5px;
        border-radius:2px;
    }
    select:hover{
        background:#cde4f7;
        border:1px solid #41c9ff;
    }

    select:focus {
            -webkit-box-shadow: 0 0 3px 1px #7cdaff;
            -moz-box-shadow: 0 0 3px 1px #7cdaff;
            box-shadow: 0 0 3px 1px #7cdaff;
        }
        select:before{
            content: "▼";
        }
    option{
        background:#fff;
        border-color:#41c9ff;
        border-radius:2px;
        line-height: 18px;
        outline:none;
        -webkit-box-shadow: 0 0 3px 1px #c00;
        -moz-box-shadow: 0 0 3px 1px #c00;
        box-shadow: 0 0 3px 1px #c00;
    }
    option:focus{
        -webkit-box-shadow: 0 0 3px 1px #7cdaff;
            -moz-box-shadow: 0 0 3px 1px #7cdaff;
            box-shadow: 0 0 3px 1px #7cdaff;
    }
</style>

</head>
<body>  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Status</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="fetchreport.php" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Generate</label> <br>
                                      <button type="submit" class="btn btn-primary">GENERATE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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