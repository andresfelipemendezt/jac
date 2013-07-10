<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.css" media="screen" />
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/styles.css" media="screen" />
	</head>
	<body>
		<?php include_once('header.php') ?>				
		<div id="banner_ppal" class="container internas">	
			<div class="row-fluid">
				<div class="span12">
					<img src="photos/banner2.jpg" alt="Banner Principal"/>
				</div>
			</div>
		</div>	
		<div id="content" class="container internas">
			<div class="internas contenido">	
				<div id="info" class="row-fluid">
					<div class="span8 text-left">
						<a href="#" class="a_tooltip" title="Lorem">
							<div class="globs"><i class="herramienta"></i></div>
						</a>
						<a href="#" class="a_tooltip" title="SOPORTE">
							<div class="globs"><i class="soporte"></i></div>
						</a>	
						<a href="#" class="a_tooltip" title="Lorem">	
							<div class="globs"><i class="fecha"></i></div>
						</a>
						<div class="infoA">
							<a href="#">	
								<i class="promociones"></i>Nuestras Promociones<br>
								<span>Ofertas y Descuentos</span>
							</a>	
						</div>
						<div class="infoB">
							<a href="#">Blog Oficial de Jac Motors</a>
						</div>
					</div>
					<div class="span4 text-right">
						<div class="iconos">
							<a href="http://www.youtube.com" target="_blank"><i class="youtube"></i></a>	
							<a href="https://twitter.com" target="_blank"><i class="twitter"></i></a>
							<a href="https://www.facebook.com/AlmotoresJAC" target="_blank"><i class="facebook"></i></a>
							<a href="https://plus.google.com" target="_blank" class="last"><i class="google"></i></a>
						</div>
						<div class="text-left">
							Haz click y síguenos en:<br>
							<span>Comunidad Jac Motors</span> 
						</div>
					</div>
				</div>
				<div class="padding">	
					<div class="row-fluid">
						<div class="span12">
							<h3>Posventa / <span>Jac Motor</span></h3>
						</div>
					</div>
				</div>	
			</div>
			<div class="contenido">
				<div class="row-fluid">
					<div class="span4">
						<form>
							Formulario
						</form>
					</div>
					<div class="span8 text-left">
						<p>
							Pensando en usted y en su comodidad desde el mes de septiembre nuestro concesionario cuenta con el servicio de CITAS DE TALLER. De lunes a 
							viernes de 6:30am a 5:30pm y los días sábados de 7:30am a 1:00pm es el horario para la recepción de vehículos, citas para revisión y todos 
							los servicios que ofrecemos en nuestros talleres ALMOTORES KIA.
						</p>
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
		<script src="js/menu_top.js"></script>
		<script>
			$('.a_tooltip').tooltip({
				'container': '#tooltips'
			})
		</script>
	</body>
</html>