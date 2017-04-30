<?php

// // The message
$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];

// // In case any of our lines are larger than 70 characters, we should use wordwrap()

$to      = 'andy.mikulski+test@gmail.com';
$subject = 'ITS Contact Form Email';
$message = wordwrap($message, 70, "\r\n");

$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo 'OK';
} else {
	echo 'ERROR';
}

?>