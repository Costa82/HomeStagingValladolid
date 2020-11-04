<?php
ob_start();

include_once './views/default/contents/content_home_staging_vender_alquilar_rapido_mejor_precio.php';

$contenido = ob_get_clean();

include './views/default/templates/template_home_staging_vender_alquilar_rapido_mejor_precio.php';
?>