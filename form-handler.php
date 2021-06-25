<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 

 $email_from ='college@fas.harvard.edu';

 $email_subject='New From Submission';


 $email_body="user name: $name.\n";
             "user email:  $visitor_email.\n"; 
             "user name:  $subject.\n";
             "user name:  $message.\n";

$to = 'anweshapal1221@gmail.com';

$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");





?>
