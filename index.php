<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>opennhouse | <?php //echo $page; ?></title>
		
		
		<!-- Begin Stylesheets -->
			<link href="css/style.css" rel="stylesheet" type="text/css" />
		<!-- End Stylesheets -->
		
		<!-- Begin JavaScript -->
		<script type="text/javascript"
			src="http://maps.google.com/maps/api/js?sensor=true">
		</script>
		<script type="text/javascript">
		function initialize() {
			var latlng = new google.maps.LatLng(-34.397, 150.644);
			var myOptions = {
				zoom: 8,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"),
				myOptions);
				
			<!-- Needed later for translating adresses to LatLngs -->
			var geocoder = new google.maps.Geocoder();
		}
		</script>
		<!-- End JavaScript -->
			 
	</head>
	<body onload="initialize()">
	
	
		<div id="header"> 
		
			<div id="nav-bar"> 
		
				<div id="nav-left"> 
		
					<ul>
						<li><a href="#">Welcome Justin!</a></li>
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</div>
				
				<div id="logo"> 
		
				</div>
				
				<div id="nav-right"> 
					<ul>
						
						<li><a href="#">Find Houses</a></li>
						<li><a href="#">Browse</a></li>
						<li><a href="#">Find Landlords</a></li>
					</ul>
				</div>
		
		
		
			</div>
		
		
		
		</div>
		
		<div id="content"> 

			
			
			<div id="map-canvas">
		
				<div>
				</div>
		
				<div id="map-overlay"> 
					

				</div>
			</div>
		
			<div id="search-results"> 
		

		
				
			</div>
		
			<div id="favorites"> 
		

		
				
			</div>
			<div class="clear"></div>
		
		
		</div>
		
		
		<div id="footer"> </div>
		
		
	</body>
	
	
	
	
	
</html>