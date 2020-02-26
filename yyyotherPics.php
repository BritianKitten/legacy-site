<?php
	$pic = $_GET['pic'];
	$extra = 0;
	if($pic == 1)
	{
		$previous = 10;
	}
	else
	{
		$previous = $pic-1;
	}
	if($pic == 10)
	{	
		$next = 1;
	}
	else
	{
		$next = $pic + 1;
	}

	if ($pic=='5')
	{
		$extra=1;
	}
	
	$label = "";
	if ($pic == '1')
	{	$label = "Dancer Screw";	}
	if ($pic == '2')
	{   $label = "Nautilus in Love"; }
	if ($pic == '3')
	{   $label = "Too Late"; }
	if ($pic == '4')
	{   $label = "History"; }
	if ($pic == '5')
	{   $label = ""; }
	if ($pic == '6')
	{   $label = "Lisbon Elevator"; }
	if ($pic == '7')
	{   $label = "Touching China"; }
	if ($pic == '8')
	{   $label = "Jesus Scissors"; }
	if ($pic == '9')
	{   $label = "The Heavy Hearted Bird"; }
	if ($pic == '10')
	{   $label = "The Marionette"; }
	
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
			<div id='picTitle'>
				<?php echo $label; ?>
			</div>
			<img src='images/illustrations/<?php echo $pic; ?>'/><br/><br/>
			<?php
				if($extra==1)
				{
					echo("	<div class='extraLink'>
								<a href='otherPicsa.php?pic=5a'>Click for Baa Baa Black Sheep Part 2</a>
							</div>");
				}
			?>
		</div>
		
	</div>
	<div class='fc'></div>
	</div>
</body>