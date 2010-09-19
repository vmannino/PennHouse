<?php 
	include_once("functions.php");
	getHeader("BROWSE-HOUSES","Single House");
?>



		
		<div id="content"> 
			
			<h1>Single House View</h1>
			<div class="col-630 first">
				<h1>4211 Spruce Street</h1>
				<div class="house-dashboard">
					<img src="img/houses/large.jpg" class="house-thumb-large" />
					
					<div class="house-dashboard-meta">
						<img src="img/houses/thumb/small1.jpg" class="house-thumb-small" />
						<img src="img/houses/thumb/small2.jpg" class="house-thumb-small" />
						<img src="img/houses/thumb/small3.jpg" class="house-thumb-small" />
						<div class="clear"></div>
						<span>More Images</span>
					</div>
					
					
					<div class="clear"></div>
					
					
					<div class="house-dashboard-meta">
						Off-Campus Management<br/>
						<span>Landlord</span>
					</div>
						
					<div class="house-dashboard-meta">$540<br/>
						<span>AVG RENT/ROOM</span>
					</div>
					
					
					
					
					<div class="house-dashboard-meta">12<br/>
						<span>ROOMS</span>
					</div>
					
					<div class="house-dashboard-meta">$6,500<br/>
						<span>TOTAL RENT</span>
					</div>


					
					
					
					<div class="clear"></div>
				
				</div>
			</div>
			
			
			<div class="col-330 last">
				<h1>House Ranking</h1>
				<div class="house-dashboard-meta">
					<div id="rank-house">
						<img src="img/star.png" class="star" alt="star"/>
						<div id="rank-house-slider" style="width: 100px"></div>
					</div>
					<span>HOUSE RANK</span>
				</div>
				<div class="house-dashboard-meta">
					<div id="rank-landlord">
						<img src="img/star.png" class="star" alt="star"/>
						<div id="rank-landlord-slider" style="width: 20px"></div>
					</div>
					<span>LANDLORD RANK</span>
				</div>
			</div>
			
			<div class="col-330 last">
				<h1>Residents</h1>
					<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
					<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
					<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
					<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
					<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
					<div class="clear"></div>
			</div>
			
			
			<div class="clear"></div>
		</div>
		
		
		
		
		
		<?php getFooter(); ?>