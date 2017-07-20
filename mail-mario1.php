<?php
require_once('mailer.php');//incluimos la clase PHPMailer
//require_once('../class.MAIL.php');//incluimos la clase PHPMailer
//instancio un objeto de la clase PHPMailer
//	$mail = new mail(); // defaults to using php "mail()"
$ip = $_SERVER['REMOTE_ADDR'];
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$phone = $_POST['phone'];
//$priority = $_POST['priority'];

//$call = $_POST['call'];
//$website = $_POST['website'];
//$type = $_POST['type'];
 
$message = $_POST['message'];
$formcontent=" From: $name \nIP: $ip \n Phone: $phone \n Category: $category \n Priority: $priority \n Message: $message";
$recipient = "horacioroz@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";



?>