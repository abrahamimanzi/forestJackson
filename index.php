<?php
    require_once 'core/config.php';
    require_once 'core/dbClass.php';
    $db = new database($pdo);
    $rows = $db->getData();

    if(isset($_GET['url'])) {
        $url_id = $_GET['url'];
    }
    $page='home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Forrest Jackson</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ForrestJackson" />
<script type="application/x-javascript"> </script>
<link rel="icon" href="img/logo forrest-01.png" type="image/png" sizes="16x16">
		
<link rel="stylesheet" type="text/css" href="css/combine.css" media="screen" title="style (screen)" />

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
	<?php include 'nav-1.php'; ?>
	</div>
</div>
<!--/banner-section-->




<div class="container">
	<div id="searchResults"></div>
	<?php
		if(isset($_POST['search'])){


			if(!isset($_POST['property_location'])){
				$location= '';
			}else{
				$location = $_POST['property_location'];
			}

			// $location = $_POST['property_location'];

			// $max_price = $_POST['property_max_price'];

			if(!isset($_POST['property_min_bedrooms'])){
				$min_bedrooms= '';
			}else{
				$min_bedrooms = $_POST['property_min_bedrooms'];
			}

			// $min_bedrooms = $_POST['property_min_bedrooms'];

			// $property_id = $_POST['property_id'];
			if(!isset($_POST['property_id'])){
				$property_id= '';
			}else{
				$property_id = $_POST['property_id'];
			}

			// $property_type = $_POST['property_type'];
			if(!isset($_POST['property_type'])){
				$property_type= '';
			}else{
				$property_type = $_POST['property_type'];
			}


			// $max_price = $_POST['property_max_price'];
			if(!isset($_POST['property_max_price'])){
				$max_price= '';
			}else{
				$max_price = $_POST['property_max_price'];
			}

			// $location = $_POST['property_location'];
			// $location = $_POST['property_location'];
			// echo $location;
			// echo $max_price;
			// echo $min_bedrooms;
			// echo $property_id;



			if ($location!='') {
				// echo "string";
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
												<img src="<?=$img?>" alt="picture-01" class="rule">
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
							        		<img src="<?=$img?>" alt="picture-01" class="rule">
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
					        		<img src="<?=$img?>" alt="picture-01" class="rule">
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



		}elseif (isset($_POST['searchsales'])) {

			// $location = $_POST['property_location'];
			if(!isset($_POST['property_location'])){
				$location= '';
			}else{
				$location = $_POST['property_location'];
			}

			// $min_bedrooms = $_POST['property_min_bedrooms'];
			if(!isset($_POST['property_min_bedrooms'])){
				$min_bedrooms= '';
			}else{
				$min_bedrooms = $_POST['property_min_bedrooms'];
			}


			// $property_id = $_POST['property_id'];
			if(!isset($_POST['property_id'])){
				$property_id= '';
			}else{
				$property_id = $_POST['property_id'];
			}

			// $property_type = $_POST['property_type'];
			if(!isset($_POST['property_type'])){
				$property_type= '';
			}else{
				$property_type = $_POST['property_type'];
			}

			
			// $max_price = $_POST['property_max_price'];
			if(!isset($_POST['property_max_price'])){
				$max_price= '';
			}else{
				$max_price = $_POST['property_max_price'];
			}

			// echo $location.' <br>';
			// echo $property_type.' <br>';
			// echo $min_bedrooms.' <br>';
			// echo $property_id.' <br>';

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
												<img src="<?=$img?>" alt="picture-01" class="rule">
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
							        		<img src="<?=$img?>" alt="picture-01" class="rule">
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
					        		<img src="<?=$img?>" alt="picture-01" class="rule">
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

	?>
</div>



<?php if(!isset($_POST['search']) AND !isset($_POST['searchsales']) ){ ?>

<!--Griglia alternata testo e immagine, resposive con flexbox.-->
<section class="business">
  <div class="grid-flex">
    <div class="col col-image" style="background-image: url(img/residential1.jpg);">
    </div>
    <div class="col col-text" style="background-color: #F5F5F5;">
      <div class="Aligner-item">
        <a href="residential.php"><h3>Residential</h3></a>
		<span></span>
		<p>The residential market in Kigali and its environs usually has a large number of homes for rent but few for sale. Most have four or more bedrooms with only a few featuring three bedrooms or less. Over the last few years there has been an increase in the number of apartments and townhouses with a smaller number of bedrooms. 
			<br>
			<br>
		Speak to one of our agents for more details.
		<a href="whyUs.php"><i class="fa fa-user" aria-hidden="true" style="color: #000;"></i></a>
		</p>
		<a href="residential.php" class="btn-mc btn">View more</a>
      </div>
    </div>
  </div>
  
  <div class="grid-flex">
    <div class="col col-image" style="background-image: url(img/commercial1.jpg);">
      &nbsp;
    </div>
    <div class="col col-text col-left">
      <div class="Aligner-item">
        <a href="commercial.php"><h3>Commercial</h3></a>
		<span></span>
		<p>Commercial real estate is in abundance but becomes more limited on the outskirts of the city. Prices vary widely for commercial properties but can be acquired by the square meters in some instances or at a set price for a specific space. Commercial space is limited in residential homes and neighborhoods as per the Kigali Master Plan.
		</br>
		<br>
		Let one of our agents guide you through this process.
		<a href="whyUs.php"><i class="fa fa-user" aria-hidden="true" style="color: #000;"></i></a>
		</p>
		<a href="commercial.php" class="btn-mc btn">View more</a>
      </div>
    </div>
  </div>

  <div class="grid-flex">
    <div class="col col-image" style="background-image: url(img/forrest-04.png);">
      &nbsp;
    </div>
    <div class="col col-text" style="background-color: #F5F5F5;">
      <div class="Aligner-item">
       <a href="luxury.php" ><h3>Luxury properties</h3></a>
		<span class="line3" style=" background: #9b635e;display: block;width: 39%;height: 2px;"></span>
		<p>Rwanda has positioned herself as the cleanest city in Africa with superb weather, secure cities and friendly charm . Anyone looking to own that special property in the land of a Thousand Hills and mountain gorillas has come to the right place. Luxury homes with ultra modern features are available in the luxe neighborhood of Kiyovu.
			<br>
			<br>
		An agent is available to make your luxury home dream a reality. <a href="mailto:webmaster@example.com"><i class="fa fa-user" aria-hidden="true" style="color: #000;"></i></a></p>
		
		<a href="luxury.php" class="btn-mc btn" >View more</a>
		<!-- <a href="luxury.php" class="btn-mc btn" data-toggle="modal" data-target="#myModal3">View more</a> -->

      </div>
    </div>
  </div>

		<!-- Modal -->
		<div class="modal modal-mc fade" id="myModal3" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p style="font-size: 45px;color:#1b8842;">Coming Soon <a href="whyUs.php"><i class="fa fa-user" aria-hidden="true" style="color: #000;"></i></a></p>
					</div>
				</div>

			</div>
		</div>

  <div class="grid-flex">
    <div class="col col-image" style="background-image: url(img/1for-01.jpg);">
      &nbsp;
    </div>
    <div class="col col-text col-left" style="background-color: #F5F5F5;">
      <div class="Aligner-item">
        <a href="plots.php"><h3>Plots</h3></a>
		<span style=" background: #9b635e;display: block;width: 12%;height: 2px;"></span>
		<p>Land is more readily available in the secondary cities on the outskirts of Kigali. Nonetheless, smaller plots are usually available within Kigali itself. When land is purchased it is actually a long term lease which is provided. 
		<br>
		<br> 
		Our agents are knowledgeable about the process and are waiting to hear from you. <a href="mailto:webmaster@example.com"> <i class="fa fa-user" aria-hidden="true" style="color: #000;"></i></p>
		<a href="plots.php" class="btn-mc btn">View more</a>
      </div>
    </div>
  </div>
</section>

<!-- services -->
<div class="services" id="services">
	<div class="">
			<!-- <div class="heading">
				<h3>What we offer</h3>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
			</div> -->
		<div class="container">
			<div class="services-top-grids">
				<a href="lookingToSell.php">
					<div class="col-md-4">
						<div class="grid1">
							<img class="img-responsive" src="img/stills-01-01.png" alt="" style="width: 50%;margin: auto;">
							<!-- <h4>Legal consultants</h4> -->
							<p style="color: #000;text-align: center;text-justify: inter-word;">Selling a property requires much thought. The Forrest Jackson seller's guide can help you. Follow these steps </p>
							<p style="text-align: center;"><a href="lookingToSell.php" style="color: #138808;"> Read more</a></p>	
						</div>
					</div>
				</a>
				<a href="buyingProperty1.php">
					<div class="col-md-4">
						<div class="grid1">
							<img class="img-responsive" src="img/stills-01-03.png" alt="" style="width: 50%;margin: auto;">
							<!-- <h4>Legal consultants</h4> -->
							<p style="color: #000;text-align: center;text-justify: inter-word;">Buying a home or an investment property is a big decision for yourself and / or your family.</p>
							<p style="text-align: center;"><a href="buyingProperty1.php" style="color: #138808;"> Read more</a></p>	
						</div>
					</div>
				</a>
				<a href="#">
					<div class="col-md-4">
						<div class="grid1" style="text-align: center;">
							<img class="img-responsive" src="img/stills-01-02.png" alt="" style="width: 50%;margin: auto;">
							<!-- <h4>Legal consultants</h4> -->
							<p style="color: #000;text-align: center;">When you entrust your home in the hands of someone else, you need to know that it is well taken care of. Learn how we can help .</p>		
						</div>
					</div>
				</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- //services -->
<?php } ?>


<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="social">
			<ul>
				<li><a href="https://web.facebook.com/ForrestJacksonRelo/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/MoveToKigali" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
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

<!-- testimonilas slider -->

</body>

</html>