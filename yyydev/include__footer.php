<script>


	$(function() { 
		
		var slider = $('ul.bxslider').bxSlider({ auto: true, controls: false, infiniteLoop: true, pager: false, speed: 1500 });
		$(window).resize(function() { slider.reloadSlider({ auto: true, controls: false, infiniteLoop: true, pager: false, speed: 1500 }); });
		
	});


</script>