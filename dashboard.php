<?php 
	include_once("functions.php");
	getHeader("DASHBOARD","Dashboard");
?>



		
		<div id="content"> 

			
			<div class="col-330">
				
				<img src="img/blank_profile.png" alt="profile" width="200"/>
				<h4>Justin Broglie</h4>
			
			</div>
			
			<div id="dashboard-main" class="col-630">
				<ul>
					<li><a href="#current-residence">Current Residence</a></li>
					<li><a href="#past-residences">Past Residences</a></li>
				</ul>
				
				<div id="current-residence">
				
					<a id="filter-button" class="button bluebutton small">Edit Current Residence</a>
					<a id="filter-button" class="button bluebutton small">Edit My Review</a>
					<a id="filter-button" class="button bluebutton small">Add Images</a>
					<a id="filter-button" class="button bluebutton small">Edit My Landlord Review</a>
				</div>
				
				<div id="past-residences">
					<h1>These are the past residences</h1>
				
				</div>
			
			
			</div>
		
			<div class="clear"></div>
			
			<div class="col-330">
				<h1>My Favorites</h1>
				
				<div class="house-favorite">
					<img src="img/houses/thumb/example_small.jpg" class="house-thumb" />
					<div class="house-favorite-meta">
						<h2>4211 Spruce Street</h2>
						<div class="house-favorite-ranking">
						<div class="house-favorite-avg-rent">$540<br/>
							<span>AVG RENT/ROOM</span>
						</div>
						
						
						<div class="house-favorite-rank">4.5 <br/>
							<span>STARS</span>
						</div>
					</div>
					</div>
					
					
				
				
				</div>
				<hr class="custom-rule" />
			
			</div>
			
			<div class="col-630">
				<h1>Compare Favorites</h1>
			
			
			</div>
		
			<div class="clear"></div>
		</div>
		
		
		<?php getFooter(); ?>