<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$classroom = $_GET['classroom'];
$formcontent="From: $fname \n Phone: $phone \n eMail: $email \n Classroom: $classroom";
$recipient = "hr@fablab.ba";
$subject = "Prijava polaznika";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Hvala na prijavi!" . " -" . "<a href='https://fablab.ba/?page=pages/en/education' style='text-decoration:none;color:#ff0099;'>Vrati se na početnu</a>";
?>
