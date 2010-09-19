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
				$favoritesString=mysql_result(mysql_query("SELECT favorites FROM users WHERE uid='".$uid."'"));echo $favoritesString;
				$favoritesArray=explode(',',$favoritesString);
				
				
                foreach($favoritesArray as $favorite){
                $houseObject=mysql_fetch_object(mysql_query("SELECT * FROM houses WHERE hid=".$favorite));  
				$houseImg=explode(',',$houseObject->images);              
                $houseFavorite="";
                $houseFavorite+="<div class='house-favorite'>";
                 $houseFavorite+="<img src='img/houses/thumb/".$houseImg[0]."' class='house-thumb-favorite' />";
                 $houseFavorite+="<div class='house-favorite-meta'>";
				 $houseFavorite+="<h2>4211 Spruce Street</h2><div class='house-favorite-ranking'>";
				 $houseFavorite+="<div class='house-favorite-avg-rent'>".$houseObject->avg_rent."<br/>";
				 $houseFavorite+="<span>AVG RENT</span></div>";
				 $houseFavorite+="<div class='house-favorite-rank'>".$houseObject->avg_rank."<br/>";
				 $houseFavorite+="<span>STARS</span></div>";
				 $houseFavorite+="<div class='house-favorite-rooms'>".$houseObject->bedrooms."<br/>";
				 $houseFavorite+="<span>ROOMS</span></div></div></div></div>";
				 $houseFavorite+="<div class='clear'></div><hr class='custom-rule' />";
				echo $houseFavorite;
                }
					?>
					
						
							
								
							
							
							
								
							<!--
							
								
				
				<div class="house-favorite">
					<img src="img/houses/thumb/example_small.jpg" class="house-thumb-favorite" />
					<div class="house-favorite-meta">
						<h2>4211 Spruce Street</h2>
						<div class="house-favorite-ranking">
							<div class="house-favorite-avg-rent">$540<br/>
								<span>AVG RENT</span>
							</div>
							
							
							<div class="house-favorite-rank">4.5 <br/>
								<span>STARS</span>
							</div>
							
							<div class="house-favorite-rooms">10 <br/>
								<span>ROOMS</span>
							</div>
						
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<hr class="custom-rule" />
				<div class="house-favorite">
					<img src="img/houses/thumb/example_small.jpg" class="house-thumb-favorite" />
					<div class="house-favorite-meta">
						<h2>4211 Spruce Street</h2>
						<div class="house-favorite-ranking">
							<div class="house-favorite-avg-rent">$540<br/>
								<span>AVG RENT</span>
							</div>
							
							
							<div class="house-favorite-rank">4.5 <br/>
								<span>STARS</span>
							</div>
							
							<div class="house-favorite-rooms">10 <br/>
								<span>ROOMS</span>
							</div>
						
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<hr class="custom-rule" />
				<div class="house-favorite">
					<img src="img/houses/thumb/example_small.jpg" class="house-thumb-favorite" />
					<div class="house-favorite-meta">
						<h2>4211 Spruce Street</h2>
						<div class="house-favorite-ranking">
							<div class="house-favorite-avg-rent">$540<br/>
								<span>AVG RENT</span>
							</div>
							
							
							<div class="house-favorite-rank">4.5 <br/>
								<span>STARS</span>
							</div>
							
							<div class="house-favorite-rooms">10 <br/>
								<span>ROOMS</span>
							</div>
						
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<hr class="custom-rule" />
				<div class="house-favorite">
					<img src="img/houses/thumb/example_small.jpg" class="house-thumb-favorite" />
					<div class="house-favorite-meta">
						<h2>4211 Spruce Street</h2>
						<div class="house-favorite-ranking">
							<div class="house-favorite-avg-rent">$540<br/>
								<span>AVG RENT</span>
							</div>
							
							
							<div class="house-favorite-rank">4.5 <br/>
								<span>STARS</span>
							</div>
							
							<div class="house-favorite-rooms">10 <br/>
								<span>ROOMS</span>
							</div>
						
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<hr class="custom-rule" />
				
				
		
			</div>
			<div class="clear"></div>
		-->
		
		</div>
		
		
		<?php getFooter(); ?>