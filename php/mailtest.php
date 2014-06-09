<?php	
	$to      = 'izaktj@gmail.com';
	$subject = "You've got mail!";
	// $message = 'hello';
	$message = "testing mailing";
	// User <user@example.com>
	$headers = 'From: You got mail!<contact@tubulargeorge.com/>' . "\r\n" .
	    'Reply-To: contact@tubulargeorge.com/' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers) or die ("Your message couldn't be sent :(");
	echo "Thank you for the message, I'll get back to you shortly :)";
?>