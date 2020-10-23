<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio</title>
<link type="text/css" rel="stylesheet"
	href="./views/default/css/font-awesome.css" />

<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">

<script src="./views/default/jquery/jquery-3.1.1.min.js"></script>

<!-- Metemos un aleatorio para la recarga automAtica del css y el js -->
<script>

    var rutacss1 = "./views/default/css/main.css?" + Math.random();
    var rutajs1 = "./views/default/jquery/jquery_homestagingvalladolid.js?" + Math.random();
    var script = "script";
    
    document.write('<link rel="stylesheet" href="' + rutacss1 + '" type="text/css" media="screen" />');
    document.write('<script src="' + rutajs1 + '"></' + script + '>');
	
</script>

</head>
<body>

	<!-- Contenido -->
    <?php echo $contenido; ?>

</body>
</html>
