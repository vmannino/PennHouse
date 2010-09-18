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