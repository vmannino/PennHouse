<?php 
	include_once("functions.php");
	getHeader("DASHBOARD","Dashboard");
?>



		
		<div id="content"> 

			
			<div class="col-330">
				
		

				<?php
				 $cookie=getCookie();
				$user = json_decode(file_get_contents(
    'https://graph.facebook.com/me?access_token=' .
    $cookie['access_token']));
				
				
                echo "<h1>Welcome ".preg_replace("/ .*$/",'',$user->name)."!</h1>";
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
					
					<hr class="custom-rule vertical-space"/>
					<div class="house-dashboard">
						<img src="img/houses/thumb/example.jpg" class="house-thumb-large" />
						<div class="house-dashboard-meta">
							<h2>4211 Spruce Street</h2>
							<span>Address</span>
						</div>
						
						<div class="house-dashboard-meta">
							Off-Campus Management<br/>
							<span>My Landlord</span>
						</div>
						
						<div class="house-dashboard-ranking">
							<div class="house-dashboard-meta">
								<div id="rank-house">
									<img src="img/star.png" class="star" alt="star"/>
									<div id="rank-house-slider" style="width: 100px"></div>
								</div>
								<span>MY HOUSE RANK</span>
							</div>
							<div class="house-dashboard-meta">
								<div id="rank-landlord">
									<img src="img/star.png" class="star" alt="star"/>
									<div id="rank-landlord-slider" style="width: 20px"></div>
								</div>
								<span>MY LANDLORD RANK</span>
							</div>
						
						
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
						<div class="clear"></div>
					
					</div>
					
					
				</div>
				
				<div id="past-residences">
					<div class="house-result hovering">
<<<<<<< HEAD
=======
						<img src="img/houses/thumb/example.jpg" class="house-thumb" />
						<div class="house-result-meta">
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
						
						
						
						<div class="house-dashboard-meta">4.5 <br/>

							<span>MY LANDLORD RANK</span>
						</div>
>>>>>>> d49e50ac1b33e6d8bc8ab110595ac53d3316fc2e
						
							<div class="house-result-options">
								
								
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
						<div class="house-result hovering">
						
							<div class="house-result-options">
								
								
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
						
										
				</div>
			
			
			</div>

			<div class="clear"></div>
			
			<div class="col-330">
				<h1>My Favorites</h1>

				
				<div class="house-favorite">
					<div class="house-favorite-options">
						<div class="house-result-meta">
							<img src="img/fav.png" class="fav" alt="fav" title="Remove this House From Your Favorites"/>
							<span>fav</span>
						</div>
					
					</div>
					
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
					<div class="house-favorite-options">
						<div class="house-result-meta">
							<img src="img/fav.png" class="fav" alt="fav" title="Remove this House From Your Favorites"/>
							<span>fav</span>
						</div>
					
					</div>
					
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
					<div class="house-favorite-options">
						<div class="house-result-meta">
							<img src="img/fav.png" class="fav" alt="fav" title="Remove this House From Your Favorites"/>
							<span>fav</span>
						</div>
					
					</div>
					
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
					<div class="house-favorite-options">
						<div class="house-result-meta">
							<img src="img/fav.png" class="fav" alt="fav" title="Remove this House From Your Favorites"/>
							<span>fav</span>
						</div>
					
					</div>
					
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
				<?php $favoritesArray=printFavorites(); ?>
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
                    <?php 
					foreach ($favoritesArray as $favorite){
						$houseObject=mysql_fetch_object(mysql_query("SELECT * FROM houses WHERE hid='".$favorite."'"));  
				$houseImg=explode(',',$houseObject->images);
				
						if($key%2==1)
							echo '<tr class="odd">';
						else 
							echo '<tr>';
							
							echo '<td><img width="80" height="40" src="img/houses/thumb/'.$houseImg[0].'" class="house-thumb" /></td>';
							echo '<td>'.$houseObject->title.'</td>';
							echo '<td>'.$houseObject->avg_rank.'</td>';
							echo '<td>$'.$houseObject->avg_rent.'</td>';
							echo '<td>'.$houseObject->bedrooms.'</td>';
							echo '<td>$'.$houseObject->total_rent.'</td>';
							echo '<td>'.$houseObject->ll_title.'</td>';
							echo '<td>'.$houseObject->ll_avg_rank.'</td>';
							echo '</tr>';
					}
					
					?>
						
						
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