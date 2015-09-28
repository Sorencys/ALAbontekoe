<?php
	/*// xampp code fix      
	ini_set( 'sendmail_from', "myself@my.com" ); // My usual e-mail address
	ini_set( 'SMTP', "mail.bigpond.com" );  // My usual sender
	ini_set( 'smtp_port', 25 );

    mail("rankie32@hotmail.com", "Uw Reservering", ":)", "From: webmaster@example.com");
*/
	include 'res.class.php';
	if($_POST)
	{
		foreach($_POST as $k=>$v)
			$$k = $v;
		
		$db = new Res('localhost:3307', 'root', 'usbw');
		$db->addReservation($personen, $name, $email, $opmerkingen);
	}
?>