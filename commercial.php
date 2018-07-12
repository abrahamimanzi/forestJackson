<?php
	require_once 'core/config.php';
	require_once 'core/dbClass.php';
	$db = new database($pdo);
	$rows = $db->getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Commercial</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"></script>
	<link rel="icon" href="img/logo forrest-01.png" type="image/png" sizes="16x16">
			
	<!-- for banner css files -->
	<link rel="stylesheet" type="text/css" href="css/zoomslider.html" /><!--zoomslider css -->
	<script type="text/javascript" src="js/modernizr-2.6.2.min.html"></script><!--modernizer css -->
	<!-- //for banner css files -->
		
	<link href="css/carousel.html" type="text/css" rel="stylesheet" media="all"><!--for team carousel css --> 
	 
	<link href="css/jQuery.lightninBox.html" rel="stylesheet" type="text/css" media="all" /><!-- for portfolio lightninBox css -->

	<!-- custom-theme css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style-mc.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //custom-theme css files-->

	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- //font-awesome-icons -->

	<!-- googlefonts -->
	<link href="http://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //googlefonts -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121313035-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-121313035-1');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '169103337281575');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=169103337281575&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->


</head>
<body>

	<!--/main-header-->
	<div>
		<div class="demo-inner-content">
	
			<!--/banner-info-->
			<div class="header">
				<div class="header-main">
					<div class="container">
						<div class="col-md-2 hidden-xs">
							<a href="index.php"><img class="img-responsive" src="img/fj-logo.jpg" alt="Forest Jackson" style="width: 120px;"></a>
						</div>
						<nav class="navbar navbar-default col-md-10">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1 class="visible-xs"><a  href="index.php">Forest Jackson<span>Properties</span></a></h1>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left: 0; padding-right: 0;">
								<ul class="nav navbar-nav navbar-left">
										<li><a href="index.php">Home</a></li>
										<li><a href="neighbourhood.php">Neighbourhood Guide</a></li>
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
												<!--/<li><a href="#">Equipment Rental</a></li>-->
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
												<form action="#" method="post">
													<div class="col-md-2 col-xs-12 form-date-w3-agileits" style="padding-right: 0;">
														<select name="property_location" class="form-control">
															<option selected="selected" disabled="disabled" hidden="hidden">Location</option>
															<option>Gacuriro</option>
															<option>Gishushu</option>
															<option>Gisozi</option>
															<option>Kacyiru</b></option>
															<option>Kagugu</option>
															<option>Kanombe</option>
															<option>Kibagabaga</option>
															<option>Kicukiro</option>
															<option>Kimihurura</option>
															<option>Kimironko</option>
															<option>Kiyovu</option>
															<option>Nyarutarama</option>
															<option>Rebero</option>
															<option>Remera</option>
															<option>Rugando (Kimihurura)</option>
														</select>
													</div>
													<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input name="property_max_price" type="text" placeholder="Max. Price ($)" >
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_sq_meter" class="form-control">
															<option selected="selected" disabled="disabled" hidden="hidden">Size</option>
															<option>20/30 sq meter</option>
															<option>40/30 sq meter</option>
									                        
														</select>
													</div>
													<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input name="property_id" type="text" placeholder="Property ID">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="padding: .7em;font-size: 14px;background-color:#196F3D;color: #fff;">More Filters</button>
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-submit">
														  <input type="submit" value="Find Property" style="margin-top: 0;">
													</div>
													<div class="clearfix"></div>
													<input type="text" name="search" hidden>
												</form>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
											<div class="book-form">
												<form action="#" method="post">
													<div class="col-md-2 col-xs-12 form-date-w3-agileits" style="padding-right: 0;">
														<select name="property_location" class="form-control">
															<option selected="selected" disabled="disabled" hidden="hidden">Location</option>
															<option>Gacuriro</option>
															<option>Gishushu</option>
															<option>Gisozi</option>
															<option>Kacyiru</b></option>
															<option>Kagugu</option>
															<option>Kanombe</option>
															<option>Kibagabaga</option>
															<option>Kicukiro</option>
															<option>Kimihurura</option>
															<option>Kimironko</option>
															<option>Kiyovu</option>
															<option>Nyarutarama</option>
															<option>Rebero</option>
															<option>Remera</option>
															<option>Rugando (Kimihurura)</option>
														</select>
													</div>
													<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input name="property_max_price" type="text" placeholder="Max. Price ($) " required="">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_sq_meter" class="form-control">
															<option selected="selected" disabled="disabled" hidden="hidden">Size</option>
															<option>20/30 sq meter</option>
															<option>40/30 sq meter</option>

														</select>
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select name="property_type" class="form-control">
															<option selected="selected" disabled="disabled" hidden="hidden">Property Type</option>
															<option>Residential</option>
															<option>Commercial</option>
															<option>Luxury Properties</option>
															<option>Plots</option>
														</select>
													</div>
													<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input name="property_id" type="text" placeholder="Property ID" required="">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-submit">
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


		</div>
	</div>
	<!--/banner-section-->
	<div class="container">
		<div id="demo" class="collapse" style="border-top: 1px solid #bdbdbd; border-bottom: 1px solid #bdbdbd;  ">
			<br>
			<div class="row">
				<div class="col-md-3">
					<h4>Property Type </h4>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Garden 
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Single Storey   
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Two - Storey building   
					</label>
				</div>
				<div class="col-md-3">
					<h4>Property Details </h4> 
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Fire Escape      
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Elevator        
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Paved Street          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Retail Space          
					</label>
				</div>
				<div class="col-md-3">
					<h4>Additional Features</h4>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Industrial Space 
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Office Space   
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Parking Space more than 10   
					</label>
				</div>
				<div class="col-md-3">
					<h4>Other</h4>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Parking Space more than 20   
					</label>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div id="searchResults"></div>
		<?php
			if(isset($_POST['search'])){
				$location = $_POST['property_location'];
				$max_price = $_POST['property_max_price'];
				$min_bedrooms = $_POST['property_min_bedrooms'];
				$property_id = $_POST['property_id'];
				// $location = $_POST['property_location'];
				// $location = $_POST['property_location'];
				// $location = $_POST['property_location'];
				// echo $location;
				// echo $max_price;
				// echo $min_bedrooms;
				// echo $property_id;




				if ($location!='') {
					$terms = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `name`="'.$location.'" ORDER BY `term_id`');
					$terms->execute();
					while($row = $fetch = $terms->fetch(PDO::FETCH_ASSOC)) {
						$term_id = $row['term_id'];
						$slug = $row['slug'];
						$location = $row['name'];


						$term = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_id`="'.$term_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
							$term->execute();
						while($row = $fetch = $term->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];
							$term_id = $row['term_id'];
							// echo $term_taxonomy_id;

				     //  				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$prop_id.'" ORDER BY `object_id`');
									// $qu->execute();
									// 	while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
									// 	$term_taxonomy_id = $row['term_taxonomy_id'];

				     //      				$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_status"  ORDER BY `term_taxonomy_id`');
				    	// 				$que->execute();
				   		// 				while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
				    	// 					$term_taxonomy_id = $row['term_taxonomy_id'];
				    	// 					$term_id = $row['term_id'];
				    	// 					// echo $term_taxonomy_id;
				    	// 					$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
				     //    					$quer->execute();
				     //   						while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
				     //    						$term_id = $row['term_id'];
				     //    						$slug = $row['slug'];
				     //    						$status = $row['name'];
				     //    					}
				    	// 				}
									// }
					
							$rela = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" ORDER BY `object_id` limit 10');
							$rela->execute();
							while($row = $fetch = $rela->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$object_id = $row['object_id'];

								$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" AND ID IN (SELECT object_id FROM wpbb_term_relationships WHERE object_id = "'.$object_id.'" ) ORDER BY `ID` DESC');
								// $prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" ORDER BY `ID` DESC limit 12');
								$prop->execute();
								while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
									$p_id = $row['ID'];
									$title = $row['post_title'];
			              			if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
									$title = $substr;

									$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
									$postm->execute();
									while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_bedrooms = $row['meta_value'];
									}


									$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
									$bath->execute();
									while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_bathrooms = $row['meta_value'];
									}


									$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
									$imag->execute();
									while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
										$id = $row['meta_id'];
										$_thumbnail_id = $row['meta_value'];

										$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
										$image->execute();
										while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
											$img=$row['guid'];
											$imgs = explode(".jpg", $img);
											$piece1=$imgs[0];
											$piece2=$imgs[1];
											$imgr=$piece1.'-800x450'.$piece2.'.jpg';
											$imgp=$piece1.'-300x225'.$piece2.'.jpg';
											$thumb=$piece1.'-180x130'.$piece2.'.jpg';
										}
									}

									$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
									$loc->execute();
									while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];

										$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
										$que->execute();
										while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
											$term_taxonomy_id = $row['term_taxonomy_id'];
											$term_id = $row['term_id'];
											$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
											$quer->execute();
											while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
												$term_id = $row['term_id'];
												$slug = $row['slug'];
												$location_name = $row['name'];
											}
										}
									}


									$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
									$pri->execute();
										while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_price = $row['meta_value'];
									}
									// echo $_price.'<br>';
									// echo $location_name.'<br>';
									// echo $img.'<br>';
									// echo $_bathrooms.'<br>';
									// echo $_bedrooms.'<br>';
									// echo $p_id.' '.$title.'<br><br>';

									// echo $img.'<br>';
									// echo $title.'<br>';
									// echo $prop_id.'<br>';
									// echo $location_name.'<br>';
									// echo $_bedrooms.'<br>';
									// echo $_bathrooms.'<br>';
									// echo $_price.'<br><br>';

									$forrenta = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id` limit 12');
									$forrenta->execute();
									while($row = $fetch = $forrenta->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];
										$o_id = $row['object_id'];
									?>
									<div class="col-sm-6 col-md-4 property">
										<div class="thumbnail shadow-depth-1">
											<div class="caption">
												<a class="link" href="properties.php?url=<?=$p_id?>">
													<img src="<?=$imgp?>" alt="picture-01" class="rule">
												</a>
												<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
												<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
												<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
												<div class="row rowz">
													<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
														<div class="col-md-6 col-lg-6">
															<img src="img/icon-01.png" alt="icon-01" class="rules">
															<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
														</div>
														<div class="col-md-6 col-lg-6">
															<img src="img/icon-02.png" alt="icon-02" class="rules">
															<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
														</div>
													</div>
												</div>
												<hr class="rudes">
												<div class="row">
													<div class="col-md-12">
														<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
														<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
													</div>
												</div>
											</div>
										</div>
									</div>


									<?php
									}

								}
							}

						}
					}
				}elseif ($location=='' AND $property_id=='') {

					$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `meta_key`="_bedrooms" AND `meta_value`>="'.$min_bedrooms.'" ORDER BY `meta_id` DESC limit 12');
					$postm->execute();
					while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
						$postmeta_id = $row['meta_id'];
						$pos_id = $row['post_id'];
						$_bedrooms = $row['meta_value'];
						// echo $pos_id.' '.$_bedrooms.'<br>';

						$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$pos_id.'" AND `post_type`="noo_property" AND `post_status`="publish"  ORDER BY `ID` DESC');

						$prop->execute();
						while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
							$p_id = $row['ID'];
							$title = $row['post_title'];
							if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
							$title = $substr;


							$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
							$bath->execute();
							while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_bathrooms = $row['meta_value'];
							}

							$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
							$loc->execute();
							while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];

								$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
								$que->execute();
								while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
									$term_taxonomy_id = $row['term_taxonomy_id'];
									$term_id = $row['term_id'];
									$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
									$quer->execute();
									while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
										$term_id = $row['term_id'];
										$slug = $row['slug'];
										$location_name = $row['name'];
									}
								}
							}

							$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
							$pri->execute();
								while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_price = $row['meta_value'];
							}

							$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
							$imag->execute();
							while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
								$id = $row['meta_id'];
								$_thumbnail_id = $row['meta_value'];

								$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
								$image->execute();
								while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
									$img=$row['guid'];
									$imgs = explode(".jpg", $img);
									$piece1=$imgs[0];
									$piece2=$imgs[1];
									$imgr=$piece1.'-800x450'.$piece2.'.jpg';
									$imgp=$piece1.'-300x225'.$piece2.'.jpg';
									$thumb=$piece1.'-180x130'.$piece2.'.jpg';
								}
							}
							// echo $p_id.' '.$_bedrooms.' '.$_bathrooms.' '.$location_name.' '.$_price.' '.$img.'<br>';

							

							$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
							$forsale->execute();
							while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$o_id = $row['object_id'];
								// echo $o_id.' <br>';

							?>
							<div class="col-sm-6 col-md-4 property">
								<div class="thumbnail shadow-depth-1">
									<div class="caption">
										<a class="link" href="properties.php?url=<?=$p_id?>">
											<img src="<?=$imgp?>" alt="picture-01" class="rule">
										</a>
										<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
										<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
										<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
										<div class="row rowz">
											<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
												<div class="col-md-6 col-lg-6">
													<img src="img/icon-01.png" alt="icon-01" class="rules">
													<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
												</div>
												<div class="col-md-6 col-lg-6">
													<img src="img/icon-02.png" alt="icon-02" class="rules">
													<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
												</div>
											</div>
										</div>
										<hr class="rudes">
										<div class="row">
											<div class="col-md-12">
											<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
												<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
											</div>
										</div>
									</div>
								</div>
							</div>


							<?php

							}
							

						}

					}

				}elseif ($property_id!='') {

					$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$property_id.'" AND `post_type`="noo_property" AND `post_status`="publish"  ORDER BY `ID` DESC');

					$prop->execute();
					while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
						$p_id = $row['ID'];
						$title = $row['post_title'];
							if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
							$title = $substr;


						$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
						$bath->execute();
						while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_bathrooms = $row['meta_value'];
						}

						$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
						$postm->execute();
						while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_bedrooms = $row['meta_value'];
						}

						$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
						$loc->execute();
						while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];

							$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
							$que->execute();
							while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$term_id = $row['term_id'];
								$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
								$quer->execute();
								while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
									$term_id = $row['term_id'];
									$slug = $row['slug'];
									$location_name = $row['name'];
								}
							}
						}

						$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
						$pri->execute();
							while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_price = $row['meta_value'];
						}

						$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
						$imag->execute();
						while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$_thumbnail_id = $row['meta_value'];

							$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
							$image->execute();
							while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
								$img=$row['guid'];
								$imgs = explode(".jpg", $img);
								$piece1=$imgs[0];
								$piece2=$imgs[1];
								$imgr=$piece1.'-800x450'.$piece2.'.jpg';
								$imgp=$piece1.'-300x225'.$piece2.'.jpg';
								$thumb=$piece1.'-180x130'.$piece2.'.jpg';
							}
						}
						// echo $p_id.' '.$_bedrooms.' '.$_bathrooms.' '.$location_name.' '.$_price.' '.$img.'<br>';

						

						$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
						$forsale->execute();
						while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];
							$o_id = $row['object_id'];
							// echo $o_id.' <br>';

						?>
						<div class="col-sm-6 col-md-4 property">
							<div class="thumbnail shadow-depth-1">
								<div class="caption">
									<a class="link" href="properties.php?url=<?=$p_id?>">
										<img src="<?=$imgp?>" alt="picture-01" class="rule">
									</a>
									<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
									<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
									<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
									<div class="row rowz">
										<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
											<div class="col-md-6 col-lg-6">
												<img src="img/icon-01.png" alt="icon-01" class="rules">
												<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
											</div>
											<div class="col-md-6 col-lg-6">
												<img src="img/icon-02.png" alt="icon-02" class="rules">
												<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
											</div>
										</div>
									</div>
									<hr class="rudes">
									<div class="row">
										<div class="col-md-12">
											<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
											<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
										</div>
									</div>
								</div>
							</div>
						</div>


						<?php

						}
						

					}
				}


			}elseif (isset($_POST['searchsales'])) {
				$location = $_POST['property_location'];
				$max_price = $_POST['property_max_price'];
				$min_bedrooms = $_POST['property_min_bedrooms'];
				$property_id = $_POST['property_id'];
				// $location = $_POST['property_location'];
				// $location = $_POST['property_location'];
				// $location = $_POST['property_location'];
				// echo $location;
				// echo $max_price;
				// echo $min_bedrooms;
				// echo $property_id;




				if ($location!='') {
					$terms = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `name`="'.$location.'" ORDER BY `term_id`');
					$terms->execute();
					while($row = $fetch = $terms->fetch(PDO::FETCH_ASSOC)) {
						$term_id = $row['term_id'];
						$slug = $row['slug'];
						$location = $row['name'];


						$term = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_id`="'.$term_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
							$term->execute();
						while($row = $fetch = $term->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];
							$term_id = $row['term_id'];

					
							$rela = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" ORDER BY `object_id` limit 10');
							$rela->execute();
							while($row = $fetch = $rela->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$object_id = $row['object_id'];

								$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" AND ID IN (SELECT object_id FROM wpbb_term_relationships WHERE object_id = "'.$object_id.'" ) ORDER BY `ID` DESC limit 12');
								// $prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" ORDER BY `ID` DESC limit 12');
								$prop->execute();
								while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
									$p_id = $row['ID'];
									$title = $row['post_title'];
										if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
										$title = $substr;

									$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
									$postm->execute();
									while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_bedrooms = $row['meta_value'];
									}


									$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
									$bath->execute();
									while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_bathrooms = $row['meta_value'];
									}


									$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
									$imag->execute();
									while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
										$id = $row['meta_id'];
										$_thumbnail_id = $row['meta_value'];

										$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
										$image->execute();
										while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
											$img=$row['guid'];
											$imgs = explode(".jpg", $img);
											$piece1=$imgs[0];
											$piece2=$imgs[1];
											$imgr=$piece1.'-800x450'.$piece2.'.jpg';
											$imgp=$piece1.'-300x225'.$piece2.'.jpg';
											$thumb=$piece1.'-180x130'.$piece2.'.jpg';
										}
									}

									$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
									$loc->execute();
									while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];

										$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
										$que->execute();
										while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
											$term_taxonomy_id = $row['term_taxonomy_id'];
											$term_id = $row['term_id'];
											$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
											$quer->execute();
											while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
												$term_id = $row['term_id'];
												$slug = $row['slug'];
												$location_name = $row['name'];
											}
										}
									}


									$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
									$pri->execute();
										while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_price = $row['meta_value'];
									}
									// echo $_price.'<br>';
									// echo $location_name.'<br>';
									// echo $img.'<br>';
									// echo $_bathrooms.'<br>';
									// echo $_bedrooms.'<br>';
									// echo $p_id.' '.$title.'<br><br>';

									// echo $img.'<br>';
									// echo $title.'<br>';
									// echo $prop_id.'<br>';
									// echo $location_name.'<br>';
									// echo $_bedrooms.'<br>';
									// echo $_bathrooms.'<br>';
									// echo $_price.'<br><br>';

									$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=101 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
									$forsale->execute();
									while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];
										$o_id = $row['object_id'];
									?>
									<div class="col-sm-6 col-md-4 property">
										<div class="thumbnail shadow-depth-1">
											<div class="caption">
												<a class="link" href="properties.php?url=<?=$p_id?>">
													<img src="<?=$imgp?>" alt="picture-01" class="rule">
												</a>
												<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
												<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
												<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
												<div class="row rowz">
													<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
														<div class="col-md-6 col-lg-6">
															<img src="img/icon-01.png" alt="icon-01" class="rules">
															<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
														</div>
														<div class="col-md-6 col-lg-6">
															<img src="img/icon-02.png" alt="icon-02" class="rules">
															<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
														</div>
													</div>
												</div>
												<hr class="rudes">
												<div class="row">
													<div class="col-md-12">
														<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
														<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<?php
									
									}

								}
							}

						}
					}
				}elseif ($location=='' AND $property_id=='') {

					$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `meta_key`="_bedrooms" AND `meta_value`>="'.$min_bedrooms.'" ORDER BY `meta_id` DESC limit 12');
					$postm->execute();
					while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
						$postmeta_id = $row['meta_id'];
						$pos_id = $row['post_id'];
						$_bedrooms = $row['meta_value'];
						// echo $pos_id.' '.$_bedrooms.'<br>';

						$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$pos_id.'" AND `post_type`="noo_property" AND `post_status`="publish"  ORDER BY `ID` DESC');

						$prop->execute();
						while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
							$p_id = $row['ID'];
							$title = $row['post_title'];
							if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
							$title = $substr;


							$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
							$bath->execute();
							while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_bathrooms = $row['meta_value'];
							}

							$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
							$loc->execute();
							while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];

								$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
								$que->execute();
								while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
									$term_taxonomy_id = $row['term_taxonomy_id'];
									$term_id = $row['term_id'];
									$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
									$quer->execute();
									while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
										$term_id = $row['term_id'];
										$slug = $row['slug'];
										$location_name = $row['name'];
									}
								}
							}

							$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
							$pri->execute();
								while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_price = $row['meta_value'];
							}

							$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
							$imag->execute();
							while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
								$id = $row['meta_id'];
								$_thumbnail_id = $row['meta_value'];

								$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
								$image->execute();
								while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
									$img=$row['guid'];
									$imgs = explode(".jpg", $img);
									$piece1=$imgs[0];
									$piece2=$imgs[1];
									$imgr=$piece1.'-800x450'.$piece2.'.jpg';
									$imgp=$piece1.'-300x225'.$piece2.'.jpg';
									$thumb=$piece1.'-180x130'.$piece2.'.jpg';
								}
							}
							// echo $p_id.' '.$_bedrooms.' '.$_bathrooms.' '.$location_name.' '.$_price.' '.$img.'<br>';

							

							$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=101 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
							$forsale->execute();
							while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$o_id = $row['object_id'];
								// echo $o_id.' <br>';

								?>
								<div class="col-sm-6 col-md-4 property">
									<div class="thumbnail shadow-depth-1">
										<div class="caption">
											<a class="link" href="properties.php?url=<?=$p_id?>">
												<img src="<?=$imgp?>" alt="picture-01" class="rule">
											</a>
											<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
											<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
											<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
											<div class="row rowz">
												<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
													<div class="col-md-6 col-lg-6">
														<img src="img/icon-01.png" alt="icon-01" class="rules">
														<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
													</div>
													<div class="col-md-6 col-lg-6">
														<img src="img/icon-02.png" alt="icon-02" class="rules">
														<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
													</div>
												</div>
											</div>
											<hr class="rudes">
											<div class="row">
												<div class="col-md-12">
													<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
													<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
												</div>
											</div>
										</div>
									</div>
								</div>


								<?php

							}

						}

					}

				}elseif ($property_id!='') {


					$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$property_id.'" AND `post_type`="noo_property" AND `post_status`="publish"  ORDER BY `ID` DESC');

					$prop->execute();
					while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
						$p_id = $row['ID'];
						$title = $row['post_title'];
							if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
							$title = $substr;


						$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
						$bath->execute();
						while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_bathrooms = $row['meta_value'];
						}

						$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
						$postm->execute();
						while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_bedrooms = $row['meta_value'];
						}

						$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
						$loc->execute();
						while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];

							$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
							$que->execute();
							while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$term_id = $row['term_id'];
								$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
								$quer->execute();
								while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
									$term_id = $row['term_id'];
									$slug = $row['slug'];
									$location_name = $row['name'];
								}
							}
						}

						$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
						$pri->execute();
							while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_price = $row['meta_value'];
						}

						$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
						$imag->execute();
						while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$_thumbnail_id = $row['meta_value'];

							$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
							$image->execute();
							while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
								$img=$row['guid'];
								$imgs = explode(".jpg", $img);
								$piece1=$imgs[0];
								$piece2=$imgs[1];
								$imgr=$piece1.'-800x450'.$piece2.'.jpg';
								$imgp=$piece1.'-300x225'.$piece2.'.jpg';
								$thumb=$piece1.'-180x130'.$piece2.'.jpg';
							}
						}
						// echo $p_id.' '.$_bedrooms.' '.$_bathrooms.' '.$location_name.' '.$_price.' '.$img.'<br>';

						

						$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=101 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
						$forsale->execute();
						while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];
							$o_id = $row['object_id'];
							// echo $o_id.' <br>';

							?>
							<div class="col-sm-6 col-md-4 property">
								<div class="thumbnail shadow-depth-1">
									<div class="caption">
										<a class="link" href="properties.php?url=<?=$p_id?>">
											<img src="<?=$imgp?>" alt="picture-01" class="rule">
										</a>
										<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
										<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
										<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
										<div class="row rowz">
											<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
												<div class="col-md-6 col-lg-6">
													<img src="img/icon-01.png" alt="icon-01" class="rules">
													<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
												</div>
												<div class="col-md-6 col-lg-6">
													<img src="img/icon-02.png" alt="icon-02" class="rules">
													<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
												</div>
											</div>
										</div>
										<hr class="rudes">
										<div class="row">
											<div class="col-md-12">
												<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
												<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php

						}

					}
				}

			}elseif (isset($_POST['searchadvanced'])) {

				if(!isset($_POST['property_features'])){
					$property_features= '';
				}else{
					$property_features = $_POST['property_features'];
				}

				if(!isset($_POST['property_details'])){
					$property_details= '';
				}else{
					$property_details = $_POST['property_details'];
					// if (count($property_details)) {
					// 	$property_details = json_encode($property_details);
					// }
				}
				// $property_type = $_POST['property_type'];
				if(!isset($_POST['property_type'])){
					$property_type= '';
				}else{
					$property_type = $_POST['property_type'];
				}

				if(!isset($_POST['property_other'])){
					$property_other= '';
				}else{
					$property_other = $_POST['property_other'];
				}

				// echo $property_type.'<br>';
				// echo $property_details.'<br>';
				// echo $property_features.'<br>';
				// echo $property_other.'<br>';

				// echo "string<br><br>";

				if ($property_type!='') {

					$terms = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `name`="'.$property_type.'" ORDER BY `term_id`');
					$terms->execute();
					while($row = $fetch = $terms->fetch(PDO::FETCH_ASSOC)) {
						$term_id = $row['term_id'];
						$slug = $row['slug'];
						$property_type = $row['name'];


						$term = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_id`="'.$term_id.'" AND `taxonomy`="property_category"  ORDER BY `term_taxonomy_id`');
							$term->execute();
						while($row = $fetch = $term->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];
							$term_id = $row['term_id'];

					
							$rela = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" ORDER BY `object_id` limit 10');
							$rela->execute();
							while($row = $fetch = $rela->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$object_id = $row['object_id'];

								$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" AND ID IN (SELECT object_id FROM wpbb_term_relationships WHERE object_id = "'.$object_id.'" ) ORDER BY `ID` DESC limit 12');
								// $prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" ORDER BY `ID` DESC limit 12');
								$prop->execute();
								while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
									$p_id = $row['ID'];
									$title = $row['post_title'];
									if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
										$title = $substr;

									$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
									$postm->execute();
									while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_bedrooms = $row['meta_value'];
									}


									$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
									$bath->execute();
									while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_bathrooms = $row['meta_value'];
									}


									$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
									$imag->execute();
									while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
										$id = $row['meta_id'];
										$_thumbnail_id = $row['meta_value'];

										$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
										$image->execute();
										while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
											$img=$row['guid'];
											$imgs = explode(".jpg", $img);
											$piece1=$imgs[0];
											$piece2=$imgs[1];
											$imgr=$piece1.'-800x450'.$piece2.'.jpg';
											$imgp=$piece1.'-300x225'.$piece2.'.jpg';
											$thumb=$piece1.'-180x130'.$piece2.'.jpg';
										}
									}

									$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
									$loc->execute();
									while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];

										$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
										$que->execute();
										while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
											$term_taxonomy_id = $row['term_taxonomy_id'];
											$term_id = $row['term_id'];
											$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
											$quer->execute();
											while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
												$term_id = $row['term_id'];
												$slug = $row['slug'];
												$location_name = $row['name'];
											}
										}
									}


									$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
									$pri->execute();
										while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
										$postmeta_id = $row['meta_id'];
										$_price = $row['meta_value'];
									}
									// echo $_price.'<br>';
									// echo $location_name.'<br>';
									// echo $img.'<br>';
									// echo $_bathrooms.'<br>';
									// echo $_bedrooms.'<br>';
									// echo $p_id.' '.$title.'<br><br>';

									// echo $img.'<br>';
									// echo $title.'<br>';
									// echo $prop_id.'<br>';
									// echo $location_name.'<br>';
									// echo $_bedrooms.'<br>';
									// echo $_bathrooms.'<br>';
									// echo $_price.'<br><br>';

									// $forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'"  ORDER BY `object_id`');

									$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
									$forsale->execute();
									while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];
										$o_id = $row['object_id'];
										?>
										<div class="col-sm-6 col-md-4 property">
											<div class="thumbnail shadow-depth-1">
												<div class="caption">
													<a class="link" href="properties.php?url=<?=$p_id?>">
														<img src="<?=$imgp?>" alt="picture-01" class="rule">
													</a>
													<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
													<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
													<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
													<div class="row rowz">
														<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
															<div class="col-md-6 col-lg-6">
																<img src="img/icon-01.png" alt="icon-01" class="rules">
																<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
															</div>
															<div class="col-md-6 col-lg-6">
																<img src="img/icon-02.png" alt="icon-02" class="rules">
																<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
															</div>
														</div>
													</div>
													<hr class="rudes">
													<div class="row">
														<div class="col-md-12">
															<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
															<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php
									}

								}
							}

						}
					}


				}elseif ($property_details!='') {




					$perpage = 12;
					if(isset($_GET['page']) & !empty($_GET['page'])){
						$curpage = $_GET['page'];
					}else{
						$curpage = 1;
					}
					$start = ($curpage * $perpage) - $perpage;
					$PageSql = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id` IN (SELECT ID FROM `wpbb_posts` WHERE `ID`IN (SELECT post_id FROM wpbb_postmeta WHERE `meta_key`="'.$property_details.'" AND `meta_value`=1 AND `meta_key` LIKE "%_noo_property_feature%" ORDER BY `meta_id`) AND `post_type`="noo_property" AND `post_status`="publish" AND ID IN (SELECT object_id FROM wpbb_term_relationships WHERE object_id IN (SELECT post_id FROM wpbb_postmeta WHERE `meta_key`="'.$property_details.'" AND `meta_value`=1 AND `meta_key` LIKE "%_noo_property_feature%" ORDER BY `meta_id`) ) ORDER BY `ID`  DESC) AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id` ');
					$PageSql->execute();
					$totalres = $PageSql->rowCount();
					$endpage = ceil($totalres/$perpage);
					$startpage = 1;
					$nextpage = $curpage + 1;
					$previouspage = $curpage - 1;


					$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id` IN (SELECT ID FROM `wpbb_posts` WHERE `ID`IN (SELECT post_id FROM wpbb_postmeta WHERE `meta_key`="'.$property_details.'" AND `meta_value`=1 AND `meta_key` LIKE "%_noo_property_feature%" ORDER BY `meta_id`) AND `post_type`="noo_property" AND `post_status`="publish" AND ID IN (SELECT object_id FROM wpbb_term_relationships WHERE object_id IN (SELECT post_id FROM wpbb_postmeta WHERE `meta_key`="'.$property_details.'" AND `meta_value`=1 AND `meta_key` LIKE "%_noo_property_feature%" ORDER BY `meta_id`) ) ORDER BY `ID`  DESC) AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id` DESC LIMIT '.$start.', '.$perpage.'');
					$forsale->execute();
					while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
						$term_taxonomy_id = $row['term_taxonomy_id'];
						$p_id = $o_id = $row['object_id'];
						// echo $o_id.'<br>';

						$titles = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$p_id.'" ORDER BY `ID`');
						$titles->execute();
						while($row = $fetch = $titles->fetch(PDO::FETCH_ASSOC)) {
							$title = $row['post_title'];
							if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
								$title = $substr;
						}

						// number of bedrooms
						$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
						$postm->execute();
						while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_bedrooms = $row['meta_value'];
						}

						// number of bathrooms
						$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
						$bath->execute();
						while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_bathrooms = $row['meta_value'];
						}

						// image
						$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
						$imag->execute();
						while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$_thumbnail_id = $row['meta_value'];

							$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
							$image->execute();
							while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
								$img=$row['guid'];
								$imgs = explode(".jpg", $img);
								$piece1=$imgs[0];
								$piece2=$imgs[1];
								$imgr=$piece1.'-800x450'.$piece2.'.jpg';
								$imgp=$piece1.'-300x225'.$piece2.'.jpg';
								$thumb=$piece1.'-180x130'.$piece2.'.jpg';
							}
						}
						// location
						$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
						$loc->execute();
						while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];

							$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
							$que->execute();
							while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$term_id = $row['term_id'];
								$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
								$quer->execute();
								while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
									$term_id = $row['term_id'];
									$slug = $row['slug'];
									$location_name = $row['name'];
								}
							}
						}

						// price
						$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
						$pri->execute();
							while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
							$postmeta_id = $row['meta_id'];
							$_price = $row['meta_value'];
						}

						?>
						<div class="col-sm-6 col-md-4 property">
							<div class="thumbnail shadow-depth-1">
								<div class="caption">
									<a class="link" href="properties.php?url=<?=$p_id?>">
										<img src="<?=$imgp?>" alt="picture-01" class="rule">
									</a>
									<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
									<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
									<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
									<div class="row rowz">
										<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
											<div class="col-md-6 col-lg-6">
												<img src="img/icon-01.png" alt="icon-01" class="rules">
												<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
											</div>
											<div class="col-md-6 col-lg-6">
												<img src="img/icon-02.png" alt="icon-02" class="rules">
												<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
											</div>
										</div>
									</div>
									<hr class="rudes">
									<div class="row">
										<div class="col-md-12">
											<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
											<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php
					}
					?>

					<div class="col-md-12">
						<nav aria-label="Page navigation" class="pull-right">
							<ul class="pagination">
								<?php if($curpage != $startpage){ ?>
								<li class="page-item">
									<a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">First</span>
									</a>
								</li>
								<?php } ?>
								<?php if($curpage >= 2){ ?>
								<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
								<?php } ?>
								<li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
								<?php if($curpage != $endpage){ ?>
								<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
								<li class="page-item">
									<a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Last</span>
									</a>
								</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				<?php


				}elseif ($property_features!='') {

					$qu = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `meta_key`="'.$property_features.'" AND `meta_value`=1 AND `meta_key` LIKE "%_noo_property_feature%" ORDER BY `meta_id`');
					$qu->execute();
					while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
						$meta_id = $row['meta_id'];
						$meta_key = $row['meta_key'];
						$post_id = $row['post_id'];

						// echo $post_id.'<br>';
						$prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$post_id.'" AND `post_type`="noo_property" AND `post_status`="publish" AND ID IN (SELECT object_id FROM wpbb_term_relationships WHERE object_id = "'.$post_id.'" ) ORDER BY `ID` DESC limit 12');
						// $prop = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish" ORDER BY `ID` DESC limit 12');
						$prop->execute();
						while($row = $fetch = $prop->fetch(PDO::FETCH_ASSOC)) {
							$p_id = $row['ID'];
							$title = $row['post_title'];
							if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
								$title = $substr;

							$postm = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
							$postm->execute();
							while($row = $fetch = $postm->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_bedrooms = $row['meta_value'];
							}


							$bath = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
							$bath->execute();
							while($row = $fetch = $bath->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_bathrooms = $row['meta_value'];
							}


							$imag = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
							$imag->execute();
							while($row = $fetch = $imag->fetch(PDO::FETCH_ASSOC)) {
								$id = $row['meta_id'];
								$_thumbnail_id = $row['meta_value'];

								$image = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
								$image->execute();
								while($row = $fetch = $image->fetch(PDO::FETCH_ASSOC)) {
									$img=$row['guid'];
									$imgs = explode(".jpg", $img);
									$piece1=$imgs[0];
									$piece2=$imgs[1];
									$imgr=$piece1.'-800x450'.$piece2.'.jpg';
									$imgp=$piece1.'-300x225'.$piece2.'.jpg';
									$thumb=$piece1.'-180x130'.$piece2.'.jpg';
								}
							}

							$loc = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" ORDER BY `object_id`');
							$loc->execute();
							while($row = $fetch = $loc->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];

								$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
								$que->execute();
								while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
									$term_taxonomy_id = $row['term_taxonomy_id'];
									$term_id = $row['term_id'];
									$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
									$quer->execute();
									while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
										$term_id = $row['term_id'];
										$slug = $row['slug'];
										$location_name = $row['name'];
									}
								}
							}


							$pri = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$p_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
							$pri->execute();
								while($row = $fetch = $pri->fetch(PDO::FETCH_ASSOC)) {
								$postmeta_id = $row['meta_id'];
								$_price = $row['meta_value'];
							}
							// echo $_price.'<br>';
							// echo $location_name.'<br>';
							// echo $img.'<br>';
							// echo $_bathrooms.'<br>';
							// echo $_bedrooms.'<br>';
							// echo $p_id.' '.$title.'<br><br>';

							// echo $img.'<br>';
							// echo $title.'<br>';
							// echo $prop_id.'<br>';
							// echo $location_name.'<br>';
							// echo $_bedrooms.'<br>';
							// echo $_bathrooms.'<br>';
							// echo $_price.'<br><br>';

							// $forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'"  ORDER BY `object_id`');

							$forsale = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$p_id.'" AND (`term_taxonomy_id`=100 OR `term_taxonomy_id`=102) ORDER BY `object_id`');
							$forsale->execute();
							while($row = $fetch = $forsale->fetch(PDO::FETCH_ASSOC)) {
								$term_taxonomy_id = $row['term_taxonomy_id'];
								$o_id = $row['object_id'];
							?>
							<div class="col-sm-6 col-md-4 property">
								<div class="thumbnail shadow-depth-1">
									<div class="caption">
										<a class="link" href="properties.php?url=<?=$p_id?>">
											<img src="<?=$imgp?>" alt="picture-01" class="rule">
										</a>
											<p><?php 

												// if (file_exists($img)) {
												// 	echo "The file $img exists<br>";
												// } else {
												// 	echo "The file $img does not exist<br>";
												// }


												// if (@getimagesize($img)) {
												// 	echo "The file $img exists<br>";
												// }else{
												// 	echo "The file $img does not exist<br>";
												// }

											?></p>
										<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
										<h6 style="color: #9b635e;"><b>Property ID: <?php echo $p_id; ?><br/></h6>
										<h6 class="col" style="font-weight: 600; font-size: 18px;"><?=$location_name?></h6>
										<div class="row rowz">
											<div style="border: 2px solid #333; height: auto; overflow: auto; border-radius: 5px;">
												<div class="col-md-6 col-lg-6">
													<img src="img/icon-01.png" alt="icon-01" class="rules">
													<p class="bottom text-center"><?php echo $_bedrooms; ?> Bedrooms</p>
												</div>
												<div class="col-md-6 col-lg-6">
													<img src="img/icon-02.png" alt="icon-02" class="rules">
													<p class="bottom text-center"><?php echo $_bathrooms; ?> Bathrooms</p>
												</div>
											</div>
										</div>
										<hr class="rudes">
										<div class="row">
											<div class="col-md-12">
												<h6 class="lefts" style="margin-left: 0; font-weight: 600;">$ <?=$_price?></h6>
												<a class="btn-prop pull-right" href="properties.php?url=<?=$p_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
							
							}
						}
					}
				}
			}

		?>
	</div>







	<div class="container">
		<div class="row no-margin">
			<div class="col-md-12 no-padding">
				<h2 class="titles" style="text-align: center; ">Featured Commercial Properties</h2>
			</div>
		</div>
	</div>

	<section id="#">
		<div class="container">

			<?php
			$type = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `name`="Commercial" ORDER BY `term_id` DESC LIMIT 1');
			$type->execute();
			while($row = $fetch = $type->fetch(PDO::FETCH_ASSOC)) {
				$term_id = $row['term_id'];
			}

			$object = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `term_taxonomy_id`="'.$term_id.'" ORDER BY `object_id` DESC');
			$object->execute();
			while($row = $fetch = $object->fetch(PDO::FETCH_ASSOC)) {
				$object_id = $row['object_id'];


				$perpage = 12;
				if(isset($_GET['page']) & !empty($_GET['page'])){
					$curpage = $_GET['page'];
				}else{
					$curpage = 1;
				}
				$start = ($curpage * $perpage) - $perpage;
				$PageSql = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$object_id.'" AND `post_type`="noo_property" AND `post_status`="publish"');
				$PageSql->execute();
				$totalres = $PageSql->rowCount();
				$endpage = ceil($totalres/$perpage);
				$startpage = 1;
				$nextpage = $curpage + 1;
				$previouspage = $curpage - 1;
	            
				$query = $db->pdo->prepare("SELECT * FROM `wpbb_posts` WHERE `ID`='".$object_id."' AND `post_type`='noo_property' AND `post_status`='publish' ORDER BY `ID` DESC LIMIT $start, $perpage");
				$query->execute();

				while($row = $fetch = $query->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['ID'];
					$prop_id = $row['ID'];
					$title = $row['post_title'];
					if(strlen($title) > 41){$substr =  substr($title, 0, 41);}else{$substr = $title;}
					$title = $substr;
					?>
					<div class="col-sm-6 col-md-3 property">
						<div class="thumbnail shadow-depth-1">
							<div class="caption">
								<a class="link" href="properties.php?url=<?=$id?>">

									<?php
										$qu = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
										$qu->execute();
											while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
											$id = $row['meta_id'];
											$_thumbnail_id = $row['meta_value'];

											$qu = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
											$qu->execute();
											while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
												$img=$row['guid'];
												$imgs = explode(".jpg", $img);
												$piece1=$imgs[0];
												$piece2=$imgs[1];
												$imgr=$piece1.'-800x450'.$piece2.'.jpg';
												$imgp=$piece1.'-300x225'.$piece2.'.jpg';
												$thumb=$piece1.'-180x130'.$piece2.'.jpg';
									?>
									<img src="<?=$imgp?>" alt="picture-01" class="rule">
									<?php
											}
										}
									?>
								</a>
								<h6 style="font-size: 18px; font-weight: 400;"><?php echo $title; ?></h6>
								<h6 style="color: #9b635e;"><b>Property ID: <?php echo $prop_id; ?><br/></h6>
								<h6 class="col" style="font-weight: 600; font-size: 18px;">

									<?php
									$qu = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$prop_id.'" ORDER BY `object_id`');
									$qu->execute();
										while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
										$term_taxonomy_id = $row['term_taxonomy_id'];

										$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_location"  ORDER BY `term_taxonomy_id`');
										$que->execute();
											while($row = $fetch = $que->fetch(PDO::FETCH_ASSOC)) {
											$term_taxonomy_id = $row['term_taxonomy_id'];
											$term_id = $row['term_id'];
											// echo $term_taxonomy_id;
											$quer = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `term_id`="'.$term_id.'" ORDER BY `term_id`');
											$quer->execute();
												while($row = $fetch = $quer->fetch(PDO::FETCH_ASSOC)) {
												$term_id = $row['term_id'];
												$slug = $row['slug'];
												$name = $row['name'];
												echo $name;
											}
										}
									}
									?>
								</h6>
								<hr class="rudes">
								<div class="row">
									<div class="col-md-12">
									<h6 class="lefts" style="margin-left: 0; font-weight: 600;">
										$ 
										<?php
												$qu = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
											$qu->execute();
												while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
												$id = $row['meta_id'];
												$_price = $row['meta_value'];
												if(strlen($_price) > 7){$substr =  substr($_price, 0, 7);}else{$substr = $_price;}
												$_price = $substr;
												echo $_price;
											}
											?>
									</h6>
										<a class="btn-prop pull-right" href="properties.php?url=<?=$prop_id?>" style="margin-right: 10px; text-transform: none;">Get more information</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php 
				}  
			} ?>

			<div class="col-md-12">
				<nav aria-label="Page navigation" class="pull-right">
					<ul class="pagination">
						<?php if($curpage != $startpage){ ?>
						<li class="page-item">
							<a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">First</span>
							</a>
						</li>
						<?php } ?>
						<?php if($curpage >= 2){ ?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
						<?php } ?>
						<li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
						<?php if($curpage != $endpage){ ?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
						<li class="page-item">
							<a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Last</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>






    </section>
	<section class="#" style="padding: 15px;">
		<div class="container">
			<div class="row no-margin">
				<div class="col-md-12 no-padding">
					<h3 style="color: #9b635e;">DISCLAIMER</h3>
					<p>
						<b>Information deemed reliable but is not guaranteed.</b> <br>
						All information relating to real estate on this website comes from manual real estate searches across the country or from landlords and sellers submitting information to Forrest Jackson Properties. 
					</p>
					<p>
						Given the lack of a multiple listing service in Rwanda there may be instances when a property is listed on this website but is no longer available. We do our best to keep the website current but are limited by the need to get property information manually as is the case without a multiple listing services.
					</p>
					<br> 
				</div> 
			</div>
		</div>
	</section>



	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="https://web.facebook.com/ForrestJacksonRelo/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/MoveToKigali" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
			<div class="border"></div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2018 Forest Jackson. All rights reserved</p>
			</div>
		</div>
	</div>
	<!-- //footer -->

	 
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js -->
		

	<!-- for banner js file-->
	<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script><!-- zoomslider js -->
	<!-- //for banner js file-->

	<!-- for team slider -->
	<!-- requried-jsfiles-for owl -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
					navigation : true,
					navigationText :  true,
					pagination : false,
					});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->
	<!-- //for team slider -->

	<!-- js for portfolio lightbox -->
	<script src="js/jQuery.lightninBox.html"></script>
	<script type="text/javascript">
		$(".lightninBox").lightninBox();
	</script>
	<!-- /js for portfolio lightbox -->

	<!-- for smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
		<!-- //here ends scrolling icon -->
	<!-- //for smooth scrolling -->

	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<!-- //scrolling script -->

	<!-- testimonilas slider -->
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.html"></script>
	<!-- testimonilas slider -->

</body>

</html>