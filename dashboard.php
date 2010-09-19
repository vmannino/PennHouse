<?php 
	include_once("functions.php");
	getHeader("DASHBOARD","Dashboard");
?>



		
		<div id="content"> 
			
			
			<div class="col-330">
				<h1>Welcome Vincent!</h1>
				<img src="img/blank_profile.png" alt="profile" width="200" class="profile"/>
				<h4>Justin Broglie</h4>
				<a id="privacy-settings-button" href="#privacy-settings" class="button bluebutton small">Edit Privacy Settings</a>
				<a id="logout-button" class="button bluebutton small">Logout</a>
				
				
				<div style="display: none;">
					<div id="privacy-settings" class="fancybox-style" style="">
						<h1>Privacy Settings</h1>
					</div>
				</div>
			</div>
			
			<div id="dashboard-main">
				<ul>
					<li><a href="#current-residence">Current Residence</a></li>
					<li><a href="#past-residences">Past Residences</a></li>
				</ul>
				
				<div id="current-residence">
				
					<a class="button bluebutton small">Edit Current Residence</a>
					<a class="button bluebutton small">Edit My Review</a>
					<a class="button bluebutton small">Add Images</a>
					<a class="button bluebutton small">Edit My Landlord Review</a>
					
					<hr class="custom-rule vertical-space"/>
					<div class="house-dashboard">
						<img src="img/houses/thumb/example.jpg" class="house-thumb-large" />
						<div class="house-dashboard-meta">
							<h2>4211 Spruce Street</h2>
							<span>Address</span>
						</div>
						<div class="house-dashboard-meta">4.5 <br/>
							<span>MY RANK</span>
						</div>
						<div class="house-dashboard-meta">
							Off-Campus Management<br/>
							<span>My Landlord</span>
						</div>
						
						<ul class='star-rating'>
						  <li><a href='#' title='Rate this 1 star out of 5' class='one-star'>1</a></li>
						  <li><a href='#' title='Rate this 2 stars out of 5' class='two-stars'>2</a></li>
						  <li><a href='#' title='Rate this 3 stars out of 5' class='three-stars'>3</a></li>
						  <li><a href='#' title='Rate this 4 stars out of 5' class='four-stars'>4</a></li>
						  <li><a href='#' title='Rate this 5 stars out of 5' class='five-stars'>5</a></li>
						</ul>
						
						<div class="house-dashboard-meta">4.5 <br/>
							<span>MY LANDLORD RANK</span>
						</div>
						
						
						<div class="clear"></div>
						<div class="house-dashboard-details">
							
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
						
						<div class="house-dashboard-images">
							<div class="house-dashboard-meta">
								<img src="img/houses/thumb/small1.jpg" class="house-thumb-small" />
								<img src="img/houses/thumb/small2.jpg" class="house-thumb-small" />
								<img src="img/houses/thumb/small3.jpg" class="house-thumb-small" />
								<div class="clear"></div>
								<span>More Images</span>
							</div>
							
						</div>
						
						<div class="house-dashboard-residents">
							<div class="house-dashboard-meta">
								<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
								<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
								<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
								<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
								<img src="img/blank_profile.png" alt="profile" width="50" class="house-thumb-small"/>
								<div class="clear"></div>
								<span>Current Residents</span>
							</div>
							
						</div>
					
					
					</div>
					
					
				</div>
				
				<div id="past-residences">
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
					
				
				
				</div>
			
			
			</div>
		
			<div class="clear"></div>
			
			<div class="col-330">
				<h1>My Favorites</h1>
				
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
			
			<div class="col-630">
				<h1>Compare Favorites</h1>
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
				
				
				
			
			
			</div>
		
			<div class="clear"></div>
		</div>
		
		
		<?php getFooter(); ?>