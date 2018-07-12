<?php
	require_once 'core/config.php';
	require_once 'core/dbClass.php';
	$db = new database($pdo);
	$rows = $db->getData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>plots</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
									<li><a href="whyUs.php">Why Us?</a></li>
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
											<form action="#" method="post">
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
												<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input name="property_max_price" type="text" placeholder="Max. Price ($)" >
												</div>
												<div class="col-md-2 col-xs-12 form-left-agileits-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-home" aria-hidden="true"></i> Category</label> -->
														<select class="form-control">
															<option selected="selected" disabled="disabled" hidden="hidden">Zoning</option>
									                         <option>Residential</option>
										                      <option>Commercial</option>
										                      <option>Mixed Use</option>
														</select>
												</div>
												<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input type="text" placeholder="Property ID" required="">
												</div>
												<div class="col-md-3 col-xs-12 form-left-agileits-submit">
													  <input type="submit" value="Find Plot" style="margin-top: 0;">
												</div>
												<div class="clearfix"></div>
												<input type="text" name="search" hidden>
											</form>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
										<div class="book-form">
											<form action="#" method="post">
												<div class="col-md-3 col-xs-12 form-date-w3-agileits" style="padding-right: 0;">
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
															<option selected="selected" disabled="disabled" hidden="hidden">Zoning</option>
									                         <option>Residential</option>
										                      <option>Commercial</option>
										                      <option>Mixed Use</option>
														</select>
												</div>
												<div class="col-md-2 col-xs-12 form-time-w3layouts" style="padding-right: 0;">
														<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
														<input type="text" placeholder="Property ID" required="">
												</div>
												<div class="col-md-3 col-xs-12 form-left-agileits-submit">
													  <input type="submit" value="Find Plot" style="margin-top: 0;">
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
	<div class="row">
		<div class="col-md-12">
			<h2 class="titles" style="font-family: brandon;text-align: center;">Featured  plots</h2>
		</div>         
	</div>
</div>

<section id="#">
	<div class="container">

		<?php
		$type = $db->pdo->prepare('SELECT * FROM `wpbb_terms` WHERE `name`="Land" ORDER BY `term_id` DESC LIMIT 1');
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
				if(strlen($title) > 55){$substr =  substr($title, 0, 55);}else{$substr = $title;}
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
							<h6 style="font-weight: 400;"><?php echo $title; ?></h6>
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
		<div class="row">
			<div class="col-md-12">
				<h3 style="color: #9b635e;">DISCLAIMER</h3>
				<p>
				<b>Information deemed reliable but is not guaranteed.</b> <br><br>
				All information relating to real estate on this website comes from manual real estate searches across the country or from landlords and sellers submitting information to Forrest Jackson Properties. </p>
				<p>
				Given the lack of a multiple listing service in Rwanda there may be instances when a property is listed on this website but is no longer available. We do our best to keep the website current but are limited by the need to get property information manually as is the case without a multiple listing services.
				</p> 
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
<!-- testimonilas slider -->

</body>

<!-- Mirrored from 160.153.129.104/forestJackson/residential.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 09:20:48 GMT -->
</html>