<?php
    require_once 'core/config.php';
    require_once 'core/dbClass.php';
    $db = new database($pdo);
    $rows = $db->getData();

    if(isset($_GET['url'])) {
        $url_id = $_GET['url'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>properties</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			
	<!-- for banner css files -->
	<link rel="stylesheet" type="text/css" href="css/zoomslider.html" /><!--zoomslider css -->
	<script type="text/javascript" src="js/modernizr-2.6.2.min.html"></script><!--modernizer css -->
	<!-- //for banner css files -->
	
	<link rel="icon" href="img/logo forrest-01.png" type="image/png" sizes="16x16">
	<link href="css/carousel.html" type="text/css" rel="stylesheet" media="all"><!--for team carousel css --> 
	 
	<link href="css/jQuery.lightninBox.html" rel="stylesheet" type="text/css" media="all" /><!-- for portfolio lightninBox css -->

	<!-- custom-theme css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style-mc.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //custom-theme css files-->

	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/rrssb.css" rel="stylesheet">
	<!-- //font-awesome-icons -->

	<!-- googlefonts -->
	<link href="http://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //googlefonts -->

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/submit.js"></script>

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
													<div class="col-md-2 col-xs-12 form-date-w3-agileits" style="padding-right: 0;">
															<!-- <label><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label> -->
															<select name="property_location" class="form-control">
																<option selected="selected" hidden="hidden">Location</option>
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
															<input name="property_max_price" type="text" placeholder="Max. Price" required="">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
															<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
															<select name="property_min_bedrooms" class="form-control">
																<option selected="selected" disabled="disabled" hidden="hidden">Min. Bedrooms</option>
										                        <option>1</option>
										                        <option>2</option>
										                        <option>3</option>
										                        <option>4</option>
															</select>
													</div>
													<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
															<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
															<input name="property_id" type="text" placeholder="Property ID" required="">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-submit" style="padding-right: 0;">
															<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
															<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="padding: .7em;font-size: 14px;background-color:#196F3D;color: #fff; ">More Filters</button>
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
															<!-- <label><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label> -->
															<select class="form-control">
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
															<input type="text" placeholder="Max. Price" required="">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
															<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
															<select class="form-control">
																<option selected="selected" disabled="disabled" hidden="hidden">Min. Bedrooms</option>
										                        <option>1</option>
										                        <option>2</option>
										                        <option>3</option>
										                        <option>4</option>
															</select>
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
															<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
															<select class="form-control">
																<option selected="selected" disabled="disabled" hidden="hidden">Property Type</option>
										                        <option>Residential</option>
										                        <option>Commercial</option>
										                        <option>Luxury Properties</option>
										                        <option>Plots</option>
															</select>
													</div>
													<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
															<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
															<input type="text" placeholder="Property ID" required="">
													</div>
													<div class="col-md-2 col-xs-12 form-left-agileits-submit">
														  <input type="submit" value="Submit" style="margin-top: 0;">
													</div>
													<div class="clearfix"></div>
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
						<input name="property_type_or" type="checkbox" value="SFR">  Apartment 
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Compound   
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Duplex - attached   
					</label>
					<br> 
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Duplex - semidetached     
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Multi-family        
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Townhouse          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Single family          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Single storey      
					</label>
				</div>
				<div class="col-md-3">
					<h4>Property Details </h4>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Additional tv/reading room            
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Air conditioning           
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Bars on windows downstairs          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Bars on windows upstairs          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Corner house         
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR">  Covered parking             
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Open floor plan            
					</label>
				</div>
				<div class="col-md-3">
					<h4> Additional Features </h4>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Dishwasher         
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Generator         
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Pool - individual           
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Pool - shared          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Washing machine          
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Water pump           
					</label>
					<br>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR">  Water tank          
					</label>
				</div>
				<div class="col-md-3">
					<h4> Other</h4>
					<label>
						<input name="property_type_or" type="checkbox" value="SFR"> Available short- term          
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
                			<h6 class="lefts" style="margin-left: 0; font-weight: 600;"><?=$_price?> $</h6>
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





			
			<?php if(!isset($_POST['search'])){ ?>
            <div class="container" id="hideMe">

				<!-- Source: https://www.jssor.com -->
				<script src="js/jssor.slider-27.0.4.min.js" type="text/javascript"></script>
				<script type="text/javascript">
                    jssor_1_slider_init = function() {

                        var jssor_1_SlideshowTransitions = [
                          {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                        ];

                        var jssor_1_options = {
                          $AutoPlay: 1,
                          $Cols: 1,
                          $Align: 0,
                          $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                          },
                          $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                          },
                          $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Cols: 5,
                            $SpacingX: 5,
                            $SpacingY: 5,
                            $Align: 390
                          }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 980;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>
                <style>
                    /*jssor slider loading skin spin css*/
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }

                    @keyframes jssorl-009-spin {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }

                    /*jssor slider arrow skin 106 css*/
                    .jssora106 {display:block;position:absolute;cursor:pointer;}
                    .jssora106 .c {fill:#fff;opacity:.3;}
                    .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
                    .jssora106:hover .c {opacity:.5;}
                    .jssora106:hover .a {opacity:.8;}
                    .jssora106.jssora106dn .c {opacity:.2;}
                    .jssora106.jssora106dn .a {opacity:1;}
                    .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

                    /*jssor slider thumbnail skin 101 css*/
                    .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
                    .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
                    .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
                    .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
                    .jssort101 .p:hover{padding:2px;}
                    .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
                    .jssort101 .p:hover.pdn{padding:0;}
                    .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
                    .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
                    .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
                    .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
                    .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}

                    ul.address {
					    margin-top: 0.7em;
					    /*border-top: 1px dashed rgba(96, 125, 139, 0.38);*/
					    padding-bottom: 1.8em;
					}

					ul.address li {
					    display: block;
					}

					ul.address li b {
					    letter-spacing: 2px;
					    color: #000;
					}

					ul.address li ul.agileits-address-text li {
					    display: inline-block;
					    font-size: 16px;
					    color: #9b635e;
					    margin-top: 20px;
					    letter-spacing: 1px;
					}

					ul.address li ul.agileits-address-text li:nth-child(1) {
					    /*width: 20%;*/
					}

					ul.address li ul.agileits-address-text li a {
					    color: #999;
					    text-decoration: none;
					}

					ul.address li ul.agileits-address-text li a:hover {
					    color: #f91f6f;
					}

					.w3l_contact_grid_left input[type="text"],
					.w3l_contact_grid_left input[type="email"],
					.w3l_contact_grids textarea {
					    outline: none;
					    border: 1px solid #E4E4E4;
					    background: #f5f5f5;
					    padding: 10px;
					    width: 100%;
					    font-size: 15px;
					    color: #212121;
					    letter-spacing: 1px;
					}

					.w3l_contact_grid_left input[type="text"]:nth-child(2) {
					    margin: 2em 0;
					}

					.w3l_contact_grids textarea {
					    /*margin: 0 1em;*/
					    min-height: 200px;
					    width: 100% !important;
					    resize: none;
					}

					.w3l_contact_grids input[type="button"] {
					    outline: none;
					    border: none;
					    background: #9b635e;
					    padding: 12px 35px;
					    font-size: 16px;
					    letter-spacing: 1px;
					    color: #fff;
					    margin: 30px auto 0;
					    text-align: center;
					    transition: .5s all;
					    -webkit-transition: .5s all;
					    -moz-transition: .5s all;
					    -o-transition: .5s all;
					    -ms-transition: .5s all;
					    display: inherit;
					}

					.w3l_contact_grids input[type="button"]:hover {
					    background: #000;
					    transition: .5s all;
					    -webkit-transition: .5s all;
					    -moz-transition: .5s all;
					    -o-transition: .5s all;
					    -ms-transition: .5s all;
					}

					.wthree-team-grid img{
						width:100%;
					}
					.wthree-team-grid-info{
						padding:1em;
						background:#FFFFFF;
					}
					.wthree-team-grid h4 {
					    font-size: 1em;
					    color: #9b635e;
					    margin: 0;
					    font-weight: 600;
					}
					.wthree-team-grid p , .wthree-team-grid p a{
					    margin:.5em 0;
					    color: #999999;
					    font-size: .9em;
					}
					.team-social-grids ul {
					    padding: 0;
					    margin: 0;
					}
					.team-social-grids ul li {
					    display: inline-block;
					    margin: 0 .5em 0 0;
					}
					.team-social-grids ul li a {
					    text-align: center;
					}
					.team-social-grids ul li a i.fa.fa-facebook, .team-social-grids ul li a i.fa.fa-twitter, .team-social-grids ul li a i.fa.fa-rss{
						height: 30px;
					    width: 30px;
					    border: solid 2px #FFFFFF;
					    line-height: 29px;
					    background: none;
					    color: #b2b2b2;
					    transition: 0.5s all;
					    -webkit-transition: 0.5s all;
					    -moz-transition: 0.5s all;
					    -o-transition: 0.5s all;
					    -ms-transition: 0.5s all;
					}
					.team-social-grids ul li a i.fa.fa-facebook:hover {
						border: solid 2px #3b5998;
						background:#3b5998;
					    color: #FFFFFF;
					}
					.team-social-grids ul li a i.fa.fa-twitter:hover{
						border: solid 2px #55acee;
						background:#55acee;
						color: #FFFFFF;
					}
					.team-social-grids ul li a i.fa.fa-rss:hover{
						border: solid 2px #f26522;
						background:#f26522;
						color: #FFFFFF;
					}
                </style>


					<?php
			            // $query = $db->pdo->prepare("SELECT * FROM `residential` ORDER BY `ID`");
			            $query = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `post_type`="noo_property" AND `post_status`="publish" AND `ID`="'.$url_id.'" ORDER BY `ID` DESC limit 9');
			            $query->execute();
			            while($row = $fetch = $query->fetch(PDO::FETCH_ASSOC)) {
			            	$id = $row['ID'];
			              	// $prop_id = $row['prop_ID'];
			              	$prop_id = $row['ID'];
			              	$description=$row['post_content'];
			              	// $title = $row['title'];
			              	$title = $row['post_title'];
			              	// if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
			              	// $title = $substr;
			              	// $location = $row['location'];
			              	// $price = $row['price'];
			              	// $bedroom = $row['bedroom'];
			              	// $bathroom = $row['bathroom'];
			              	// $image = $row['image'];
			              	// $description = $row['description'];
			              	// if(strlen($description) > 180){$substr =  substr($description, 0, 180);}else{$substr = $description;}
			         	}
			         	// echo $prop_id;
			        ?>


	                <?php
	      				$prices = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_price" ORDER BY `meta_id`');
						$prices->execute();
							while($row = $fetch = $prices->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$price = $row['meta_value'];
						}
	      			?>

	      			<?php
	      				$q = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_bedrooms" ORDER BY `meta_id`');
						$q->execute();
						while($row = $fetch = $q->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$bedroom = $row['meta_value'];
						}
	      			?>
		  			<?php
		  				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_bathrooms" ORDER BY `meta_id`');
						$qu->execute();
						while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$bathroom = $row['meta_value'];
						}
		  			?>
		  			<?php
		  				$agent = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_agent_responsible" ORDER BY `meta_id`');
						$agent->execute();
						while($row = $fetch = $agent->fetch(PDO::FETCH_ASSOC)) {
							// $id = $row['meta_id'];
							$agent_responsible = $row['meta_value'];
							// echo $agent_responsible;
						}
		  			?>

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
									$location = $row['name'];
								}
							}
						}
	      			?>

		  			<?php
	      				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$prop_id.'" ORDER BY `object_id`');
						$qu->execute();
							while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];

	          				$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_status"  ORDER BY `term_taxonomy_id`');
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
	        						$status = $row['name'];
	        					}
	    					}
						}
	      			?>

		  			<?php
	      				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$prop_id.'" ORDER BY `object_id`');
						$qu->execute();
							while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];

	          				$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_label"  ORDER BY `term_taxonomy_id`');
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
	        						$prop_type = $row['name'];
	        					}
	    					}
						}
	      			?>

		  			<?php
	      				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_term_relationships` WHERE `object_id`="'.$prop_id.'" ORDER BY `object_id`');
						$qu->execute();
							while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
							$term_taxonomy_id = $row['term_taxonomy_id'];

	          				$que = $db->pdo->prepare('SELECT * FROM `wpbb_term_taxonomy` WHERE `term_taxonomy_id`="'.$term_taxonomy_id.'" AND `taxonomy`="property_category"  ORDER BY `term_taxonomy_id`');
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
	        						$prop_category = $row['name'];
	        					}
	    					}
						}
	      			?>




	                <div class="row no-padding no-margin" style="padding-left: 0px;">
	                  	<h2 class="titles" style="float: left; font-size: 25px; margin-bottom: 15px;"><?php echo $title; ?></h2>
	                    <div class="col-md-8 no-padding"> 
	                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
	                         	<!-- Loading Screen -->
	                      		<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
	                              	<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/forrest-02.png" />
	                          	</div>
	                          	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:480px;overflow:hidden;">
	                         	 	<!-- <div data-p="170.00">
			                            <img data-u="image" src="img/properties/<?=$image?>" />
			                            <img data-u="thumb" src="img/properties/<?=$image?>" />
			                        </div> -->
								
								<?php
	                  				$gallery = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_key`="_gallery" ORDER BY `meta_id`');
	            					$gallery->execute();
	           						while($row = $fetch = $gallery->fetch(PDO::FETCH_ASSOC)) {
	            						$id = $row['meta_id'];
	            						$_gallery = $row['meta_value'];
	            						// echo $_gallery;

	            						$array =  explode(',', $_gallery);
										foreach ($array as $item) {
										    // echo "<li>$item</li>";
										    $qu = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$item.'" ORDER BY `ID`');
					    					$qu->execute();
					   						while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
					   							$img=$row['guid'];
												$imgs = explode(".jpg", $img);
												$piece1=$imgs[0];
												$piece2=$imgs[1];
												$imgr=$piece1.'-800x450'.$piece2.'.jpg';
												$thumb=$piece1.'-180x130'.$piece2.'.jpg';
												// echo $imgr.'<br>';
												// echo $img;
												?>

					   							<!-- <img data-u="image" src="<?=$img?>" /> -->
					   						
			                     	<?php
							            // $query_img = $db->pdo->prepare("SELECT * FROM `prop_images` WHERE `prop_ID` = $prop_id");
							            // $query_img->execute();
							            // while($row = $fetch = $query_img->fetch(PDO::FETCH_ASSOC)) {
							            //   	$feat_image = $row['name'];
							        ?>

	                  			
	                                <div data-p="170.00">
	                                    <img data-u="image" src="<?=$imgr?>" />
	                                    <img data-u="thumb" src="<?=$thumb?>" />
	                                </div>
	                                <?php // } ?> 
	                                <?php
					   						}
										}
	            					}
	                  			?>
	                            </div>
	                            <!-- Thumbnail Navigator -->
	                              <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
	                                  <div data-u="slides">
	                                      <div data-u="prototype" class="p" style="width:190px;height:90px;">
	                                          <div data-u="thumbnailtemplate" class="t"></div>
	                                          <svg viewbox="0 0 16000 16000" class="cv">
	                                              <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
	                                              <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
	                                              <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
	                                          </svg>
	                                      </div>
	                                  </div>
	                              </div>
	                              <!-- Arrow Navigator -->
	                              <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
	                                  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                                      <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
	                                      <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
	                                      <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
	                                  </svg>
	                              </div>
	                              <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
	                                  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                                      <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
	                                      <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
	                                      <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
	                                  </svg>
	                              </div>
	                          </div>
	                        <script type="text/javascript">jssor_1_slider_init();</script>
	                        <!-- #endregion Jssor Slider End -->
	                            
	                    </div>
					<div class="col-md-4" style="background: #f9f9f9;">
	                    <ul class="address">
							<li>
								<ul class="agileits-address-text ">
									<li>
										<b>Property ID :</b>
									</li>
									<li><?php echo $prop_id; ?></li>
								</ul>
								<?php
									if ($prop_category!='Land') {
								?>
								<ul class="agileits-address-text ">
									<li>
										<b>Type :</b>
									</li>
									<li><?php echo $prop_type; ?></li>
								</ul>
								<?php
									}
								?>
								<ul class="agileits-address-text ">
									<li>
										<b>Category :</b>
									</li>
									<li><?php echo $prop_category; ?></li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li>
										<b>Status : </b>
									</li>
									<li><?php echo $status; ?></li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li>
										<b>Location :</b>
									</li>
									<li>
										<?php echo $location; ?>
									</li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li>
										<b>Price :</b>
									</li>
									<li>
										<?php echo $price; ?> $
									</li>
								</ul>
							</li>
							<?php
								if ($prop_category!='Land') {
							?>
							<li>
								<ul class="agileits-address-text">
									<li>
										<b>Bedrooms : </b>
									</li>
									<li><?php echo $bedroom; ?></li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li>
										<b>Bathrooms :</b>
									</li>
									<li>
										<?php echo $bathroom; ?>
									</li>
								</ul>
							</li>
							<?php
								}
							?>
						</ul>
	                </div>
				</div>
			</div>
			<div class="container">
				<div class="row no-padding no-margin">
					<div class="col-md-12 no-padding">
						<p style="padding: 0px;"><?php echo $description; ?></p> 
					</div>
				</div> 
			</div>
			<div class="container">
				<div class="row no-padding no-margin">
					<div class="col-md-12 no-padding">
						<h2 class="title" style="float: left; font-size: 25px; margin-bottom: 5px;">Details</h2>
					</div>
				</div>
			</div>
            <div class="container">
            	<div class="col-md-12" style="padding-left: 0">

		  			<?php
		  				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$prop_id.'" AND `meta_value`=1 AND `meta_key` LIKE "%_noo_property_feature%" ORDER BY `meta_id`');
						$qu->execute();
						while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
							$meta_id = $row['meta_id'];
							$meta_key = $row['meta_key'];
							// echo $meta_key.'<br>';
							$property_feature='';
							if ($meta_key=='_noo_property_feature_paved-street') {
								$property_feature = 'Paved Street';
							}elseif ($meta_key=='_noo_property_feature_pantry-with-shelves') {
								$property_feature = 'Pantry With Shelves';
							}elseif ($meta_key=='_noo_property_feature_covered-parking') {
								$property_feature = 'Covered Parking';
							}elseif ($meta_key=='_noo_property_feature_bars-on-windows') {
								$property_feature = 'Bars On Windows';
							}elseif ($meta_key=='_noo_property_feature_generator') {
								$property_feature = 'Generator';
							}elseif ($meta_key=='_noo_property_feature_tv-room-upstairs') {
								$property_feature = 'TV Room Upstairs';
							}elseif ($meta_key=='_noo_property_feature_front-porch') {
								$property_feature = 'Front Porch';
							}elseif ($meta_key=='_noo_property_feature_front-porch') {
								$property_feature = 'Front Porch';
							}elseif ($meta_key=='_noo_property_feature_balcony-with-a-view') {
								$property_feature = 'Balcony With A View';
							}
							elseif ($meta_key=='_noo_property_feature_master-bedroom-balcony') {
								$property_feature = 'Master Bedroom Balcony';
							}elseif ($meta_key=='_noo_property_feature_water-tank-pump') {
								$property_feature = 'Water Tank & Pump';
							}elseif ($meta_key=='_noo_property_feature_staff-area') {
								$property_feature = 'Staff Area';
							}elseif ($meta_key=='_noo_property_feature_washing-machine') {
								$property_feature = 'Washing Machine';
							}elseif ($meta_key=='_noo_property_feature_double-sink') {
								$property_feature = 'Double Sink';
							}elseif ($meta_key=='_noo_property_feature_two-entrances') {
								$property_feature = 'Two Entrances';
							}elseif ($meta_key=='_noo_property_feature_pantry-without-shelves') {
								$property_feature = 'Pantry Without Shelves';
							}elseif ($meta_key=='_noo_property_feature_staff-area-with-outside-kitchen') {
								$property_feature = 'Staff Area With Outside Kitchen';
							}elseif ($meta_key=='_noo_property_feature_swimming-pool') {
								$property_feature = 'Swimming Pool';
							}elseif ($meta_key=='_noo_property_feature_washing-machine') {
								$property_feature = 'Washing Machine';
							}elseif ($meta_key=='_noo_property_feature_fridge') {
								$property_feature = 'Fridge';
							}elseif ($meta_key=='_noo_property_feature_freezer') {
								$property_feature = 'Feature Freezer';
							}elseif ($meta_key=='_noo_property_feature_stove') {
								$property_feature = 'Feature Stove';
							}elseif ($meta_key=='_noo_property_feature_microwave') {
								$property_feature = 'Microwave';
							}elseif ($meta_key=='_noo_property_feature_home-office') {
								$property_feature = 'Home Office';
							}elseif ($meta_key=='_noo_property_feature_dishwasher') {
								$property_feature = 'Dishwasher';
							}elseif ($meta_key=='_noo_property_feature_space-for-vegetable-garden') {
								$property_feature = 'Space For Vegetable garden';
							}
							// echo $property_feature.'<br>';
		  			?>
	              	<div class="col-sm-3 Bars" style="padding: 0; margin-bottom: 10px;">
	                    <img src="img/We%20design%20v1-08.png" class="sizi" alt="We design v1-08">
	                    <p style="float: left;"><?php echo $property_feature; ?></p>
	                </div>

	                <?php  } ?>
            		<?php
			            $query_img = $db->pdo->prepare("SELECT * FROM `prop_feat` WHERE `prop_ID` = $prop_id");
			            $query_img->execute();
			            while($row = $fetch = $query_img->fetch(PDO::FETCH_ASSOC)) {
			              	$prop_feat = $row['name'];
			        ?>

	              	<div class="col-sm-3 Bars" style="padding: 0; margin-bottom: 10px;">
	                    <img src="img/We%20design%20v1-08.png" class="sizi" alt="We design v1-08">
	                    <p style="float: left;"><?php echo $prop_feat; ?></p>
	                </div>
	                <?php  } ?> 
	            </div>
                <div class="col-md-8" style="padding: 0">
                    <!-- <div class="col-md-6" style="padding: 0">
                 	  	<a href="#" class="btn-mc btn">Book now</a>
                 	</div>
                 	<div class="col-md-6">
                   		<a href="residential.php" class="btn-mc btn">Back To Search Results</a> 
                 	</div> -->
                </div>
                <div class="col-md-4"></div>
            </div>

			<div class="container">
		            <!-- start share button-->
		            <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
		            	<div class="share-container clearfix">
			                <span class="label" style="color:#000;">Share this property:</span>
			                <?php
			                	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			                ?>
			                <!-- Buttons start here. Copy this ul to your document. -->
			                <ul class="rrssb-buttons clearfix">
			                    <li class="email">

			                        <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
			                        <a href="mailto:?subject=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are&amp;body=<?=$actual_link; ?>">
			                            <span class="icon">
			                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><g><path d="M20.111 26.147c-2.336 1.051-4.361 1.401-7.125 1.401c-6.462 0-12.146-4.633-12.146-12.265 c0-7.94 5.762-14.833 14.561-14.833c6.853 0 11.8 4.7 11.8 11.252c0 5.684-3.194 9.265-7.399 9.3 c-1.829 0-3.153-0.934-3.347-2.997h-0.077c-1.208 1.986-2.96 2.997-5.023 2.997c-2.532 0-4.361-1.868-4.361-5.062 c0-4.749 3.504-9.071 9.111-9.071c1.713 0 3.7 0.4 4.6 0.973l-1.169 7.203c-0.388 2.298-0.116 3.3 1 3.4 c1.673 0 3.773-2.102 3.773-6.58c0-5.061-3.27-8.994-9.303-8.994c-5.957 0-11.175 4.673-11.175 12.1 c0 6.5 4.2 10.2 10 10.201c1.986 0 4.089-0.43 5.646-1.245L20.111 26.147z M16.646 10.1 c-0.311-0.078-0.701-0.155-1.207-0.155c-2.571 0-4.595 2.53-4.595 5.529c0 1.5 0.7 2.4 1.9 2.4 c1.441 0 2.959-1.828 3.311-4.087L16.646 10.068z"/></g></svg>
			                            </span>
			                            <span class="text">email</span>
			                        </a>
			                    </li>
			                    <li class="facebook">
			                        <!-- Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
			                        https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
			                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$actual_link; ?>" class="popup">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                    <path d="M27.825,4.783c0-2.427-2.182-4.608-4.608-4.608H4.783c-2.422,0-4.608,2.182-4.608,4.608v18.434
			                                        c0,2.427,2.181,4.608,4.608,4.608H14V17.379h-3.379v-4.608H14v-1.795c0-3.089,2.335-5.885,5.192-5.885h3.718v4.608h-3.726
			                                        c-0.408,0-0.884,0.492-0.884,1.236v1.836h4.609v4.608h-4.609v10.446h4.916c2.422,0,4.608-2.188,4.608-4.608V4.783z"/>
			                                </svg>
			                            </span>
			                            <span class="text">facebook</span>
			                        </a>
			                    </li>
			                    <li class="twitter">
			                        <!-- Replace href with your Meta and URL information  -->
			                        <a href="http://twitter.com/home?status=Ridiculously%20Responsive%20Social%20Sharing%20Buttons%20by%20@joshuatuscan%20and%20@dbox%20<?=$actual_link; ?>" class="popup">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			                                     width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                <path d="M24.253,8.756C24.689,17.08,18.297,24.182,9.97,24.62c-3.122,0.162-6.219-0.646-8.861-2.32
			                                    c2.703,0.179,5.376-0.648,7.508-2.321c-2.072-0.247-3.818-1.661-4.489-3.638c0.801,0.128,1.62,0.076,2.399-0.155
			                                    C4.045,15.72,2.215,13.6,2.115,11.077c0.688,0.275,1.426,0.407,2.168,0.386c-2.135-1.65-2.729-4.621-1.394-6.965
			                                    C5.575,7.816,9.54,9.84,13.803,10.071c-0.842-2.739,0.694-5.64,3.434-6.482c2.018-0.623,4.212,0.044,5.546,1.683
			                                    c1.186-0.213,2.318-0.662,3.329-1.317c-0.385,1.256-1.247,2.312-2.399,2.942c1.048-0.106,2.069-0.394,3.019-0.851
			                                    C26.275,7.229,25.39,8.196,24.253,8.756z"/>
			                                </svg>
			                           </span>
			                            <span class="text">twitter</span>
			                        </a>
			                    </li>
			                    <li class="linkedin">
			                        <!-- Replace href with your meta and URL information -->
			                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$actual_link; ?>&amp;title=Ridiculously%20Responsive%20Social%20Sharing%20Buttons&amp;summary=Responsive%20social%20icons%20by%20KNI%20Labs" class="popup">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                    <path d="M25.424,15.887v8.447h-4.896v-7.882c0-1.979-0.709-3.331-2.48-3.331c-1.354,0-2.158,0.911-2.514,1.803
			                                        c-0.129,0.315-0.162,0.753-0.162,1.194v8.216h-4.899c0,0,0.066-13.349,0-14.731h4.899v2.088c-0.01,0.016-0.023,0.032-0.033,0.048
			                                        h0.033V11.69c0.65-1.002,1.812-2.435,4.414-2.435C23.008,9.254,25.424,11.361,25.424,15.887z M5.348,2.501
			                                        c-1.676,0-2.772,1.092-2.772,2.539c0,1.421,1.066,2.538,2.717,2.546h0.032c1.709,0,2.771-1.132,2.771-2.546
			                                        C8.054,3.593,7.019,2.501,5.343,2.501H5.348z M2.867,24.334h4.897V9.603H2.867V24.334z"/>
			                                </svg>
			                            </span>
			                            <span class="text">linkedin</span>
			                        </a>
			                    </li>
			                    <li class="googleplus">
			                        <!-- Replace href with your meta and URL information.  -->
			                        <a href="https://plus.google.com/share?url=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are%20<?=$actual_link; ?>" class="popup">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                    <g>
			                                        <g>
			                                            <path d="M14.703,15.854l-1.219-0.948c-0.372-0.308-0.88-0.715-0.88-1.459c0-0.748,0.508-1.223,0.95-1.663
			                                                c1.42-1.119,2.839-2.309,2.839-4.817c0-2.58-1.621-3.937-2.399-4.581h2.097l2.202-1.383h-6.67c-1.83,0-4.467,0.433-6.398,2.027
			                                                C3.768,4.287,3.059,6.018,3.059,7.576c0,2.634,2.022,5.328,5.604,5.328c0.339,0,0.71-0.033,1.083-0.068
			                                                c-0.167,0.408-0.336,0.748-0.336,1.324c0,1.04,0.551,1.685,1.011,2.297c-1.524,0.104-4.37,0.273-6.467,1.562
			                                                c-1.998,1.188-2.605,2.916-2.605,4.137c0,2.512,2.358,4.84,7.289,4.84c5.822,0,8.904-3.223,8.904-6.41
			                                                c0.008-2.327-1.359-3.489-2.829-4.731H14.703z M10.269,11.951c-2.912,0-4.231-3.765-4.231-6.037c0-0.884,0.168-1.797,0.744-2.511
			                                                c0.543-0.679,1.489-1.12,2.372-1.12c2.807,0,4.256,3.798,4.256,6.242c0,0.612-0.067,1.694-0.845,2.478
			                                                c-0.537,0.55-1.438,0.948-2.295,0.951V11.951z M10.302,25.609c-3.621,0-5.957-1.732-5.957-4.142c0-2.408,2.165-3.223,2.911-3.492
			                                                c1.421-0.479,3.25-0.545,3.555-0.545c0.338,0,0.52,0,0.766,0.034c2.574,1.838,3.706,2.757,3.706,4.479
			                                                c-0.002,2.073-1.736,3.665-4.982,3.649L10.302,25.609z"/>
			                                            <polygon points="23.254,11.89 23.254,8.521 21.569,8.521 21.569,11.89 18.202,11.89 18.202,13.604 21.569,13.604 21.569,17.004
			                                                23.254,17.004 23.254,13.604 26.653,13.604 26.653,11.89      "/>
			                                        </g>
			                                    </g>
			                                </svg>
			                            </span>
			                            <span class="text">google+</span>
			                        </a>
			                    </li>
								<li class="tumblr">
			                        <a href="http://tumblr.com/share?s=&amp;v=3&t=Ridiculously%20Responsive%20Social%20Sharing%20Buttons%20by%20KNI%20Labs&amp;u=<?=$actual_link; ?>">
			                            <span class="icon">
			                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><path d="M18.02 21.842c-2.029 0.052-2.422-1.396-2.439-2.446v-7.294h4.729V7.874h-4.71V1.592c0 0-3.653 0-3.714 0 s-0.167 0.053-0.182 0.186c-0.218 1.935-1.144 5.33-4.988 6.688v3.637h2.927v7.677c0 2.8 1.7 6.7 7.3 6.6 c1.863-0.03 3.934-0.795 4.392-1.453l-1.22-3.539C19.595 21.6 18.7 21.8 18 21.842z"/></svg>
			                            </span>
			                            <span class="text">tumblr</span>
			                        </a>
			                    </li>
								<!-- <li class="reddit">
			                        <a href="http://www.reddit.com/submit?url=http://www.kurtnoble.com/labs/rrssb/">
			                            <span class="icon">
			                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><g><path d="M11.794 15.316c0-1.029-0.835-1.895-1.866-1.895c-1.03 0-1.893 0.865-1.893 1.895s0.863 1.9 1.9 1.9 C10.958 17.2 11.8 16.3 11.8 15.316z"/><path d="M18.1 13.422c-1.029 0-1.895 0.864-1.895 1.895c0 1 0.9 1.9 1.9 1.865c1.031 0 1.869-0.836 1.869-1.865 C19.969 14.3 19.1 13.4 18.1 13.422z"/><path d="M17.527 19.791c-0.678 0.678-1.826 1.006-3.514 1.006c-0.004 0-0.009 0-0.014 0c-0.004 0-0.01 0-0.015 0 c-1.686 0-2.834-0.328-3.51-1.005c-0.264-0.265-0.693-0.265-0.958 0c-0.264 0.265-0.264 0.7 0 1 c0.943 0.9 2.4 1.4 4.5 1.402c0.005 0 0 0 0 0c0.005 0 0 0 0 0c2.066 0 3.527-0.459 4.47-1.402 c0.265-0.264 0.265-0.693 0.002-0.958C18.221 19.5 17.8 19.5 17.5 19.791z"/><path d="M27.707 13.267c0-1.785-1.453-3.237-3.236-3.237c-0.793 0-1.518 0.287-2.082 0.761c-2.039-1.295-4.646-2.069-7.438-2.219 l1.483-4.691l4.062 0.956c0.071 1.4 1.3 2.6 2.7 2.555c1.488 0 2.695-1.208 2.695-2.695C25.881 3.2 24.7 2 23.2 2 c-1.059 0-1.979 0.616-2.42 1.508l-4.633-1.091c-0.344-0.081-0.693 0.118-0.803 0.455l-1.793 5.7 C10.548 8.6 7.7 9.4 5.6 10.75C5.006 10.3 4.3 10 3.5 10.029c-1.785 0-3.237 1.452-3.237 3.2 c0 1.1 0.6 2.1 1.4 2.69c-0.04 0.272-0.061 0.551-0.061 0.831c0 2.3 1.3 4.4 3.7 5.9 c2.299 1.5 5.3 2.3 8.6 2.325c3.228 0 6.271-0.825 8.571-2.325c2.387-1.56 3.7-3.66 3.7-5.917 c0-0.26-0.016-0.514-0.051-0.768C27.088 15.5 27.7 14.4 27.7 13.267z M23.186 3.355c0.74 0 1.3 0.6 1.3 1.3 c0 0.738-0.6 1.34-1.34 1.34s-1.342-0.602-1.342-1.34C21.844 4 22.4 3.4 23.2 3.355z M1.648 13.3 c0-1.038 0.844-1.882 1.882-1.882c0.31 0 0.6 0.1 0.9 0.209c-1.049 0.868-1.813 1.861-2.26 2.9 C1.832 14.2 1.6 13.8 1.6 13.267z M21.773 21.57c-2.082 1.357-4.863 2.105-7.831 2.105c-2.967 0-5.747-0.748-7.828-2.105 c-1.991-1.301-3.088-3-3.088-4.782c0-1.784 1.097-3.484 3.088-4.784c2.081-1.358 4.861-2.106 7.828-2.106 c2.967 0 5.7 0.7 7.8 2.106c1.99 1.3 3.1 3 3.1 4.784C24.859 18.6 23.8 20.3 21.8 21.57z M25.787 14.6 c-0.432-1.084-1.191-2.095-2.244-2.977c0.273-0.156 0.59-0.245 0.928-0.245c1.035 0 1.9 0.8 1.9 1.9 C26.354 13.8 26.1 14.3 25.8 14.605z"/></g></svg>
			                            </span>
			                            <span class="text">reddit</span>
			                        </a>
			                    </li> -->
			                    <!-- <li class="youtube">
			                        <a href="#">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                    <path d="M27.688,8.512c0-2.268-1.825-4.093-4.106-4.093H4.389c-2.245,0-4.076,1.825-4.076,4.093v10.976 c0,2.268,1.825,4.093,4.076,4.093h19.192c2.274,0,4.106-1.825,4.106-4.093V8.512z M11.263,18.632V8.321l7.817,5.155L11.263,18.632z" />
			                                </svg>
			                            </span>
			                            <span class="text">youtube</span>
			                        </a>
			                    </li> -->
			                    <li class="pinterest">
			                        <!-- Replace href with your meta and URL information.  -->
			                        <a href="http://pinterest.com/pin/create/button/?url=<?=$actual_link; ?>&amp;media=http://kurtnoble.com/labs/rrssb/media/facebook-share.jpg&amp;description=Ridiculously%20responsive%20social%20sharing%20buttons%20by%20KNI%20Labs.">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                <path d="M14.021,1.57C6.96,1.57,1.236,7.293,1.236,14.355c0,7.062,5.724,12.785,12.785,12.785c7.061,0,12.785-5.725,12.785-12.785
			                                    C26.807,7.294,21.082,1.57,14.021,1.57z M15.261,18.655c-1.161-0.09-1.649-0.666-2.559-1.219c-0.501,2.626-1.113,5.145-2.925,6.458
			                                    c-0.559-3.971,0.822-6.951,1.462-10.116c-1.093-1.84,0.132-5.545,2.438-4.632c2.837,1.123-2.458,6.842,1.099,7.557
			                                    c3.711,0.744,5.227-6.439,2.925-8.775c-3.325-3.374-9.678-0.077-8.897,4.754c0.19,1.178,1.408,1.538,0.489,3.168
			                                    C7.165,15.378,6.53,13.7,6.611,11.462c0.131-3.662,3.291-6.227,6.46-6.582c4.007-0.448,7.771,1.474,8.29,5.239
			                                    c0.579,4.255-1.816,8.865-6.102,8.533L15.261,18.655z"/>
			                                </svg>
			                            </span>
			                            <span class="text">pinterest</span>
			                        </a>
			                    </li>

			                    <!-- <li class="pocket">
			                        <a href="https://getpocket.com/save?url=http://www.kadibra.com/single_hotel.php?hotelid=<?php echo $id ?>">
			                            <span class="icon">
			                                <svg width="32px" height="28px" viewBox="0 0 32 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
			                                    <path d="M28.7817528,0.00172488695 C30.8117487,0.00431221738 31.9749312,1.12074529 31.9644402,3.10781507 C31.942147,6.67703739 32.1336065,10.2669583 31.8057648,13.8090137 C30.7147076,25.5813672 17.2181194,31.8996281 7.20714461,25.3808491 C2.71833574,22.4571656 0.196577202,18.3122624 0.0549495772,12.9357897 C-0.0342233715,9.5774348 0.00642900214,6.21519891 0.0300336062,2.85555035 C0.0405245414,1.1129833 1.21157517,0.0146615391 3.01995012,0.00819321302 C7.34746087,-0.00603710433 11.6775944,0.00431221738 16.0064164,0.00172488695 C20.2644248,0.00172488695 24.5237444,-0.00215610869 28.7817528,0.00172488695 L28.7817528,0.00172488695 Z M8.64885184,7.85611511 C7.38773662,7.99113854 6.66148108,8.42606978 6.29310958,9.33228474 C5.90114134,10.2969233 6.17774769,11.1421181 6.89875951,11.8276216 C9.35282156,14.161969 11.8108164,16.4924215 14.2976518,18.7943114 C15.3844131,19.7966007 16.5354102,19.7836177 17.6116843,18.7813283 C20.0185529,16.5495467 22.4070683,14.2982907 24.7824746,12.0327533 C25.9845979,10.8850542 26.1012707,9.56468083 25.1469132,8.60653379 C24.1361858,7.59255976 22.8449191,7.6743528 21.5890476,8.85191291 C19.9936451,10.3488554 18.3680912,11.8172352 16.8395462,13.3777945 C16.1342655,14.093159 15.7200114,14.0048744 15.0566806,13.3440386 C13.4599671,11.7484252 11.8081945,10.2060421 10.1262706,8.70001155 C9.65564653,8.27936164 9.00411403,8.05345704 8.64885184,7.85611511 L8.64885184,7.85611511 L8.64885184,7.85611511 Z"></path>
			                                </svg>
			                            </span>
			                            <span class="text">pocket</span>
			                        </a>
			                    </li> -->

			                    <!--<li class="github">
			                        <a href="https://github.com/kni-labs/rrssb">
			                            <span class="icon">
			                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			                                     width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
			                                <path d="M13.971,1.571c-7.031,0-12.734,5.702-12.734,12.74c0,5.621,3.636,10.392,8.717,12.083c0.637,0.129,0.869-0.277,0.869-0.615
			                                    c0-0.301-0.012-1.102-0.018-2.164c-3.542,0.77-4.29-1.707-4.29-1.707c-0.579-1.473-1.414-1.863-1.414-1.863
			                                    c-1.155-0.791,0.088-0.775,0.088-0.775c1.277,0.104,1.96,1.316,1.96,1.312c1.136,1.936,2.991,1.393,3.713,1.059
			                                    c0.116-0.822,0.445-1.383,0.81-1.703c-2.829-0.32-5.802-1.414-5.802-6.293c0-1.391,0.496-2.527,1.312-3.418
			                                    C7.05,9.905,6.612,8.61,7.305,6.856c0,0,1.069-0.342,3.508,1.306c1.016-0.282,2.105-0.424,3.188-0.429
			                                    c1.081,0,2.166,0.155,3.197,0.438c2.431-1.648,3.498-1.306,3.498-1.306c0.695,1.754,0.258,3.043,0.129,3.371
			                                    c0.816,0.902,1.315,2.037,1.315,3.43c0,4.892-2.978,5.968-5.814,6.285c0.458,0.387,0.876,1.16,0.876,2.357
			                                    c0,1.703-0.016,3.076-0.016,3.482c0,0.334,0.232,0.748,0.877,0.611c5.056-1.688,8.701-6.457,8.701-12.082
			                                    C26.708,7.262,21.012,1.563,13.971,1.571L13.971,1.571z"/>
			                                </svg>
			                            </span>
			                            <span class="text">github</span>
			                        </a>
			                    </li>-->
			                </ul>
			                <!-- Buttons end here -->
			            </div>
            		</div>
            </div>
	        <div class="container">
	            <div class="row no-padding no-margin">
		            <div class="col-md-9" style="padding-left: 0;">
		               <div class="w3l_contact_grids">
		               		<div id="results" class="col-md-12" style="padding-left: 0;">
							    <!-- All data will display here  -->
							</div>
							<form action="#" method="post" id="contactform" class="contact-form clearfix">
								<!--Input Field-->
								<div class="form-group">
									<div class="row">
										<div class="col-md-4">
											<hr class="linesi">
										</div>
										<div class="col-md-4" style="padding: 0;">
											<h6 class="width">How shall we call you ?</h6>
										</div>
										<div class="col-md-4">
											<hr class="linesi">
										</div>
									</div>
									<div class="col-md-12 visible input-group w3l_contact_grid_left">
										<input type="text" id="name" name="name" placeholder="Type your name here">
									</div>
								</div>
								<!--/ Input Field--> 
								<!--Input Field-->
								<div class="form-group">
									<div class="row">
										<div class="col-md-4">
											<hr class="linesi">
										</div>
										<div class="col-md-4" style="padding: 0;">
											<h6 class="width">Share a contact</h6>
										</div>
										<div class="col-md-4">
											<hr class="linesi">
										</div>
									</div>
									<div class="col-md-12 visible input-group w3l_contact_grid_left">
										<input type="text" id="email" name="email" placeholder="Put the phone /whatsapp or email here ">
									</div>
								</div>
								<!--/ Input Field--> 
								<!--Input Field-->
								<!--/ Input Field-->
								<div class="row">
									<div class="col-md-12 "> 
										<!--Input Field-->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<hr class="linesi">
												</div>
												<div class="col-md-4" style="padding: 0;">
													<h6 class="width">  We're all ears!</h6>
												</div>
												<div class="col-md-4">
													<hr class="linesi">
												</div>
											</div>
											<div class=" col-md-12 visible input-group w3l_contact_grid_left">
												<textarea rows="6" id="comments" name="comments" placeholder="Share with us any information that might help us to respond to your request"></textarea>
											</div>
											<!--/ Input Field--> 
										</div>
									</div>
									<div class="col-md-4 col-sm-7 col-xs-9 w3l_contact_grid_left"> 
									<!--Input Field-->
									<!-- <input type="submit" value="Send" style="margin: 20px 0;" /> -->
									<div class="col-md-12 w3l_contact_grid_left" style="padding-left: 0;"><input type="button" id="submitFormData" onclick="SubmitFormData();" value="Submit Now" style="margin: 20px 0;" /></div>
									<!--/ Input Field--> 
									</div>
								</div>
							</form>
						</div>
		            </div>  
		            <?php
		            	// echo $agent_responsible;

			            $query = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `post_type`="noo_agent" AND `post_status`="publish" AND `ID`="'.$agent_responsible.'" ORDER BY `ID` DESC limit 9');
			            $query->execute();
			            while($row = $fetch = $query->fetch(PDO::FETCH_ASSOC)) {
			            	$id = $row['ID'];
			            	$agent_name= $row['post_title'];

			            }
		            ?>
	      			<?php
	      				$q = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$agent_responsible.'" AND `meta_key`="_noo_agent_mobile" ORDER BY `meta_id`');
						$q->execute();
						while($row = $fetch = $q->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$agent_mobile = $row['meta_value'];
						}
	      			?>
	      			<?php
	      				$q = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$agent_responsible.'" AND `meta_key`="_noo_agent_email" ORDER BY `meta_id`');
						$q->execute();
						while($row = $fetch = $q->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['meta_id'];
							$agent_email = $row['meta_value'];
						}
	      			?>

					<?php
	      				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_postmeta` WHERE `post_id`="'.$agent_responsible.'" AND `meta_key`="_thumbnail_id" ORDER BY `meta_id`');
							$qu->execute();
							while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
								$id = $row['meta_id'];
								$_thumbnail_id = $row['meta_value'];

		          				$qu = $db->pdo->prepare('SELECT * FROM `wpbb_posts` WHERE `ID`="'.$_thumbnail_id.'" ORDER BY `ID`');
		    					$qu->execute();
		   						while($row = $fetch = $qu->fetch(PDO::FETCH_ASSOC)) {
		   							$img=$row['guid'];
		   						}
	   						}
	      			?>
		          	<div class="col-md-3" style="background-color: #f5f5f5;height: 50%; padding: 0;">
		             	<div class="agileinfo-team-grids">
							<div class="wthree-team-grid">
								<img src="<?=$img?>" class="" alt="We design v1-08">
								<div class="wthree-team-grid-info">
									<h4><?=$agent_name?></h4>
									<p><i class="fa fa-user" aria-hidden="true"></i> Real Estate agent </p>
									<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:forrestjacksonrelo17@gmail.com"><?=$agent_email?></a></p>
									<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+250 784 583 564 "><?=$agent_mobile?></a></p>
									<div class="team-social-grids">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
		            	</div>
		      		</div>
	        	</div>
	   		</div>
	   		<?php } ?>

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
				<p>© 2018 Forrest Jackson. All rights reserved</p>
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
	<script type="text/javascript" src="js/rrssb.min.js"></script>
	<!-- testimonilas slider -->

</body>

<!-- Mirrored from 160.153.129.104/forestJackson/commercialproperties.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 09:27:01 GMT -->
</html>