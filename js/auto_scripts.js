var numero_slider = 1;

Galleria.loadTheme('css/themes/autos/galleria.classic.js');

Galleria.run('#slider',{

	autoplay: false,

	lightbox: true

});

Galleria.ready(function() {

	$('#slider .galleria-thumbnails-list .galleria-thumbnails').slimScroll({

		height:'240px'

	});

});

$(window).load(function() {

	$('#carrousel ul').carouFredSel({

		items 	: 6,

		prev	: {

			button	: '#prev_ca',

			key		: 'left'

		},

		next	: {

			button	: '#next_ca',

			key		: 'right'

		}

	});

});

$('.info_auto_part h4 a').click(function(e){

	e.preventDefault();

	$(this).parents('.info_auto_part').toggleClass('open').find('.info_auto_content').slideToggle('fast');

});

$('#prev_c').click(function(e){

	e.preventDefault();

	$('#banner_ppal.internas .galleria-image-nav-left').click();

});

$('#next_c').click(function(e){

	e.preventDefault();

	$('#banner_ppal.internas .galleria-image-nav-right').click();

});