<?php
ob_start();

include_once './views/default/contents/content_por_que_no_consigo_visitas_para_vender_o_alquilar_mi_casa.php';

$contenido = ob_get_clean();

include './views/default/templates/template_por_que_no_consigo_visitas_para_vender_o_alquilar_mi_casa.php';
?>