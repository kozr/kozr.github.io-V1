<?php $name = $_POST['name'];
$email = $_POST['email'];
$inquiry = $_POST['inquiry'];
$formcontent="From: $name \n Message: $message";
$recipient = "heigold128@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>