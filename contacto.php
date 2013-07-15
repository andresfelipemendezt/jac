<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Contacto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.css" media="screen" />
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/styles.css" media="screen" />
         <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	</head>
	<body>
		<?php include_once('header.php') ?>				
		<div id="banner_ppal" class="container internas">	
			<div class="row-fluid">
				<div class="span12">
					<img src="photos/contacto.jpg" alt="Banner Principal"/>
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
							<h3>Contacto / <span>Jac Motor</span></h3>
						</div>
					</div>
				</div>	
			</div>
			<div class="contenido">
				<div class="row-fluid">
					<div class="span4">
						<iframe width="290" height="278" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Almotores+Norte,+Brisas+de+Los+Alamos,+Cali+-+Valle+del+Cauca,+Colombie&amp;aq=1&amp;oq=almotores+&amp;sll=3.457118,-76.51987&amp;sspn=0.147189,0.149345&amp;ie=UTF8&amp;hq=Almotores+Norte,&amp;hnear=Brisas+de+Los+Alamos,+Cali,+Valle+del+Cauca,+Colombie&amp;t=m&amp;ll=3.489262,-76.50424&amp;spn=0.023817,0.024805&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
					</div>
					<div class="span8 text-left">
						<h3>Formulario de Contacto</h3>
						<p> Diligencia de forma correcta la siguiente información y en breve daremos respuesta a tu solicitud.</p>
                        <div style="border:1px solid #eaeaea; border-radius:4px; padding:20px 10px;">
                            <form action="" method="post" id="Form_Contacto" enctype="multipart/form-data" style="margin-bottom:0; overflow:hidden;">
                            	<input type="text" name="Form[Nombre]" id="nombre" placeholder="Nombre " style="width:270px; float:left;">
                            	<input type="email" name="Form[Correo]" id="correo" placeholder="Apellido" style="width:270px; float:right;">
                            	<input type="text" name="Form[Nombre]" id="nombre" placeholder="Correo Eléctronico" style="width:270px; float:left;">
                       			<input type="email" name="Form[Correo]" id="correo" placeholder="Celular" style="width:270px; float:right;">
                        		<input type="text" name="Form[Direccion]" id="ciudad" placeholder="Direccion" style="width:270px; float:left;">
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
        <script type="text/javascript" src="fancybox/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>
		
<script>
			jQuery(document).ready(function() {
			//Parte 1
			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' +  (currentIndex + 1) + ' / ' + currentArray.length + ' ' + title + '</span>';
				}
			});
			$(".various").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'
			});
			$("#various5").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'     	: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
		});
		</script>
        
		
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
				$("ul.nav li#contacto").addClass("active");
			})
		</script>
	</body>
</html>