<?php

include 'creds.php';
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
$to      = 'alberto@albertovillalobos.me';
$subject = "You've got mail!";
$message = $_POST["comments"];
// // User <user@example.com>
// $headers = 'From: You got mail!<contact@woolfolksrefinishing.com>' . "\r\n" .
//     'Reply-To: contact@woolfolksrefinishing.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers) or die ("Your message couldn't be sent :(");
// echo "Thank you for the message, I'll get back to you shortly :)";



$params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'to'        => $to,
    'subject'   => 'You\'ve got mail!',
    'html'      => $message,
    'text'      => $message,
    'from'      => 'contact@albertovillalobos.me'
  );

$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

// print everything out
// print_r($response);
$response = json_decode($response);
if ($response->message== "success") {
	echo "Thanks for your message!";
}
else {
	echo "Sorry, message couldn't be sent :c";
}
?>