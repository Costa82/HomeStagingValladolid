<?php
ob_start();

include_once './views/default/contents/content_como_poner_el_precio_adecuado_a_un_piso_en_venta.php';

$contenido = ob_get_clean();

include './views/default/templates/template_como_poner_el_precio_adecuado_a_un_piso_en_venta.php';
?>