<?php

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail-> isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "ibiruk12@gmail.com";
$mail->Password = "taduyeteme";
$mail->Username = "ibiruk12@gmail.com";
$mail->Subject = $_POST['subject'];
$mail->setFrom ("ibiruk12@gmail.com");
$mail->Body = "Hi my name is ".$_POST['name'].", ".$_POST['message'].". You can write back to ".$_POST['email'];
$mail->addAddress ("ibiruk12@gmail.com");


if ($mail->Send()) {
  echo "Your Email was Sent!";
}else{
  echo "error occured!";
}

$mail->smtpClose();

?>
