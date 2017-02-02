<?php
$to = $_POST['to'];
$email = $_POST['newsletter-email'];
$subject = 'Email Subscriber';
$messages = 'From site your.com:</br>Subscriber Email: '.$email.'</br>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: info@your.com' . "\r\n";

mail($to, $subject, $messages, $headers);
?>