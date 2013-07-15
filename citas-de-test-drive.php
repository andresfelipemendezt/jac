<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Citas de Test Drive</title>
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
					<img src="photos/testdrive.jpg" alt="Banner Principal"/>
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
			<div class="contenido">
				<div class="row-fluid">
					<div class="span8 offset2 text-left">
                    	<h3>Test Drive</h3>
						<p> Almotores ofrece en sus concesionarios el servicio de 'TEST DRIVE' o prueba de vehículos para que puedas ver, oler, oír y sentir el carro de tus sueños. Envíanos tus datos y uno de nuestros ejecutivos comerciales se pondrán en contacto con usted lo más pronto posible. </p>
                            <div style="border:1px solid #eaeaea; border-radius:4px; padding:20px 10px;">
                             	<form action="" method="post" id="Form_Contacto" enctype="multipart/form-data" style="margin-bottom:0; overflow:hidden;">
                             		<input type="text" name="Form[Nombre]" id="nombre" placeholder="Nombre " style="width:270px; float:left;">
                             		<input type="email" name="Form[Correo]" id="correo" placeholder="Apellido" style="width:270px; float:right;">
                             		<input type="text" name="Form[Nombre]" id="nombre" placeholder="Correo Eléctronico" style="width:270px; float:left;">
                       				<input type="email" name="Form[Correo]" id="correo" placeholder="Celular" style="width:270px; float:right;">
                        			<input type="tel" name="Form[Tel]" id="telefono" placeholder="Teléfono" style="width:270px; float:left;">
                        			<input type="text" name="Form[Direccion]" id="ciudad" placeholder="Direccion" style="width:270px; float:right;">
                         			<input type="tel" name="Form[Tel]" id="telefono" placeholder="Fecha" style="width:270px; float:left;">
                        			<input type="text" name="Form[Direccion]" id="ciudad" placeholder="Vehículo" style="width:270px; float:right;">
                        			<input type="submit" value="Solicitar Cita" class="button">
			        			</form>
			        		</div>
        					<br>
       						<b> IMPORTANTE: Su cita para la prueba de vehículo o test drive, será agendada y confirmada previa verificación de disponibilidad del vehículo por el concesionario Almotores.</b>
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
		<script>
			$(document).ready(function () {
				$("ul.nav li").removeClass("active");
				$("ul.nav li#servicios").addClass("active");
			})
		</script>
	</body>
</html>