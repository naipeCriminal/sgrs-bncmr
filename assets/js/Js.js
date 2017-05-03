
$(document).on('ready',function() {
	pantalla();

	$(window).resize(function(){
		pantalla();
	})
});
function pantalla(){
	tamano = $(window).width();
	if ( tamano < 991) {
 		$('.marcoB').css('height','auto');
	}
	else{
		$('.marcoB').css('height',340);
	}
}		
