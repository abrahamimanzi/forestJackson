
		<div class="header">
			<div class="header-main">
				<div class="container">
					<div class="col-md-2 hidden-xs" style="padding-left: 0; margin-left: -50px;">
						<a href="index.php"><img class="img-responsive" src="img/fj-logo.jpg" alt="Forest Jackson" style="max-width: 75%;padding: 17px;"></a>
					</div>
					<nav class="navbar navbar-default col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1 class="visible-xs"><a  href="index.php">Forrest Jackson<span>Properties</span></a></h1>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left: 0; padding-right: 0;">
							<ul class="nav navbar-nav navbar-left">
									<li class="<?php if ($page === 'home') {echo "active";} ?>"><a href="index.php">Home</a></li>
									<li class="<?php if ($page === 'neighbourhood') {echo "active";} ?>"><a href="neighbourhood.php">Neighbourhood Guide</a></li>
									<li><a href="property-management.php">Property Management</a></li>
									<li><a href="whyUs.php">The Team</a></li>
									<li><a href="contactUs.php">Contact Us</a></li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Currency<span class="caret"></span></a>
										<ul class="dropdown-menu">
									<li><a href="#">RWF</a></li>
									<li><a href="#">USD</a></li>
										</ul>
									</li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Other Services<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="http://www.woodhabitatrwanda.com/">Wood Habitat</a></li>
											<li><a href="photoGallery.php">Photo Gallery</a></li>
											<!-- <li><a href="equipmentRentals.php">Equipment Rental</a></li> -->
										</ul>
									</li>
							  </ul>
						</div>

						<div class="portfolio-agileinfo">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist" data-aos="zoom-in">
									<li style="margin-left: 30px;" role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Rentals</a></li>
									<li role="presentation"><a href="#teach" role="tab" id="teach-tab" data-toggle="tab" aria-controls="teach">Sales</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="book-form">
											<form action="#" method="POST">
												<div class="col-md-3 col-xs-12 form-date-w3-agileits" style="padding-right: 0;">
														<!-- <label><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label> -->
														<select name="property_location" class="form-control">
															<option value="" selected="selected">Location</option>
															<!-- <option selected="selected" hidden="hidden">Location</option> -->
															<optgroup style="color:#9b635e;" label="Most Popular">

																<option>Kagugu</option>
																<option>Kacyiru</option>
																<option>Kibagabaga</option>
																<option>Kimihurura</b></option>
																<option>Kiyovu</option>
																<option>Gacuriro</option>
																<option>Nyarutarama</option>
																<option>Rugando</option>
															</optgroup>
															<optgroup style="color:#9b635e;" label="Others">
																<option>Bugesera</option>
																<option>Bumbogo</option>
																<option>Gikondo</option>
																<option>Gishushu</option>
																<option>Gisozi</option>
																<option>Kabeza</option>
																<option>Kicukiro</option>
																<option>Kisimenti</option>
																<option>Kanombe</option>
																<option>Muhima</option>
																<option>Niboye</option>
																<option>Nyarugenge</option>
																<option>Nyanza</option>
																<option>Nyamirambo</option>
																<option>Remera</option>
																<option>Rugando</option>
															</optgroup>
														</select>
												</div>
												<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_min_bedrooms" class="form-control">
															<option value="" selected="selected" >Min. Bedrooms</option>
															<!-- <option selected="selected" disabled="disabled" hidden="hidden">Min. Bedrooms</option> -->
									                        <option>1</option>
									                        <option>2</option>
									                        <option>3</option>
									                        <option>4</option>
														</select>
												</div>
												<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_type" class="form-control">
															<option value="" selected="selected" >Property Type</option>
															<!-- <option selected="selected" disabled="disabled" hidden="hidden">Property Type</option> -->
									                        <option>Residential</option>
									                        <option>Commercial</option>
									                        <option>Luxury Properties</option>
									                        <option>Plots</option>
														</select>
												</div>
												<!-- <div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
													<input name="property_id" type="text" placeholder="Property ID" >
												</div> -->
												<!-- <div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
													<input name="property_id" type="text" placeholder="Property ID" >
												</div> -->
												<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
													<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
													<input name="property_max_price" type="text" placeholder="Max.Price ($)" >
													<!-- <input name="property_max_price" type="text" placeholder="Max. Price" required=""> -->
												</div>
												<div class="col-md-3 col-xs-12 form-left-agileits-submit">
													  <input type="submit" value="Find Property" style="margin-top: 0;">
												</div>
												<div class="clearfix"></div>
												<input type="text" name="search" hidden>
											</form>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
										<div class="book-form">
										   <form action="" method="POST">
												<div class="col-md-3 col-xs-12 form-date-w3-agileits" style="padding-right: 0;">
														<!-- <label><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label> -->
														<select name="property_location" class="form-control">
															<option value="" selected="selected" >Location</option>
															<!-- <option selected="selected" hidden="hidden">Location</option> -->
															<option value="">All Location</option>
															<optgroup style="color:#9b635e;" label="Most Popular">

																<option>Kagugu</option>
																<option>Kacyiru</option>
																<option>Kibagabaga</option>
																<option>Kimihurura</b></option>
																<option>Kiyovu</option>
																<option>Gacuriro</option>
																<option>Nyarutarama</option>
																<option>Rugando</option>
															</optgroup>
															<optgroup style="color:#9b635e;" label="Others">
																<option>Bugesera</option>
																<option>Bumbogo</option>
																<option>Gikondo</option>
																<option>Gishushu</option>
																<option>Gisozi</option>
																<option>Kabeza</option>
																<option>Kicukiro</option>
																<option>Kisimenti</option>
																<option>Kanombe</option>
																<option>Muhima</option>
																<option>Niboye</option>
																<option>Nyarugenge</option>
																<option>Nyanza</option>
																<option>Nyamirambo</option>
																<option>Remera</option>
																<option>Rugando</option>
															</optgroup>
															    
														</select>
												</div> 
												<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_min_bedrooms" class="form-control">
															<!-- <option selected="selected" disabled="disabled" hidden="hidden">Min. Bedrooms</option> -->
															<option value="" selected="selected" >Min. Bedrooms</option>
															<!-- <option selected="selected" hidden="hidden">Min. Bedrooms</option> -->
									                        <option>1</option>
									                        <option>2</option>
									                        <option>3</option>
									                        <option>4</option>
														</select>
												</div>
												<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_type" class="form-control">
															<!-- <option selected="selected" disabled="disabled" hidden="hidden">Property Type</option> -->
															<option value="" selected="selected">Property Type</option>
															<!-- <option selected="selected" hidden="hidden">Property Type</option> -->
									                        <option>Residential</option>
									                        <option>Commercial</option>
									                        <option>Luxury Properties</option>
									                        <option>Plots</option>
														</select>
												</div>
												<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
													<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
													<input name="property_max_price" type="text" placeholder="Max.Price ($)" >
													<!-- <input name="property_max_price" type="text" placeholder="Max. Price" required=""> -->
												</div>
												<!-- <div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
														<input name="property_id" type="text" placeholder="Property ID" >
														<input name="property_id" type="text" placeholder="Property ID" required="">
												</div> -->
												<div class="col-md-3 col-xs-12 form-left-agileits-submit">
													  <input type="submit" value="Find Property" style="margin-top: 0;">
												</div>
												<div class="clearfix"></div>
												<input type="text" name="searchsales" hidden>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>	
					</nav>
				 	<div class="clearfix"> </div>
			   	</div>
			</div>
		</div>