<?php
	require("class.phpmailer.php");
	require("class.smtp.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();  // telling the class to use SMTP

	$mail->Host     = "smtp2.servage.net"; // SMTP server

	$recipient_email = "nicole@delafeld.it";
	$sender_name = isset($_POST['name']) ? trim($_POST['name']) : '';
	$sender_email = isset($_POST['email']) ? trim($_POST['email']) : '';
	$message = isset($_POST['message']) ? trim($_POST['message']) : '';
	$header = "\"$sender_name\" <$sender_email>";
	$mail->From     = $header;
	$mail->addAddress($recipient_email);
	 
	$mail->Subject  = "Nuovo messaggio da delafeld.it!";

	$mail->Body     = $message;

	$isSent = false;

	if(!empty($sender_name) && !empty($sender_email) && !empty($message)) {
		$isSent = $mail->Send();
		if ($isSent) {
			$response = "Your message has been sent successfully!";
		} else {
			 $response = "Fail. Please try again.";
			 error_log('Mailer error: ' . $mail->ErrorInfo);
		}
	}
	else {
		$response = "Please don't leave anything blank.";
	}
	// our bool flag is isSent, and it's true if the message has been delivered
	// correctly; false otherwise.
	echo '{"isSent":"' . $isSent . '","message":"' . $response . '"}';
?>