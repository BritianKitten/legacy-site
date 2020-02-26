<?php include('include__head.php'); ?>

	<div id="banner"><div class="inner"><?php include('include__banner.php'); ?></div></div>
	
	<div id="content"><div class="inner">
	
	
		<div id="contact"><div>
			<h4>Get In Contact</h4>
			<form action="post.php" method="post">
				<dl><dt>Name</dt><dd><input type="text" name="name" /></dd></dl>
				<dl><dt>Email</dt><dd><input type="email" name="email" /></dd></dl>
				<dl><dt>Message</dt><dd><textarea name="message" rows="10"></textarea></dd></dl>
				<br />
				<p><input type="image" src="sketch/submit.png" /></p>
			</form>	
		</div><img src="sketch/contact__woman.png" id="contact__woman" /></div>
		
			
	</div></div>
	
<?php include('include__footer.php'); ?>	

</body>
</html>