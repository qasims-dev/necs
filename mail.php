<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = "aqasim81@gmail.com";

$email_from = $email;
$headers = "From: $email_from \r\n";
$email_subject = "New NECS Contact";
$email_body = "You have received a new message from the user $name.\n"."Here is the message:\n $message".
mail($to,$email_subject,$email_body,$headers);


?>