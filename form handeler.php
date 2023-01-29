<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message=$_POST['message'];


$email_from='info@yourwebsite.com';

$email_subject='New Form Submission';

$email_body-"User Name: $name./n".
            "User Email: $visitor_email./n".
            "Subject:$subject./n".
            "User Message: $message./n";

$to='tavirjoy545@gmail.com';
$header="from:$email_from \r\n";

mail($to,$email_sub,$email_body,$header);

$header("location:contact.html")
?>