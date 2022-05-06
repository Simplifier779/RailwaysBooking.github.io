<?php
$name=$_POST['name'];
$customer_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@railway-website.com';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
             "Email:$customer_email.\n".
              "User Name:$subject.\n".
                "User Name:$message.\n";

$to='s.karra@somaiya.edu';
$headers="From $email_from \r\n";
$headers.="Reply-To:$customer_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:Contact Us.html");
?>