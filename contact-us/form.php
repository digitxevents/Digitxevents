<?php
sleep(1);
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "webprosen@gmail.com";
$subject = "Mail From Website";
$txt ="Name = " . $name . "\r\nEmail = " . $email . " \r\nMessage = " . $message;
$headers = "From: noreply@digitxevents.com" . "\r\n" .
"CC: webprosen@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>