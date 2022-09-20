<?php
$con  = mysqli_connect('localhost','root','','maintenance');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}
