<?php 
	include_once("config.php");
	include_once("functions.php");
	getHeader("HOME","Home");
	
	$cookie = get_facebook_cookie(FACEBOOK_APP_ID, FACEBOOK_SECRET);
 if ($cookie) { ?>
      Your user ID is <?= $cookie['uid'] ?>
    <?php } else { ?>
      <fb:login-button></fb:login-button>
    <?php } ?>

    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>

		
		<div id="content"> 

			
		</div>
		
		
		<?php getFooter(); ?>
