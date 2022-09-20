<?php 
session_start();

if (isset($_SESSION['cid']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><a style="background-color: #c0c0c0; text-decoration-line: none;padding-top: 5px; padding-left: 15px;padding-right: 15px;" href="../index.php">back</a>
    <form action="change-p.php" method="post">
        <h2>Change Password</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        
        <h2>Please Change Your Default Password</h2>
        <label>Old Password</label>
        <input type="password" 
               name="op" 
               placeholder="Old Password">
               <br>
        <label>New Password</label>
        <input type="password" 
               name="np" 
               placeholder="New Password">
               <br>
        <label>Confirm New Password</label>
        <input type="password" 
               name="c_np" 
               placeholder="Confirm New Password">
               <br>
        <button type="submit">CHANGE</button>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: ../../index.php");
     exit();
}
 ?>