<?php
	
//SEND EMAIL:
function send_email($email, $firstname, $token) {
	$to = $email; // note the comma
	
	// Subject
	$subject = 'Activatie account SURFnet FPLO Omgeving';
	
	// Message
	$message = '
	<html>
	<head>
	  <title>Beste '.$firstname.',</title>
	</head>
	<body>
	  <p>Klik op onderstaande activatie link om u account voor de SURFnet FPLO omgeving te bevestigen.</p>
	  http://register.pilot.fplo.surfnet.nl/activate.php?token='.$token.'
	 </body>
	</html>
	';
	
	// To send HTML mail, the Content-type header must be set
	$headers[] = 'FROM: leeromgevingpilots@surfnet.nl';
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';	
	
	// Mail it
	mail($to, $subject, $message, implode("\r\n", $headers));

}

?>