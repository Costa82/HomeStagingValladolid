$(document).ready(function() {  
	
	// anclas
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(
		function() {
			if (location.pathname.replace(/^\//, '') == this.pathname
				.replace(/^\//, '')
				&& location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name='
							+ this.hash.slice(1) + ']');
					if (target.length) {
						if ($( window ).width() > 1600) {
							$('html, body').animate({
								scrollTop : target.offset().top-130}, 1000);
						} else if ($( window ).width() > 1400 && $( window ).width() < 1600) {
							$('html, body').animate({
								scrollTop : target.offset().top-120}, 1000);
						} else if ($( window ).width() > 1250 && $( window ).width() < 1400) {
							$('html, body').animate({
								scrollTop : target.offset().top-130}, 1000);
						} else if ($( window ).width() > 800 && $( window ).width() < 1250) {
							$('html, body').animate({
								scrollTop : target.offset().top-95}, 1000);
						} else if ($( window ).width() > 500 && $( window ).width() < 800) {
							$('html, body').animate({
								scrollTop : target.offset().top-90}, 1000);
						} else {
							$('html, body').animate({
								scrollTop : target.offset().top-100}, 1000);
						}
					
					return false;
				}
			}
		});
	});
	
	// popUps
    $(window).resize(function(){
    	var aviso = $('.aviso');
        aviso.css({ 
             'left': ($(window).width() / 2 - $(aviso).width() / 2) + 'px', 
             'top': ($(window).height() / 2 - $(aviso).height() / 2) + ($(window).scrollTop()) + 'px'
             });
    });
        
    $(window).resize();

    $('.aviso').click(function(e){
    	e.preventDefault();
        if ( $('.aviso').is(":visible") ) {
        	$('.aviso').fadeOut('slow');
        }else {
            $('.aviso').fadeIn('slow');
        }
    });
    
    // leer más
    $('.leerMas').on('click',function() {
		$(this).siblings( ".texto_leerMas" ).toggle("slow");
	    $(this).hide();
	    $(this).siblings('.leerMenos').show();
	});
	
	$('.leerMenos').on('click',function() {
		$(this).siblings( ".texto_leerMas" ).toggle("slow");
		$(this).siblings('.leerMas').show();
	    $(this).hide();
	});
	
	// Función que abre y cierra, al hacer click, lentamente el menú principal
	// de los dispositivos móviles.
	$('#menu_moviles').click(function(e) {
		e.stopPropagation();
		if ($("#lista_movil").is(":hidden")) {
			$("#lista_movil").slideDown("slow");
		} else {
			$("#lista_movil").slideUp("slow");
		}
	});

	$('html').click(function() {
		$("#lista_movil").slideUp("slow");
	});
	
	$('.rechazar').on('click',function() {
	    $('#overbox3').hide();
	});
	
	//almacenar slider en una variable
	var slider = $('#slider');
	//almacenar botones
	var siguiente = $('#btn-next');
	var anterior = $('#btn-prev');
	
	//mover ultima imagen al primer lugar
	$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
	//mostrar la primera imagen con un margen de -100%
	slider.css('margin-left', '-'+100+'%');
	
	$('#slider .slider__section:last h2').fadeIn('slow');

	function moverD() {
	    slider.animate({
	        marginLeft:'-'+200+'%'
	    } ,700, function(){
	    	$('#slider .slider__section h2').fadeOut('fast');
	    	$('#slider .slider__section:first h2').fadeIn('slow');
	        $('#slider .slider__section:first').insertAfter('#slider .slider__section:last');
	        slider.css('margin-left', '-'+100+'%');
	    });
	}

	function moverI() {
	    slider.animate({
	        marginLeft:0
	    } ,700, function(){
	    	$('#slider .slider__section h2').fadeOut('fast');
	    	$('#slider .slider__section:first h2').fadeIn('slow');
	        $('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
	        slider.css('margin-left', '-'+100+'%');
	    });
	}

	function autoplay() {
	    interval = setInterval(function(){
	        moverD();
	    }, 5000);
	}
	siguiente.on('click',function() {
	    moverD();
	    clearInterval(interval);
	    autoplay();
	});

	anterior.on('click',function() {
	    moverI();
	    clearInterval(interval);
	    autoplay();
	});

	autoplay();
	
});

// mostrar listado
function showContent() {
	element = document.getElementById("listado");
	check = document.getElementById("check");
	if (check.checked) {
		element.style.display = 'block';
	} else {
		element.style.display = 'none';
	}
}

// cookies
function GetCookie(name) {
    var arg=name+"=";
    var alen=arg.length;
    var clen=document.cookie.length;
    var i=0;
 
    while (i<clen) {
        var j=i+alen;
 
        if (document.cookie.substring(i,j)==arg)
            return "1";
        i=document.cookie.indexOf(" ",i)+1;
        if (i==0)
            break;
    }
 
    return null;
}
 
function aceptar_cookies(){
    var expire=new Date();
    expire=new Date(expire.getTime()+7776000000);
    document.cookie="cookies_surestao=aceptada; expires="+expire;
 
    var visit=GetCookie("cookies_surestao");
 
    if (visit==1){
        popbox3();
    }
}
 
$(function() {
    var visit=GetCookie("cookies_surestao");
    if (visit==1){ popbox3(); }
});
 
function popbox3() {
    $('#overbox3').toggle();
}
