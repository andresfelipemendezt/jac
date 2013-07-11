<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.css" media="screen" />
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/styles.css" media="screen" />
		
		<link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	</head>
	<body>
		<?php include_once('header.php') ?>	
		<div class="row-fluid" id="banner_ppal">
			<div class="span12">
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="photos/banner_p1.jpg" alt="Banner Principal 1" />
						<img src="photos/banner_p2.jpg" alt="Banner Principal 2" />
                        <img src="photos/banner_p3.jpg" alt="Banner Principal 2" />
                        <img src="photos/banner_p4.jpg" alt="Banner Principal 2" />
                        <img src="photos/banner_p5.jpg" alt="Banner Principal 2" />
					</div>	
				</div>
			</div>
		</div>
		<div id="content" class="container">
			<div>	
				<div id="info" class="row-fluid">
					<?php include("navegacionsec.php") ?>
				</div>	
				<div class="row-fluid">
					<div class="span8 text-left">
						<h3>JAC MOTORS</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
							volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam 
							erat volutpat.
						</p>
						<div id="noticias" class="row-fluid">
							<div class="noticia span6">
								<a href="#">
									<div class="title_not">
										<div>
											<i class="plus"></i>
											NOTICIAS fermentum dictum magned laoreet aliquam leo. Ut telloribus eget elementum vel curleifend elit. Aean 
											auctorisi et urnaliqurat
										</div>
									</div>
									<img src="photos/noticia1.png" alt="Noticas JAC" />
								</a>		
							</div>
							<div class="noticia span6">
								<a href="#">
									<div class="title_not">
										<div>
											<i class="plus"></i>
											NOTICIAS fermentum dictum magned laoreet aliquam leo. Ut telloribus eget elementum vel curleifend elit. Aean 
											auctorisi et urnaliqurat
										</div>
									</div>
									<img src="photos/noticia2.png" alt="Noticas JAC" />
								</a>		
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="fb-like-box" data-href="https://www.facebook.com/AlmotoresJAC" data-width="290" data-height="280" data-show-faces="false" data-stream="true" data-show-border="true" data-header="true"></div>
					</div>
				</div>
			</div>	
		</div>
		<?php include_once('footer.php') ?>
		<div id="tooltips"></div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/galleria-1.2.9.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script src="js/menu_top.js"></script>
		<script>
			$('.a_tooltip').tooltip({
				'container': '#tooltips'
			});
			$(window).load(function() {
				$('#slider').nivoSlider({
					directionNav:false,
					effect:'fade'
				});
			});
		</script>
	</body>
</html>