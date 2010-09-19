<?php 
	include_once("config.php");
	include_once("functions.php");
	getHeader("HOME","Home");
	
?>


	<script type="text/javascript" src="js/jquery.easySlider-kf.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true,
				numeric: true
			});
			
			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});	
	</script>
	
	<div id="easyslider_wrapper">
		
		<div id="slider">
			<ul>				
				<li><img src="img/slider1.png" alt="slider1" class="slider-img"/></li>
				<li><img src="img/slider2.png" alt="slider2" class="slider-img"/></li>
				<li><img src="img/slider3.png" alt="slider3" class="slider-img"/></li>
				<li><img src="img/slider4.png" alt="slider4" class="slider-img"/></li>
					
			</ul>
		</div>

	</div>
	<div id="content">
	
		
	
	
	
		<div class="widget space">
			<h1>Houses Available</h1>
			<a id="various1" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a>
			<div style="display: none;">
				<div id="inline1" style="width:400px;height:100px;overflow:auto;">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
				</div>
			</div>
		</div>
		
		<div class="widget space">
			<h1>Landlords Reviewed</h1>
		
		</div>
		
		<div class="widget">
			<h1>Students Using oPennHouse</h1>
		
		</div>
	
		<div class="clear"></div>
	
	</div>
			
		
		<?php getFooter(); ?>
