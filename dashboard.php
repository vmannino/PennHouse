<?php 
	include_once("functions.php");
	getHeader("DASHBOARD","Dashboard");
?>



		
		<div id="content"> 

			
			<div class="col-330">
				<?php
				getCookie();
				$user = json_decode(file_get_contents(
    'https://graph.facebook.com/me?access_token=' .
    $cookie['access_token']));
				
				
                
				echo '<img src="http://graph.facebook.com/'.$user->id.'/picture?type=large" alt="profile" width="200" class="profile"/>';
				echo '<h4>'.$user->name.'</h4>';
				?>
				<a id="privacy-settings-button" href="#privacy-settings" class="button bluebutton small">Edit Privacy Settings</a>
				<a id="logout-button" href="#logout" class="button bluebutton small">Logout</a>
				
				

			</div>
			
			<div id="dashboard-main">
				<ul>
					<li><a href="#current-residence">Current Residence</a></li>
					<li><a href="#past-residences">Past Residences</a></li>
				</ul>
				
				<div id="current-residence">
				
					<a id="edit-residence-button" href="#edit-residence" class="button bluebutton small">Edit Current Residence</a>
					<a id="edit-review-button" href="#edit-review" class="button bluebutton small">Edit My Review</a>
					<a id="edit-images-button" href="#edit-images" class="button bluebutton small">Edit Images</a>
					<a id="edit-landlord-button" href="#edit-landlord" class="button bluebutton small">Edit My Landlord Review</a>
					
					
					
					
				</div>
				
				<div id="past-residences">
					<div class="house-result hovering">
						<img src="img/houses/thumb/example.jpg" class="house-thumb" />
						<div class="house-result-meta">
							<h2>4211 Spruce Street</h2>
<<<<<<< HEAD
							<h3><span>10</span> Bedrooms | <span>$6,500</span>/month</h3>
=======
							<span>Address</span>
						</div>
						<div class="house-dashboard-meta">4.5 <br/>
							<span>MY RANK</span>
						</div>
						<div class="house-dashboard-meta">
							Off-Campus Management<br/>
							<span>My Landlord</span>
						</div>
						
						
						
						<div class="house-dashboard-meta">4.5 <br/>
							<span>MY LANDLORD RANK</span>
>>>>>>> 161826410f99473a3edd346ff5c6f8886f36c9fe
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
					<hr class="custom-rule" />
				
				
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
		
		
		
		<!-- Fancybox Divs -->
		
		<div style="display: none;">
			<div id="logout" class="fancybox-style" style="">
				<h1>Are you sure you want to logout?</h1>
			</div>
		</div>
		
		<div style="display: none;">
			<div id="privacy-settings" class="fancybox-style" style="">
				<h1>Privacy Settings</h1>
			</div>
		</div>
		
		<div style="display: none;">
			<div id="edit-residence" class="fancybox-style" style="">
				<h1>Edit Current Residence</h1>
			</div>
		</div>
		
		<div style="display: none;">
			<div id="edit-review" class="fancybox-style" style="">
				<h1>Edit Current Residence Review</h1>
			</div>
		</div>
		
		<div style="display: none;">
			<div id="edit-images" class="fancybox-style" style="">
				<h1>Edit Images for Current Residence</h1>
			</div>
		</div>
		
		<div style="display: none;">
			<div id="edit-landlord" class="fancybox-style" style="">
				<h1>Edit Landlord Review</h1>
			</div>
		</div>
		
		
		
		<!-- End Fancybox Divs -->
		
		
		
		
		
		
		<?php getFooter(); ?>