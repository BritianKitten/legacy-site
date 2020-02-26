<?php
	$pic = $_GET['pic'];
	if($pic == 1)
	{
		$previous = 12;
	}
	else
	{
		$previous = $pic-1;
	}
	if($pic == 12)
	{	
		$next = 1;
	}
	else
	{
		$next = $pic + 1;
	}
	$label = "";
	if ($pic == '1')
	{	$label = "";}
	if ($pic == '2')
	{   $label = "" ;}
	if ($pic == '3')
	{   $label = ""; }
	if ($pic == '4')
	{   $label = ""; }
	if ($pic == '5')
	{   $label = ""; }
	if ($pic == '6')
	{   $label = ""; }
	if ($pic == '7')
	{   $label = "Cafe de Paris"; }
	if ($pic == '8')
	{   $label = ""; }
	if ($pic == '9')
	{   $label = ""; }
	if ($pic == '10')
	{   $label = ""; }
	if ($pic == '11')
	{   $label = ""; }
	if ($pic == '12')
	{   $label = "Chain of Flowers"; }
	$pic = 'model' . $pic . '.jpg';
?>
<head>
	<title>Britain Kitten - Modelling</title>
	<link rel='stylesheet' type='text/css' href='britaink.css' />
	<meta name="description" content="Britain Kitten Modelling" />
	<meta name="keywords" content="britain kitten burlesque modelling" />
</head>
<body>
	<div id='bstuff'>
		<div id='menuBar'>
			<?php include 'menuBar.php' ?>
		</div>
		<div id='photoHolder'>
			<div class='buttonHolder'>
				<div class='navButton'>
					<a href='bigPic.php?pic=<?php echo $previous; ?>'><img src='images/back.gif' /></a>
				</div>
				<div class='navButton'>
					<a href='modelling.php'><img src='images/main.gif' /></a>
				</div>
				<div class='navButton'>
					<a href='bigPic.php?pic=<?php echo $next; ?>'><img src='images/next.gif' /></a>
				</div>
				<div class='fc'></div>
			</div>
			<div id='picTitle'>
				<?php echo $label; ?>
			</div>
			<img src='images/modelling/<?php echo $pic; ?>'/>
		</div>
		
	</div>
	<div class='fc'></div>
	</div>
</body>