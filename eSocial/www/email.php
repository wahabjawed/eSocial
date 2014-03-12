<?php

$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$to = " contact@eSocialFans.com";
$subject = "eSocialFans --- ".$name;
$message = $message;
$from = $email;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
 echo "EMAIL SENT";
?> 