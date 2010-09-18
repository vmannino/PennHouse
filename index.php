<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>opennhouse | <?php //echo $page; ?></title>
		
		
		<!-- Begin Stylesheets -->
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link href="css/cupertino/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
			
		<!-- End Stylesheets -->
		
		<!-- Begin JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js" ></script>
	
		<script type="text/javascript" src="js/insertMap.js"></script>
		
		<script type="text/javascript"
			src="http://maps.google.com/maps/api/js?sensor=true">
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

			
			<div id="map-wrapper">
				<div id="map-overlay"> 
					<ul>
						<li><a href="#filters">Filters</a></li>
						<li><a href="#saved-searches">Saved Searches</a></li>
					</ul>
					
					<div id="filters">
						<h1>This is where detailed results would go.</h1>
						
						
						<a id="filter-button" class="button bluebutton medium">Filter Results</a>
					</div>
					
					<div id="saved-searches">
						<h1>This is where saved searches would go.</h1>
						
					</div>

				</div>
				<div id="map-canvas">
			
					
				</div>
			</div>
			
		
			<div id="search-results"> 
			
					<ul>
						<li><a href="#results">Search Results</a></li>
						<li><a href="#compare">Compare Houses</a></li>
					</ul>
					
					<div id="results">
						<h1>This is where detailed results would go.</h1>
						
					</div>
					
					<div id="compare">
						<h1>This is where comparisons would go.</h1>
						
					</div>

		
				
			</div>
		
			<div id="favorites" class="tabs"> 
				<ul>
					<li><a href="#tabs-1">Favorites</a></li>
				</ul>

		
				
			</div>
			<div class="clear"></div>
		
		
		</div>
		
		
		<div id="footer"> </div>
		
		
	</body>
	
	
	
	
	
</html>