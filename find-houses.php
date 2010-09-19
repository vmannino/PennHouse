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

						
						<div class="filter-meta left">
							<h2 id="avgRentMin">$300</h2>
							<span>MIN AVG<br/>RENT</span>
						</div>
						
						<div class="filter-meta left">
							<h2 id="avgRentMax">$700</h2>
							<span>MAX AVG<br/>RENT</span>
						</div>
						
						
						<div id="avg-rent-slider" class="filter-element"></div>
						<div class="clear"></div>
						<hr class="custom-rule vertical-space-small" />
						
						<div class="filter-meta left">
							<h2 id="ttlRentMin">$1000</h2>
							<span>MIN TOTAL<br/>RENT</span>
						</div>
						
						<div class="filter-meta left">
							<h2 id="ttlRentMax">$5000</h2>
							<span>MAX TOTAL<br/>RENT</span>
						</div>
						
						
						<div id="total-rent-slider" class="filter-element"></div>
						<div class="clear"></div>
						<hr class="custom-rule vertical-space-small" />
						
						
						<div class="filter-meta left">
							<h2 style="display:none" id="llRtngMax">3.5</h2>
							<div id="rank-landlord">
								<img src="img/star.png" class="star" alt="star"/>
								<div id="rank-landlord-slider"></div>
							</div>
							<span>MAX LANDLORD<br/>RANK</span>
						</div>
						
						
						<div class="filter-meta right">
							<h2 style="display:none" id="hsRtngMax">3.5</h2>
							<div id="rank-house">
								<img src="img/star.png" class="star" alt="star"/>
								<div id="rank-house-slider"></div>
							</div>
							<span>MAX HOUSE<br/>RANK</span>
						</div>
						
						<div class="clear"></div>
						
						<hr class="custom-rule vertical-space-small" />
						
						<div class="filter-meta left">
							<h2 id="bdrmMin">1</h2>
							<span>MIN ROOMS</span>
						</div>
						
						<div class="filter-meta left">
							<h2 id="bdrmMax">6</h2>
							<span>MAX ROOMS</span>
						</div>
						
						
						<div id="rooms-slider" class="filter-element"></div>
						<div class="clear"></div>
						<hr class="custom-rule vertical-space-small" />
						<div id="filter-button-div"><a id="filter-button" class="button bluebutton medium">Filter Results</a></div>
						
					</div>
					
					<div id="saved-searches">
						<h1>My Saved Searches</h1>
						
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
						<h1>Search Results</h1>
						<div class="house-result hovering">
						
							<div class="house-result-options">
								
								<div class="house-result-meta">
									<a href="#" class="button bluebutton shrink">&ndash;</a>
								</div>
								
								<div class="house-result-meta">
									<input type="checkbox" class="house-compare" value="0" title="Compare this House with Other Checked Ones" />
									<span>compare</span>
								</div>
								
								<div class="house-result-meta">
									<img src="img/fav-blank.png" class="fav" alt="fav" title="Save this House to Your Favorites"/>
									<span>fav</span>
								</div>
							</div>
						
							<img src="img/houses/thumb/example.jpg" class="house-thumb" />
							
							<div class="house-result-details">
							
							<div class="house-result-meta">
								<h2>4211 Spruce Street</h2>
								<span>address</span>
							</div>
							<div class="clear"></div>
							
									<div class="house-result-meta">$5000<br/>
										<span>TOTAL RENT</span>
									</div>
									<div class="house-result-meta">10<br/>
										<span>rooms</span>
									</div>
									
								
								
								
								<div class="house-result-ranking">
									<div class="house-result-meta">$540<br/>
										<span>AVG RENT/ROOM</span>
									</div>
									<div class="house-result-meta">
										<div id="rank-house">
											<img src="img/star.png" class="star" alt="star"/>
											<div id="rank-house-slider" style="width:65px"></div>
										</div>
										<span>RANK</span>
									</div>
								</div>
							</div>
						
						</div>
						<hr class="custom-rule" />
						
						
						
				
					</div>
					
					<div id="compare">
						<h1>Compare Houses</h1>
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
		
			<div id="favorites"> 
				
				<h1>My Favorites</h1>
				
				<?php
				$cookie=getCookie();
				$uid = json_decode(file_get_contents(
    'https://graph.facebook.com/me?access_token=' .
    $cookie['access_token']))->id;
				$favoritesString=mysql_result(mysql_query("SELECT favorites FROM users WHERE uid='".$uid."'"),0);
				if ($favoritesString){
				$favoritesArray=explode(',',$favoritesString);
				
				
                foreach($favoritesArray as $favorite){
                $houseObject=mysql_fetch_object(mysql_query("SELECT * FROM houses WHERE hid='".$favorite."'"));  
				$houseImg=explode(',',$houseObject->images);              
                echo "<div class='house-favorite'><div class='house-favorite-options'>";
				echo "<div class='house-result-meta'><img src='img/fav.png' class='fav' alt='fav' title='Remove this House From Your Favorites'/><span>fav</span></div>";
                 echo "<img width='60' height='40' src='img/houses/thumb/".$houseImg[0]."' class='house-thumb-favorite' />";
                 echo "<div class='house-favorite-meta'>";
				 echo "<h2>".$houseObject->title."</h2><div class='house-favorite-ranking'>";
				 echo "<div class='house-favorite-avg-rent'>".$houseObject->avg_rent."<br/>";
				 echo "<span>AVG RENT</span></div>";
				 echo "<div class='house-favorite-rank'>".$houseObject->avg_rank."<br/>";
				 echo "<span>STARS</span></div>";
				 echo "<div class='house-favorite-rooms'>".$houseObject->bedrooms."<br/>";
				 echo "<span>ROOMS</span></div></div></div></div>";
				 echo "<div class='clear'></div><hr class='custom-rule' />";
                }
				}
					?>
		
		</div>
		
		
		<?php getFooter(); ?>