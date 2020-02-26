<?php 
		$to = 'shinakaikitty@aol.com';
		$toTwo = 'scoshi@hotmail.com';
		date_default_timezone_set ("Europe/London");
		$sentAt = date("d/m/y : H:i:s", time());
		$emailfrom = $_POST['from'];
		$email = $_POST['email'];
		$RAWmessage = $_POST['Text'];
		$message = filter_var($RAWmessage, FILTER_SANITIZE_STRING);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$message = str_replace("'","''",$RAWmessage);
		$symbols = array(">","<");
		$message = str_replace($symbols, "" , $message);
		$deleted = 0;	
		$message = str_replace('\\', '', $message);
		$emailfrom = str_replace('\\', '', $emailfrom);
		$type = 'Message from Britain Kitten';
		if($email == "" or $emailfrom == "")
		{
			$message = urlencode($message);
			Header( "Location: contact.php?error=true&email=$email&from=$emailfrom&message=$message");
		}			
		$message = $message . " \n\nsent by " . $emailfrom . " at: " . $sentAt;
		
	
		mail($to,$type,$message,$email);
		//mail($toTwo,$type,$message,$email);
		
	?>
	<head>
	<title>Britain Kitten - Contacted!</title>
	<link rel='stylesheet' type='text/css' href='britaink.css' />
	<meta name="description" content="Britain Kitten - Contacted" />
	<meta name="keywords" content="britain kitten contact" />
</head>
<body>
	<div id='costuff'>
		<div id='menuBar'>
			<?php include 'menuBar.php' ?>
		</div>
		<div class='contactText'>
			<br/><strong>Contacted!</strong><br/><br/>	
			Thanks for writing!<br/><br/>
			I'll get back to you as soon as I can!
		</div>
	</div>
</body>