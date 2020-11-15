<!--
- Pagina del blog Home Staging Valladolid.
- @author Miguel Costa.
-->

<!DOCTYPE html>

<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="es" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="robots" content="NOODP">
<title>Por qué no consigo visitas para vender o alquilar mi casa</title>

<!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
<link rel="stylesheet" href="./views/default/css/all.css">

<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap"
	rel="stylesheet">
<link href="apple-touch-icon.png" rel="apple-touch-icon" />
<link href="apple-touch-icon-152x152.png" rel="apple-touch-icon"
	sizes="152x152" />
<link href="apple-touch-icon-167x167.png" rel="apple-touch-icon"
	sizes="167x167" />
<link href="apple-touch-icon-180x180.png" rel="apple-touch-icon"
	sizes="180x180" />
<link href="icon-hires.png" rel="icon" sizes="192x192" />
<link href="icon-normal.png" rel="icon" sizes="128x128" />
<script src="./views/default/jquery/jquery-3.1.1.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"
	type="text/javascript"></script>
	
<script src="./views/default/jquery/zoom_fancybox.js"></script>
<!-- Add fancyBox -->
<script>
    var rutacss2 = "./views/default/fancybox/source/jquery.fancybox.css?v=2.1.7?" + Math.random();
    document.write('<link rel="stylesheet" href="' + rutacss2 + '" type="text/css" media="screen" />'); 
</script>
<script type="text/javascript"
	src="./views/default/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet"
	href="./views/default/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="./views/default/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript"
	src="./views/default/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet"
	href="./views/default/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="./views/default/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
<script
	src='https://www.google.com/recaptcha/api.js?render=6LcfFd4ZAAAAABL2nokeKoixiP6QYgWAtp0Q10J3'> 
	//6LdPFd4ZAAAAAF2swsyoEk36ow12TcHZ6q6e7FeL local
	//6LcfFd4ZAAAAABL2nokeKoixiP6QYgWAtp0Q10J3 producción
</script>

<script>
	grecaptcha.ready(function() {
	grecaptcha.execute('6LcfFd4ZAAAAABL2nokeKoixiP6QYgWAtp0Q10J3', {action: 'newsletter'})
	.then(function(token) {
	var recaptchaResponse = document.getElementById('recaptchaResponse');
	recaptchaResponse.value = token;
	});});
</script>

<script>
     function validar(){
     	if (document.getElementById('condiciones').checked){
        	return true;
        } else {
            alert("El formulario no puede ser enviado si no acepta el Aviso Legal y la Política de Privacidad");
            return false;
        }
      }
</script>
	
<!-- Metemos un aleatorio para la recarga automAtica del css y el js -->
<script>

    var rutacss1 = "./views/default/css/main.css?" + Math.random();
    var rutajs1 = "./views/default/jquery/jquery_general.js?" + Math.random();
    var script = "script";
    
    document.write('<link rel="stylesheet" href="' + rutacss1 + '" type="text/css" media="screen" />');
    document.write('<script src="' + rutajs1 + '"></' + script + '>');
	
</script>

</head>

<body>

	<header>
		<div id='ancla_inicio'></div>
		<nav>
		<!-- Menu navegación -->
		<?php include_once("template_menuNav.php");?>
		</nav>

	</header>

	<!-- Contenido -->
	<?php echo $contenido; ?>
	
	<!-- Formulario newsletter -->
	<?php include_once("template_formulario_newsletter.php");?>
	
	<footer>
	<?php include_once("template_footer.php");?>
	</footer>

</body>
</html>