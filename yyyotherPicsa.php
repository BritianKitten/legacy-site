<?php
	$extra = false;
	$pic = $_GET['pic'];
	if($pic == '1a')
	{
		$previous = 10;
	}
	else
	{
		$previous = substr($pic,0,-1)-1;
	}
	if($pic == '10a')
	{	
		$next = 1;
	}
	else
	{
		$next = substr($pic,0,-1) +  1;
		
	}
	$extra=false;
	if ($pic=='5a')
	{
		$extra=true;
	}
	$pic = 'illPic' . $pic . '.jpg';
?>
<head>
	<title>Britain Kitten - Modelling</title>
	<link rel='stylesheet' type='text/css' href='britaink.css' />
	<meta name="description" content="Britain Kitten Illustrations" />
	<meta name="keywords" content="britain kitten burlesque illustrations" />
</head>
<body>
	<div id='bstuff'>
		<div id='menuBar'>
			<?php include 'menuBar.php' ?>
		</div>
		<div id='photoHolder'>
			
			<div class='buttonHolder'>
				<div class='navButton'>
					<a href='otherPics.php?pic=<?php echo $previous; ?>'><img src='images/back.gif' /></a>
				</div>
				<div class='navButton'>
					<a href='illustrations.php'><img src='images/main.gif' /></a>
				</div>
				<div class='navButton'>
					<a href='otherPics.php?pic=<?php echo $next; ?>'><img src='images/next.gif' /></a>
				</div>
				<div class='fc'></div>
			</div>
			<img src='images/illustrations/<?php echo $pic; ?>'/><br/><br/>
			<?php
				if($extra==1)
				{
					echo("	<div class='extraLink'>
								  <a href='otherPics.php?pic=5'>Click for Baa Baa Black Sheep Part 1</a>
							</div>");
				}
			?>
		</div>
		
	</div>
	<div class='fc'></div>
	</div>
</body>