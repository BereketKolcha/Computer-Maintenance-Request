<?php

session_start();
unset($_SESSION['user_name']);
unset($_SESSION['fname']);
unset($_SESSION['role']);
unset($_SESSION['cid']);
unset($_SESSION['lname']);
unset($_SESSION['cid']);
unset($_SESSION['logged_in']);
unset($_SESSION['pass']);
    
session_destroy();


header("Location: ../index.php");

exit;

?>

