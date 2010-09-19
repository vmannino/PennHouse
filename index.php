<?php 
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
				<li>
					<h1>oPennHouse allows Penn students to find proper housing</h1>
				</li>
				
				<li>
				
				</li>
				
				<li>
				
				</li>
				
				<li>
				
				</li>
					
			</ul>
		</div>

	</div>
	<div id="content">
	
		
	
	
	
		<div class="widget space">

			<h1>Houses Available</h1>

		</div>
		
		<div class="widget space">
			<h1>Landlords Reviewed</h1>
		
		</div>
		
		<div class="widget">
			<h1>Students on oPennHouse</h1>
			<ul>
			<?php

				/*$query = 

				
				$result=mysql_query("SELECT * FROM users ORDER BY last_login DESC LIMIT 0,12");
				while($user=mysql_fetch_object($result)){
					echo '<li><img src="http://graph.facebook.com/'.$user->uid.'/picture?type=square" /><a href="http://www.facebook.com/' . $user->username . '">'.preg_replace("/ .*$/","",$user->name).'</a></li>';
				}
				*/
				?>
			</ul>
		</div>
	
		<div class="clear"></div>
	
	</div>
			
		
		<?php getFooter(); ?>
