<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Nuestra Empresa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.css" media="screen" />
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/styles.css" media="screen" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script>
			$(function() {
			    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
			    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			});
		</script>
		<style>
		  .ui-tabs-vertical { width: 55em; }
		  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
		  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
		  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
		  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
		  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
		</style>
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
							<h3>Eventos / <span>Jac Motor</span></h3>
						</div>
					</div>
				</div>	
			</div>
			<div id="tabs">
				<ul>
					<li><a href="tabs-1">Nuestra Empresa</a></li>
					<li><a href="tabs-2">Reseña Historíca</a></li>
					<li><a href="tabs-3">Reseña Historíca JAC</a></li>
				</ul>
				<div id="tabs-1">
                	<h3>Nuestra Empresa</h3>
                	<img src="photos/empresa.jpg" width="267" height="344" style="float:right; margin-left:15px;">
					<p> ALMOTORES, Empresa 100% Vallecaucana que se dedica a la Comercialización de Vehículos Nuevos, la venta de repuestos, la prestación de servicio técnico mecánico y servicio de lámina y pintura. </p>
                    <h4>Misión</h4>
                    <p> Comercializar vehículos y servicios a nivel nacional, contando con funcionarios altamente calificados, ofreciendo a nuestros clientes la solución a sus necesidades de transporte personal y alternativas de Inversión en vehículos productivos. </p>
                    <h4>Visión</h4>
                    <p> Ser el Concesionario de Vehículos número UNO en el Valle del Cauca y en el País, ofreciendo a los clientes la satisfacción total de sus necesidades en cuanto a vehículos y servicios requeridos, y así lograr la expansión en nuevas áreas geográficas </p>
				</div>
				<div id="tabs-2">
                	<h4>Reseña Historíca</h4>
                    <p> ALMOTORES Empresa 100 % Vallecaucana con amplia experiencia en el Sector Automotor introdujo la Marca JAC en el Valle del Cauca en el año 2006  y ha permanecido acompañando la Marca en su rápido crecimiento en Colombia.<br><br> ALMOTORES es representante exclusivo para Cali de la marca JAC, la marca es conocida por la venta de vehículos comerciales con más de 8000 unidades rodando por el país y segunda marca más vendida en el segmento de camiones livianos, lanzo en 2011 la línea de automóviles particulares.<br><br> Desde que JAC entró a Colombia, los conductores han identificado un producto que cumple con sus expectativas en cuanto a diseño, resistencia, desempeño, economía y respaldo.<br><br> Esto se ha logrado gracias a que las fábricas de JAC, tienen dentro de su línea de ensamble el concepto de fabricación de vehículo adaptado, el cual permite que los vehículos sean fabricados de acuerdo a las necesidades específicas de cada mercado como el Colombiano, donde elementos claves como el motor, la transmisión, los frenos de aire, silletería, entre otros son diseñados exclusivamente para Colombia. </p>
				</div>
				<div id="tabs-3">
                    <h4>Reseña Historíca JAC</h4>
                    <p> Fundada en 1964, como Hefei Jianghuai fábrica de automóviles, Posteriormente cambio su razón social a JIANGHUAI AUTOMOBILE COMPANY LTDA.<br><br> Tiene su propio centro de tecnología e investigación ubicado en la provincia de Anhui  - China, con un promedio de 1000 ingenieros en investigación y desarrollo.<br><br> JAC es uno de los 15 grupos más fuertes en China, constituida por 6 empresas cada una con su especialidad en el sector automotriz.<br><br> El grupo completo produce vehículos diseñados para terrenos difíciles como microbuses, camiones de tipo mediano y pesado, vehículos multipropósito, ejes de transmisión para camiones y buses, transmisiones y caja de cambios.<br><br> Su producción anual alcanza los 200.000 camiones y 40.000 vehículos de pasajeros.<br><br> Con la fortaleza tecnológica y económica que le ha dado el dominio del mercado de vehículos comerciales hace 4 años decidió incursionar en la producción de automóviles con el claro objetivo de convertirse en uno de los 3 conglomerados automotrices más grandes de china. Para ello no recurrió a lo que hicieron la mayoría de sus competidores copiando modelos de otras marcas sino por el contrario decidió recurrir a los mejores diseñadores del mundo para posicionar sus productos en el más alto nivel.<br><br> Las carrocerías fueron diseñadas por Pininfarina en Italia, sus motores por la compañía Avl e ilmor en Austria e Inglaterra respectivamente, el desarrollo y montaje de las plantas fue hecho por japoneses y gran parte de la maquinaria provino de Alemania y Japón.<br><br> Así en este corto periodo de tiempo ha logrado desarrollar una amplia línea de automóviles de última generación en los segmentos A, B, C, camperos y Vanes con más de 7 productos que han catapultado sus ventas en China y empezado a conquistar los mercados mundiales. </p>
				</div>
			</div>	
		</div>
		<?php include_once('footer.php') ?>
		<div id="tooltips"></div>
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