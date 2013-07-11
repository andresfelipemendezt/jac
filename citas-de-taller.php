<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Citas de Taller</title>
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
					<?php include("navegacionsec.php") ?>
				</div>
				<div class="padding">	
					<div class="row-fluid">
						<div class="span12">
							<h3>Cotizar Vehículo / <span>Jac Motor</span></h3>
						</div>
					</div>
				</div>	
			</div>
			<div class="contenido">
				<div class="row-fluid">
					<div class="span4">
						<h3>Contáctenos</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, magni, adipisci ullam animi doloremque fugiat.</p>
						<form action="" method="post" id="Form_Contacto" enctype="multipart/form-data" style="margin-bottom:0; overflow:hidden;">
                            <input type="text" name="Form[Nombre]" id="nombre" placeholder="Nombre " style="width:270px; float:left;">
                            <input type="text" name="Form[Nombre]" id="nombre" placeholder="Correo Eléctronico" style="width:270px; float:left;">
                       		<textarea name="" id="" placeholder="mensaje" cols="30" rows="10" style="width:270px; float:left;"></textarea>
                        	<input type="submit" value="Solicitar Cita" class="button">
        				</form>
					</div>
					<div class="span8 text-left">
						  
                        <h3>Citas Taller</h3>
                        <p>
                        Pensando en usted y su comodidad almotores cuenta con el servicio de agendamiento de citas de taller para que realice las revisiones preventivas y correctivas a su vehículo para mayor información comuníquese con nuestra central al número 4859191 de lunes a viernes horario de atención 7:30 am a 5:30 pm y sábado de 9:00 am. A 1:00 pm.
                        </p>
                        
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