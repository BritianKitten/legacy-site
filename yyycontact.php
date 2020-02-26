<?php
		$error = false;
		$email = '';
		$emailfrom = '';
		$message = '';
		if (isset($_GET['error']))
		{	$error = true; }
		else
		{	$error = false; }
		if (isset($_GET['email'])) 
		{	$email = $_GET['email'];	}
		if (isset($_GET['from'])) 
		{	$emailfrom = $_GET['from'];	}	
		if (isset($_GET['message'])) 
		{	$message = $_GET['message'];	}
	?>
<head>
	<title>Britain Kitten - Send a Message!</title>
	<link rel='stylesheet' type='text/css' href='britaink.css' />
	<meta name="description" content="Britain Kitten - Contact" />
	<meta name="keywords" content="britain kitten contact" />
</head>
<body>
	<div id='costuff'>
		<div id='menuBar'>
			<?php include 'menuBar.php' ?>
		</div>
	<div class='contactText'>
		<br/><strong>Send Britain Kitten a message!</strong><br/><br/>
		<form action="contacted.php" method="post"> 
								<?php
									if($error)
									{
										echo("<span style='color:red;font-size:12px;background-color:white;'>There was a problem with your details - please try again!</span><br/><br/>");
										} ?>
								<div class="formSection">Your Name:</div> 
								<div class="formSection"><input class='formInput' type="text" name="from" value="<?php echo $emailfrom; ?>"></input></div> 						
								<div class="fc"></div> 
								<div class="formSection">Your email:</div> 
								<div class="formSection"><input class='formInput' type="text" name="email" value="<?php echo $email; ?>"></input></div> 
								<div class="fc"></div> 
								<div class="formSection"><br/>Type your message here:</div> 
								<div class="formSection" style="height:130px;">
									<textarea class='formText' rows="7" name="Text"><?php echo ($message); ?></textarea>
								</div> 
								<div class="fc"></div>								
								<div class="formSection">&nbsp;</div>
								<div class="formSection"><div style='float:right;'><input type="submit" value="Submit"></input></div></div> 
								<div class="fc"></div>
								
							</form>
					
							
							</div>
				</div>
				<div class="fc"></div>
			</div>
	</div>
	</div>
</body>