<?php
//functions.php

define('FACEBOOK_APP_ID', 'your application id');
define('FACEBOOK_SECRET', 'your application secret');

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

$cookie = get_facebook_cookie(FACEBOOK_APP_ID, FACEBOOK_SECRET);

function sanitize($string){
	$string=strip_tags($string);
	$string=htmlentities($string);
	$string=stripslashes($string);
	return mysql_real_escape_string($string);
}

function getHeader($page, $title) {



?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>opennhouse | <?php echo $title; ?></title>
		
		
		<!-- Begin Stylesheets -->
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link href="css/easyslider.css" rel="stylesheet" type="text/css" />
			<link href="css/cupertino/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
			
		<!-- End Stylesheets -->
		
		<!-- Begin JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js" ></script>

		<script type="text/javascript" src="js/functions.js"></script>
		
		<script type="text/javascript"
			src="http://maps.google.com/maps/api/js?sensor=true">
		</script>
		
		
		
		<!-- End JavaScript -->
		
			 
	</head>
	<body onload="initialize()">
		<?php if ($cookie) { ?>
			Your user ID is <?= $cookie['uid'] ?>
		<?php } else { ?>
			<fb:login-button>Hi Broglie</fb:login-button>
		<?php } ?>
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
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js"></script>
		<script>
			FB.init({appId: 'your app id', status: true, cookie: true, xfbml: true});
			FB.Event.subscribe('auth.sessionChange', function(response) {
				if (response.session) {
					// A user has logged in, and a new cookie has been saved
				} else {
					// The user has logged out, and the cookie has been cleared
				}
			});
		</script>
	</body>
</html>

<?php


}

?>