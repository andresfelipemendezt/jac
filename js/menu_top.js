if(typeof numero_slider === 'undefined'){
	var num = 0;
}else{
	var num = numero_slider;
}
if(num == 0){
	Galleria.loadTheme('css/themes/classic/galleria.classic.min.js');
}
$('#menu_top ul.nav li.dropdown').mouseenter(function(){
	Galleria.run('#slider_menu',{
		autoplay: false,
		lightbox: false
	});
});
$('#menu_top .images_menu a').mouseenter(function(){
	var $elem  = $(this),
		title  = $elem.attr('data-title'),
		imgs   = $elem.attr('data-img').split(','),
		galery = '';
	var current_title = $('#title_slider').text();	
	if(current_title != title){	
		$('#title_slider').text(title);
		$.each(imgs, function(k,v){
			galery += 
			'<a href="photos/'+ v +'">'+
				'<img src="photos/'+ v +'" data-big="photos/'+ v +'" data-title="" data-description="" />'+
			'</a>';
		});
		var gallery = Galleria.get(num);
		gallery.destroy();
		$('#slider_menu').html(galery);
		Galleria.run('#slider_menu',{
			autoplay: false,
			lightbox: false
		});
	}	
});