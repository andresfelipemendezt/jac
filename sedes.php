<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Sedes</title>
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
					<img src="photos/sede.jpg" alt="Banner Principal"/>
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
							<h3>Sedes / <span>Jac Motor</span></h3>
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
                    <h3>Sede Norte</h3>
						<p>
							Cali. Av. Vasquez cobo #34N 54 Barrió san Vicente Tel: (2) 6881212 Call center: (2) 4859191<br>
				        <div style="float:left;"><a href="images/almotores-sede-jac-2.jpg" rel="example_group"><img src="images/almotores-sede-jac-2-little.jpg" width="290" height="200" border="0"></a><br> 
			          Haz clic para ampliar</div>
                      <div style="float:right;"><a href="images/almotores-sede-jac.jpg" rel="example_group"><img src="images/almotores-sede-jac-little.jpg" width="290" height="200" border="0" ></a><br> 
                        Haz clic para ampliar</div>
                      <div class="clearfix"></div>
                       <br> <a class="various iframe" href="http://maps.google.com/?output=embed&amp;f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=London+Eye,+County+Hall,+Westminster+Bridge+Road,+London,+United+Kingdom&amp;hl=lv&amp;ll=51.504155,-0.117749&amp;spn=0.00571,0.016512&amp;sll=56.879635,24.603189&amp;sspn=10.280244,33.815918&amp;vpsrc=6&amp;hq=London+Eye&amp;radius=15000&amp;t=h&amp;z=17"><img src="images/b-google-maps.png" width="293" height="33" border="0"></a>
</p>
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
        
       
	</body>
</html>