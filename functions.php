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
function getCookie(){
	return get_facebook_cookie('102871766442464', '981fef3ce9d8e664b9277072210dd88b');
	
}
function printFavorites(){
				$cookie=getCookie();
				$uid = json_decode(file_get_contents(
    'https://graph.facebook.com/me?access_token=' .
    $cookie['access_token']))->id;
				$favoritesString=mysql_result(mysql_query("SELECT favorites FROM users WHERE uid='".$uid."'"),0);
				if ($favoritesString){
				$favoritesArray=explode(',',$favoritesString);
				
                foreach($favoritesArray as $key=>$favorite){
					
                $houseObject=mysql_fetch_object(mysql_query("SELECT * FROM houses WHERE hid='".$favorite."'"));  
				$houseImg=explode(',',$houseObject->images);
                echo "<div class='house-favorite'>";
				echo "<div class='house-favorite-options'>";
				echo "<div class='house-result-meta'>";
				echo "<img src='img/fav.png' class='fav' alt='fav' title='Remove this House From Your Favorites'/>";
				echo "</div></div>";
                 echo "<img width='60' height='40' src='img/houses/thumb/".$houseImg[0]."' class='house-thumb-favorite' />";
                 echo "<div class='house-favorite-meta'>";
				 echo "<h2>".$houseObject->title."</h2><div class='house-favorite-ranking'>";
				 echo "<div class='house-favorite-avg-rent'>".$houseObject->avg_rent."<br/>";
				 echo "<span>AVG RENT</span></div>";
				 echo "<div class='house-favorite-rank'>".$houseObject->avg_rating."<br/>";
				 echo "<span>STARS</span></div>";
				 echo "<div class='house-favorite-rooms'>".$houseObject->bedrooms."<br/>";
				 echo "<span>ROOMS</span></div></div></div></div>";
				 echo "<div class='clear'></div><hr class='custom-rule' />";
				 }
				}
				return $favoritesArray;
}
function register_user($uid,$email,$name){
	$registered=mysql_num_rows(mysql_query("SELECT * FROM users WHERE uid='".$uid."'"));
	if ($registered>0){
		echo 'registered';
	}
	else{
		if (!mysql_result(mysql_query("INSERT INTO users (uid,email,name) VALUES('".$uid."','".$email."','".$name."')"))){
			echo 'error:';
			echo mysql_error();	
		}
	}
	$date = date("Y-m-d"); 
		mysql_query("UPDATE users SET last_login='".$date."' WHERE uid='".$uid."'");
	
}

function getHeader($page, $title) {


$cookie = getCookie();

$dbhost='localhost';
$dbname='opennhouse';
$dbuser='opennhouse';
$dbpass='7?8$uhM';

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());



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
			
			<link href="css/jquery-ui-1.8.5.custom.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />

		<!-- End Stylesheets -->
		
		<!-- Begin JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js" ></script>
		<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.pack.js"></script>
		<!--<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.2.pack.js"></script>-->
		
		<script type="text/javascript" src="js/functions.js"></script>
		
		<script type="text/javascript"
			src="http://maps.google.com/maps/api/js?sensor=true">
		</script>
		
		
		
		<!-- End JavaScript -->
		
			 
	</head>
	<body onload="initialize()">
	

    <?php if ($cookie) {
		$user = json_decode(file_get_contents(
    'https://graph.facebook.com/me?access_token=' .
    $cookie['access_token']));
	register_user($user->id,$user->name,$user->email);
	  }
	  else{
		// no cookie 
	  }?>
  

    
    <p><fb:login-button perms="email" autologoutlink="true"></fb:login-button></p>
    <!--<p><fb:like></fb:like></p>-->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({appId: '102871766442464', status: true, cookie: true,xfbml: true});
		/* All the events registered */
	     FB.Event.subscribe('auth.login',function(response){
			 //
			 window.location.reload()
			 });
	     FB.Event.subscribe('auth.logout', function(response) {
	         //
	     });
	 
	     FB.getLoginStatus(function(response) {
         if (response.session) {
			 FB.api('/me', function(object) {
				$('#navItemWelcome').show();
				$('#welcomeSpan').text(object.name.replace(/ .*$/,'')); 
});

			 
	            //
	         }
	     });
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
						<li id="navItemWelcome" <?php if ($page == 'HOME') echo 'class="current"';?>><a class="welcome">Welcome Justin<span id="welcomeSpan"></span>!</a></li>
						<li <?php if ($page == 'DASHBOARD') echo 'class="current"';?>><a href="dashboard.php" <?php if ($page == 'DASHBOARD') echo 'class="current"';?>>Dashboard</a></li>
						<li <?php if ($page == 'LOGOUT') echo 'class="current"';?>><a href="#" <?php if ($page == 'LOGOUT') echo 'class="current"';?>>Logout</a></li>
					</ul>
				</div>
				
				<a href="index.php" title="Go Back Home!"><div id="logo"></div></a>
				<div id="nav-right"> 
					<ul>
						<li <?php if ($page == 'FIND-HOUSES') echo 'class="current"';?>><a href="find-houses.php" <?php if ($page == 'FIND-HOUSES') echo 'class="current"';?>>Find Houses</a></li>
						<li <?php if ($page == 'BROWSE-HOUSES') echo 'class="current"';?>><a href="browse.php" <?php if ($page == 'BROWSE-HOUSES') echo 'class="current"';?>>Browse Houses</a></li>
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