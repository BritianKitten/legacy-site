<?php
	$pic = $_GET['pic'];
	if($pic == 1)
	{
		$previous = 13;
	}
	else
	{
		$previous = $pic-1;
	}
	if($pic == 13)
	{	
		$next = 1;
	}
	else
	{
		$next = $pic + 1;
	}
	
	$pic = 'bookTwo' . $pic . '.jpg';
?>
<head>
	<title>Britain Kitten - A Strange Love</title>
	<link rel='stylesheet' type='text/css' href='britaink.css' />
	<meta name="description" content="Britain Kitten Illustrations" />
	<meta name="keywords" content="britain kitten illustrations" />
</head>
<body>
	<div id='bstuff'>
		<div id='menuBar'>
			<?php include 'menuBar.php' ?>
		</div>
		<div id='photoHolder'>
			
			<div class='buttonHolder'>
				<div class='navButton'>
					<a href='book2.php?pic=<?php echo $previous; ?>'><img src='images/back.gif' /></a>
				</div>
				<div class='navButton'>
					<a href='illustrations.php'><img src='images/main.gif' /></a>
				</div>
				<div class='navButton'>
					<a href='book2.php?pic=<?php echo $next; ?>'><img src='images/next.gif' /></a>
				</div>	<div class='fc'></div>			
			</div>
			<img src='images/illustrations/<?php echo $pic; ?>'/>
		</div>
		
	</div>
	<div class='fc'></div>
	</div>
</body>