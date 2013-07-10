<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>JAC Motors | Posventa</title>
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
                    <h3> Servicio Post Venta</h3>
						<p>El servicio de taller está preparado para resolver cualquier problema técnico o de mantenimiento de su vehículo, contamos con tecnología de última generación y un equipo humano altamente preparado.
						</p>
                         <h3>Sede Norte</h3>
						<p>
							Cali. Av. Vasquez cobo #34N 54 Barrió san Vicente Tel: (2) 6881212 Call center: (2) 4859191<br>
				        <div style="float:left;"><a href="images/almotores-sede-jac-2.jpg" rel="example_group"><img src="images/almotores-sede-jac-2-little.jpg" width="290" height="200" border="0"></a><br> 
			          Haz clic para ampliar</div>
                      <div style="float:right;"><a href="images/almotores-sede-jac.jpg" rel="example_group"><img src="images/almotores-sede-jac-little.jpg" width="290" height="200" border="0" ></a><br> 
                        Haz clic para ampliar</div>
                      <div class="clearfix"></div>
                       <br> <a class="various iframe" href="http://maps.google.com/?output=embed&amp;f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=London+Eye,+County+Hall,+Westminster+Bridge+Road,+London,+United+Kingdom&amp;hl=lv&amp;ll=51.504155,-0.117749&amp;spn=0.00571,0.016512&amp;sll=56.879635,24.603189&amp;sspn=10.280244,33.815918&amp;vpsrc=6&amp;hq=London+Eye&amp;radius=15000&amp;t=h&amp;z=17"><img src="images/b-google-maps.png" width="293" height="33" border="0"></a>
</p><br><br>
                        
                      
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