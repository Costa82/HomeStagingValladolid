<?php
ob_start();

include_once './views/default/contents/content_el_embudo_de_conversion_en_el_home_staging.php';

$contenido = ob_get_clean();

include './views/default/templates/template_el_embudo_de_conversion_en_el_home_staging.php';
?>