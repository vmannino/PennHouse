<?php 
	include_once("functions.php");
	getHeader("FIND-HOUSES","Find Houses");
?>



		
		<div id="content"> 

			
			<div id="map-wrapper">
				<div id="map-overlay"> 
					<ul>
						<li><a href="#filters">Filters</a></li>
						<li><a href="#saved-searches">Saved Searches</a></li>
					</ul>
					
					<div id="filters">
						<h1>This is where Filters would go.</h1>

						<form>
						<input type="text" class="numInput" name="avgRentMin">
						<input type="text" name="avgRentMax">
						<input type="text" name="ttlRentMin">
						<input type="text" name="ttlRentMax">
						<input type="text" name="llRtngMin">
						<input type="text" name="llRtngMax">
						<input type="text" name="hsRtngMin">
						<input type="text" name="hsRtngMax">
						<input type="text" name="bdrmMin">
						<input type="text" name="bdrmMax">
						</form>
						
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
						
						<div class="house-result">
							<img src="img/houses/thumb/example.jpg" class="house-thumb" />
							<div class="house-result-meta">
								<h2>4211 Spruce Street</h2>
								<h3>10 Occupants | $6,500/month</h3>
							</div>
							
							<div class="house-result-ranking">
								<div class="avg-rent">$540
									<span>AVG RENT/PERSON</span>
								</div>
								
								
								<div class="rank">4.5 
									<span>STARS</span>
								</div>
							</div>
						
						
						</div>
						<hr class="custom-rule" />
						
						
						
						
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
		
		
		<?php getFooter(); ?>