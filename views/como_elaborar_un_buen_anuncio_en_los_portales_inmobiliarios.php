<?php
ob_start();

include_once './views/default/contents/content_como_elaborar_un_buen_anuncio_en_los_portales_inmobiliarios.php';

$contenido = ob_get_clean();

include './views/default/templates/template_como_elaborar_un_buen_anuncio_en_los_portales_inmobiliarios.php';
?>