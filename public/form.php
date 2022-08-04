<?php
//get data from form  

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['comment'];

$to = "tuliptravels2009@gmail.com";
$subject = "Mail From Tulip Kerala website";
$txt ="First Name = ". $fname . "\r\n Last Name = ". $lname . "\r\n  Phone no = ". $phone . "\r\n   Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>