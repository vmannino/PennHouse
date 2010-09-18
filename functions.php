<?php
//functions.php

function sanitize($string){
	$string=strip_tags($string);
	$string=htmlentities($string);
	$string=stripslashes($string);
	return mysql_real_escape_string($string);
}
function get_facebook_cookie($app_id, $application_secret) {
  $args = array();
  parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
  ksort($args);
  $payload = '';
  foreach ($args as $key => $value) {
    if ($key != 'sig') {
      $payload .= $key . '=' . $value;
    }
  }
  if (md5($payload . $application_secret) != $args['sig']) {
    return null;
  }
  return $args;
}
function getHeader($page, $title) {


define('FACEBOOK_APP_ID', '102871766442464');
define('FACEBOOK_SECRET', '981fef3ce9d8e664b9277072210dd88b');

$cookie = get_facebook_cookie(FACEBOOK_APP_ID, FACEBOOK_SECRET);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>opennhouse | <?php echo $title; ?></title>
		
		
		<!-- Begin Stylesheets -->
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link href="css/easyslider.css" rel="stylesheet" type="text/css" />
			<link href="css/cupertino/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
		<!-- End Stylesheets -->
		
		<!-- Begin JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js" ></script>
		<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
		
		<script type="text/javascript" src="js/functions.js"></script>
		
		<script type="text/javascript"
			src="http://maps.google.com/maps/api/js?sensor=true">
		</script>
		
		
		
		<!-- End JavaScript -->
		
			 
	</head>
	<body onload="initialize()">

    <?php if ($cookie) { ?>
      Your user ID is <?php echo $cookie['uid']; }
	  else{
		echo 'no cookie!';  
	  }?>
  

    
    <p><fb:login-button perms="email" autologoutlink="true"></fb:login-button></p>
    <p><fb:like></fb:like></p>
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({appId: '102871766442464', status: true, cookie: true,
                 xfbml: true});
      };
      (function() {
        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>


		<div id="header"> 
			<div id="nav-bar"> 
				<div id="nav-left"> 
					<ul>
						<li <?php if ($page == 'HOME') echo 'class="current"';?>><a href="index.php" <?php if ($page == 'HOME') echo 'class="current"';?>>Welcome Justin!</a></li>
						<li <?php if ($page == 'DASHBOARD') echo 'class="current"';?>><a href="dashboard.php" <?php if ($page == 'DASHBOARD') echo 'class="current"';?>>Dashboard</a></li>
						<li <?php if ($page == 'LOGOUT') echo 'class="current"';?>><a href="#" <?php if ($page == 'LOGOUT') echo 'class="current"';?>>Logout</a></li>
					</ul>
				</div>
				
				<a href="index.php" title="Go Back Home!"><div id="logo"></div></a>
				<div id="nav-right"> 
					<ul>
						<li <?php if ($page == 'FIND-HOUSES') echo 'class="current"';?>><a href="find-houses.php" <?php if ($page == 'FIND-HOUSES') echo 'class="current"';?>>Find Houses</a></li>
						<li <?php if ($page == 'BROWSE') echo 'class="current"';?>><a href="#" <?php if ($page == 'BROWSE') echo 'class="current"';?>>Browse</a></li>
						<li <?php if ($page == 'FIND-LANDLORDS') echo 'class="current"';?>><a href="#" <?php if ($page == 'FIND-LANDLORDS') echo 'class="current"';?>>Find Landlords</a></li>
					</ul>
				</div>
			</div>
			
			
		</div>

		
<?php
}
function getFooter() {
?>
		<div id="footer"> </div>
	</body>
</html>
<?php
}

?>