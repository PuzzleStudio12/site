<?php
header('Content-type: application/json');
$status = array(
    'type'=>'success',
    'message'=>'Дякуємо. '
);

$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 


$email_from = $email;
$email_to = 'info@puzzle-studio.com.ua';//replace with your email



$body = ('Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message);

$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

echo json_encode($status);
die;