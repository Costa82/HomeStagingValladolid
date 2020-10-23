$(document).ready(function() {   
  		
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
    
});

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
					$('html, body').animate({
						scrollTop : target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});