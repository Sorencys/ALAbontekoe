<?php

    include 'header_resveren.php';
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

<!-- Funtie mail sturen
       /* $to = "rankie32@hotmail.com, $email";
        $subject = "Reservering De Bonte Koe";

        $message = "
        <html>
        <head>
        <title>Uw reservering bij de bontekoe</title>
        </head>
        <body>
        <p>U heeft een reservering op $date om $time. </p>
        <table>
        <tr>
        <th>Volledige naam: $name</th>
        </tr>
        <tr>
        <td>Aantal personen: $personen</td>
        </tr>
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: rankie32@hotmail.com' . "\r\n";

        mail($to,$subject,$message,$headers);

    }
-->
    <h1> Een mail is verstuurd en de reservering is aangekomen bij De Bonte Koe.</h1>
<?php

    include '../footer.php';
        
?>