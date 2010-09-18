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
						<h1>Filters</h1>

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
				
				<div id="globe" style="display:none;"><img src="img/globe.gif" alt="globe" title="Loading..."/></div>
				<div id="map-canvas">
			
					
				</div>
			</div>
			
		
			<div id="search-results"> 
			
					<ul>
						<li><a href="#results">Search Results</a></li>
						<li><a href="#compare">Compare Houses</a></li>
					</ul>
					<div id="results">
						<h1>Search Results:</h1>
						<hr class="custom-rule" />
						<div class="house-result">
							<img src="img/houses/thumb/example.jpg" class="house-thumb" />
							<div class="house-result-meta">
								<h2>4211 Spruce Street</h2>
								<h3><span>10</span> Bedrooms | <span>$6,500</span>/month</h3>
							</div>
							
							<div class="house-result-ranking">
								<div class="house-result-avg-rent">$540<br/>
									<span>AVG RENT/ROOM</span>
								</div>
								
								
								<div class="house-result-rank">4.5 <br/>
									<span>STARS</span>
								</div>
							</div>
						
						
						</div>
						<hr class="custom-rule" />
						
						
						
				
					</div>
					
					<div id="compare">
						<!-- Table markup-->  
  
						<table id="compare-table" summary="Comparison of Houses">
						<thead>
							<tr>
								<th scope="col">Thumbnail</th>
								<th scope="col">Address</th>
								<th scope="col">Rank</th>
								<th scope="col">Avg R/R</th>
								<th scope="col">Rooms</th>
								<th scope="col">Rent</th>
								<th scope="col">Landlord</th>
								<th scope="col">Landlord Rank</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd">
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr>
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr class="odd">
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr>
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr class="odd">
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr>
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr class="odd">
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
							<tr class="last">
								<td><img src="img/houses/thumb/example_small.jpg" class="house-thumb" /></td>
								<td>4211 Spruce St.</td>
								<td>4.5</td>
								<td>$540</td>
								<td>12</td>
								<td>$6500</td>
								<td>Off-Campus Management</td>
								<td>4.8</td>
							</tr>
						</tbody>
					</table> 
					
					
					
						<div class="clear"></div>
					
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