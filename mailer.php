<?php

$recipient_name = "Nicole";
$recipient_email = "nicole@delafeld.it";
$sender_name = isset($_POST['name']) ? trim($_POST['name']) : '';
$sender_email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$subject = "Nuovo messaggio da delafeld.it!";
$header = "From: $sender_name <$sender_email>";
$isSent = false;

if (!empty($sender_name) && !empty($sender_email) && !empty($message)) {
  // let's attempt to send an email
  if (mail($recipient_email, $subject, $message, $header)) {
    $isSent = true;
    $response = "Your message has been sent successfully!";
  } else {
    $response = "Fail. Please try again.";
  }

} else {
  $response = "Please don't leave anything blank.";
}

// our bool flag is isSent, and it's true if the message has been delivered
// correctly; false otherwise.
echo '{"isSent":"' . $isSent . '", "message":"' . $response . '"}';
