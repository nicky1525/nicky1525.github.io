<?php

$recipient_name = "Nicole";
$recipient_email = "nicole@delafeld.it";
$sender_name = isset($_POST['name']) ? trim($_POST['name']) : '';
$sender_email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$subject = "Nuovo messaggio da delafeld.it!";
$header = "From: $sender_name <$sender_email>";

if (!empty($sender_name) && !empty($sender_email) && !empty($message)) {
  // let's attempt to send an email
  if (mail($recipient_email, $subject, $message, $header)) {
    $response = "Your message has been sent successfully!";
  } else {
    $response = "Fail. Please try again.";
  }

} else {
  $response = "Please don't leave anything blank.";
}

echo '{"message":"' . $response . '"}';
