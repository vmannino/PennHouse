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
			<h1>Find Houses</h1>
		
		</div>
		
		<div class="widget space">
			<h1>Find Landlords</h1>
		
		</div>
		
		<div class="widget">
			<h1>Students on opennhouse</h1>
		
		</div>
	
		<div class="clear"></div>
	
	</div>
			
		
		<?php getFooter(); ?>
