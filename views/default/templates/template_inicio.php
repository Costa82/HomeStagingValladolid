<!--
- Pagina inicio Home Staging Valladolid.
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
<meta property="og:type" content="website" />
<meta property="og:title" content="Home Staging Valladolid" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta property="og:image:width" content="681" />
<meta property="og:image:height" content="494" />
<meta property="og:url" content="" />
<title>Home Staging Valladolid</title>

<!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
<link rel="stylesheet" href="./views/default/css/all.css">

<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap"
	rel="stylesheet">
<!--  <link href="apple-touch-icon.png" rel="apple-touch-icon" /> -->
<!--  <link href="apple-touch-icon-152x152.png" rel="apple-touch-icon"
	sizes="152x152" /> -->
<!--  <link href="apple-touch-icon-167x167.png" rel="apple-touch-icon"
	sizes="167x167" /> -->
<!--  <link href="apple-touch-icon-180x180.png" rel="apple-touch-icon"
	sizes="180x180" /> -->
<!--  <link href="icon-hires.png" rel="icon" sizes="192x192" /> -->
<!--  <link href="icon-normal.png" rel="icon" sizes="128x128" /> -->
<script src="./views/default/jquery/jquery-3.1.1.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"
	type="text/javascript"></script>

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
		<?php include_once("template_menuNavIndex.php");?>
		</nav>

	</header>

	<!-- Contenido -->
	<?php echo $contenido; ?>
	
	<?php include_once("template_cookies.php");?>

	<footer>
	<?php include_once("template_footer.php");?>
	</footer>

</body>
</html>
