<?php
$to = "ruposh.cse@gmail.com";
$subject = "Portfolio";

$name = $_POST['first_name'];
$email = $_POST['email'];
$msg = $_POST['textarea1'];

$message = "Name: ".$name."\n"."From: ".$email."\n\n".$msg."\n\nThanking you-\n".$name;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";


// More headers
$headers .= 'From: ' . $email . "\r\n";
mail($to,$subject,$message,$headers);
?>
