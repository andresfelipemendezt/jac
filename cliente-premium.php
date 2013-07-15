<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Citas de Test Drive</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.css" media="screen" />
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="css/styles.css" media="screen" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script>
			$(function() {
			    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
			    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			    $('#myTab a').click(function (e) {
					e.preventDefault();
				    $(this).tab('show');
				});
			});
		</script>
		<style>
		  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
		</style>
	</head>
	<body>
		<?php include_once('header.php') ?>				
		<div id="banner_ppal" class="container internas">	
			<div class="row-fluid">
				<div class="span12">
					<img src="photos/postventa.jpg" alt="Banner Principal"/>
				</div>
			</div>
		</div>	
		<div id="content" class="container internas">
			<div class="internas contenido">	
				<div id="info" class="row-fluid">
					<?php include("navegacionsec.php") ?>
				</div>
				<div class="padding">	
					<div class="row-fluid">
						<div class="span12">
							<h3>Servicios / <span>Jac Motor</span></h3>
						</div>
					</div>
				</div>	
			</div>
			<div id="tabs" class="contenido">
			 	<div class="row-fluid"> 
				 	<div class="span3">
				 		<ul>
 			 			    <li><a href="#tabs-1">¿Porqué ser<br>Cliente Premium?</a></li>
 			 			    <li><a href="#tabs-2">¿Cómo puedo ser<br>cliente Premium</a></li>
 			 			    <li><a href="#tabs-3">Condiciones<br>y Restricciones</a></li>
 			 			</ul>
 			 		</div>
 			 		<div class="span9 text-left">
		 			  	<div id="tabs-1">
	                        <h3> Cliente Premium</h3>
							<p> <b>Un programa con muchos beneficios para usted y su familia</b><br> Almotores S.A. su concesionario de confianza desea ofrecerle además de un amplio portafolio de vehículos, servicios adicionales totalmente gratis a través de nuestro programa Cliente Premium, dichos servicios son para que usted tengan más disponibilidad de tiempo, obtener descuentos </b></p>
							<h2>¿Porqué ser cliente Premium?</h2>
							<p>Al convertirse en nuestro cliente Premiun, Almotores le entrega un paquete de beneficios exclusivos con el fin de premiar su fidelidad con el concesionario y la marca.</p>
							<ul class="nav nav-tabs" id="myTab">
								<li class="active"><a href="#mensajeros">MENSAJEROS</a></li>
								<li><a href="#conductor">CONDUCTOR</a></li>
								<li><a href="#lavado">LAVADO</a></li>
								<li><a href="#combustible">COMBUSTIBLE</a></li>
							</ul>
							 
							<div class="tab-content">
								<div class="tab-pane active" id="mensajeros">
									<h3>Mensajeros</h3>
									<b>Mensajero de Diligencias (4 por Año)</b>
									<p>Recogida de documentos olvidados, llaves, traslados de implementos, etc. se debe agendar con 2 horas de anticipación.</p>
								</div>
								<div class="tab-pane" id="conductor">
									<h3>Servicio de conductores</h3>
									<ul class="conductores">
										<li>
											<b>Conductor Elegido:(12 por año)</b>
											<p>Puede programar recogida desde el lugar de la rumba hasta su casa, se programa con mínimo 24 horas de anticipación. (el conductor llega al sitio con chaleco marcado con el logo de Almotores).</p>
										</li><!--
									 --><li>
									 		<b>Conductor de Familia: (6 por año).</b>
									 		<p>Diligencias familiares pueden ser médicas, escolares o de entretenimiento, se debe agendar 12 horas antes, el servicio de traslado y espera podría variar hasta por 3 horas.</p>
										</li><!--
									 --><li>
									 		<b>Conductor Aeropuerto: (6 por año).</b>
									 		<p>recorrido hasta el Aeropuerto ida y regreso, en el vehículo del cliente, se debe solicitar con 48 horas de antelación, el cliente deberá asumir costo de gasolina y peaje si así lo requiere el servicio.</p>
										</li><!--
									 --><li>
									 		<b>Conductor de Mantenimiento: (4 por año).</b>
									 		<p>Mantenimiento de vehículo, revisiones técnicas y reparaciones varias, se debe agendar con 48 horas de anticipación.</p>
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="lavado">
									<h3>Lavados</h3>
									<b>Servicio de lavado ( 4 por año)</b>
									<p>Se presta en el establecimiento autorizado de Pronto Wash ubicado en el parqueadero del centro comercial Grand Limonar Premier, servicio de lunes a viernes, debe presentar la tarjeta Premium, tipo de lavado enjuague sencillo y detallado.</p>
								</div>
								<div class="tab-pane" id="combustible">
									<h3>Combustible</h3>
									<b>Descuento en Combustible</b>
									<p>El chip será entregado por Almotores 2 meses después de la entrega del vehículo o compra de la tarjeta, el cliente se acercará a cualquiera de los establecimientos de TERPEL AUTORIZADOS en Cali y presentando el chip se le aplicará el descuento en gasolina.</p>
								</div>
							</div>
		 			  	</div>
		 			  	<div id="tabs-2">
		 			  		<h3>Un programa con muchos beneficios para usted y su familia</h3>
							<p>Almotores S.A. su concesionario de confianza desea ofrecerle además de un amplio portafolio de vehículos, servicios adicionales totalmente gratis a través de nuestro programa Cliente Premiun, dichos servicios son para que usted tengan más disponibilidad de tiempo, obtener descuentos especiales y también contar con personal de confianza para trámites y diligencias. </p>
							<h2>¿Cómo puedo ser cliente premium?</h2>
							<div class="span5">
								<ol>
									<li>Comprando un vehículo KIA en cualquiera de nuestros concesionarios Almotores de la ciudad de Cali.</li>
									<li>Nuestro asesor comercial le entregara una tarjeta en el momento en que usted recibe su vehículo nuevo.</li>
									<li>Usted deberá comunicarse con nuestras líneas de contacto y activar el servicio de cliente Premium:
									<div class="datos">
										<ul>
											<li>Teléfono: 311 548 1202</li>
											<li>WhatsApp: 311 548 1202</li>
											<li>PBX: (1) 7470614 Ext 1 y 2</li>
										</ul>
									</div>
									</li>
									<li>Ya es uno de nuestros clientes Premium ahora podrá disfrutar de los servicios exclusivos.</li>
								</ol>
							</div>
							<div class="span6">
								<div class="fondorojo">
								<img src="images/cp-conte-1.jpg" alt="">
									<h4>¿Compró vehículo en nuestro<br>concesionario y no tiene la tarjeta<br>cliente Premium?</h4>
									<p>Comuníquese al teléfono (2) 485 9191 ext. 8100 Nuestros asesores le brindarán información acerca de como adquirirla.</p>
								</div>
							</div>
		 			  	</div>
		 			  	<div id="tabs-3">
		 			  		<h3>Un programa con muchos beneficios para usted y su familia</h3>
		 			  		<p>Almotores S.A. su concesionario de confianza desea ofrecerle además de un amplio portafolio de vehículos, servicios adicionales totalmente gratis a través de nuestro programa Cliente Premiun, dichos servicios son para que usted tengan más disponibilidad de tiempo, obtener descuentos especiales y también contar con personal de confianza para trámites y diligencias.</p>
		 			  		<div class="span5">
		 			  			<h2>Condiciones y Restricciones</h2>
		 			  			<ul>
		 			  				<li>La información aquí publicada es la vigente, pero podría cambiar en cualquier momento a voluntad de Almotores, sin necesidad de aviso o notificación previa.</li>
		 			  				<li>Todos los beneficios están sujetos a condiciones de uso expresadas aquí en cada uno de ellos.</li>
		 			  				<li>Tiempo de vigencia de la membresía es de 1 año a partir de la fecha de entrega del vehículo.</li>
		 			  				<li>Si desea renovar el servicio podrá adquirirlo en cualquiera de nuestras agencias Almotores con costo adicional.</li>
		 			  			</ul>
		 			  		</div>
		 			  		<img src="images/cp-conte-2.jpg" alt="" class="span6">
		 			  	</div>
 			 		</div>
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
		<script>
			$(document).ready(function () {
				$("ul.nav li").removeClass("active");
				$("ul.nav li#servicios").addClass("active");
			})
		</script>
	</body>
</html>