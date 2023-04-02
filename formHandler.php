<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$service=$_POST['service'];
$message=$_POST['message'];

$email_from = "shashi97mahanama@gmail.com";
$email_subject="New from submission";
$email_body = "User Name : $name.\n".
            "User Email: $visitor_email.\n".
            "service : $service.\n".
            "message : $message.\n";


$to = 'shashi97dilhani@gmail.com';
$headers = "From:$email_from \r\n";
$headers ="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location:contact.html");

?>