<?php

$recipient_name = "Nicole";
$recipient_email = "nicole@delafeld.it";
$sender_name = isset($_POST['name']) ? trim($_POST['name']) : '';
$sender_email = isset($_POST['email']) ? trim($_POST['email']) : '';  
$message = isset($_POST['message']) ? trim($_POST['message']) : '';  
$subject = "Nuovo messaggio da delafeld.it!";
$header = "From: $sender_name <$sender_email>";

if (!empty($sender_name) && !empty($sender_email) && !empty($message)) {

  $mail_sent = mail($recipient_email, $subject, $message, $header);

} else {

  $response_message = "Please don't leave anything blank.";
}
