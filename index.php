<?php
session_start();
require_once 'core/Connection.php';

// Incluimos automaticamente el model que sea necesario
function __autoload($class)
{
    require_once ("models/$class.php");
}

// Enrutamiento. Selecciona el controlador y la accion a ejecutar
$map = array(

	// Páginas
	'inicio' => array(
        'controller' => 'ControladorPaginas',
        'action' => 'inicio',
        'privada' => false
    ),
    'blog' => array(
        'controller' => 'ControladorPaginas',
        'action' => 'blog',
        'privada' => false
    ),
    'home_staging_vender_alquilar_rapido_mejor_precio' => array(
        'controller' => 'ControladorPaginas',
        'action' => 'home_staging_vender_alquilar_rapido_mejor_precio',
        'privada' => false
    ),
    'declaracion_cookies' => array(
        'controller' => 'ControladorPaginas',
        'action' => 'declaracion_cookies',
        'privada' => false
    ),
    
    // Páginas de error
    'page404' => array(
        'controller' => 'ControladorPaginas',
        'action' => 'page404',
        'privada' => false
     ),
     
     // Formulario
    'formulario_contacto' => array(
        'controller' => 'ControladorFormularios',
        'action' => 'formulario_contacto',
        'privada' => false
    ),
    'respuesta_envio' => array(
        'controller' => 'ControladorFormularios',
        'action' => 'respuesta_envio',
        'privada' => false
    )
);

// Parseo de la ruta
// Comprobamos si hay alguna accion que ejecutar, sino ejecutamos inicio
if (isset($_GET['action'])) {
    
    // Hacemos un replace para las urls amigables con '-'
    $action_normalizado = str_replace("-", "_", $_GET['action']);
    
    // Comprobamos que la accion existe en el mapa del enrutamiento, sino mostramos error 404
    if (isset($map[$action_normalizado])) {
        $action = $action_normalizado;
    } else {
		$action = 'page404';
    }
    
} else {
    $action = 'inicio';
}

// La variable controlador contiene la clase del controlador a ejecutar y el metodo de dicha clase.
$controlador = $map[$action];

// Guardamos en variables el nombre de la clase controladora y del metodo que queremos ejecutar dentro de dicha clase
$clase_controlador = $controlador['controller'];
$metodo = $controlador['action'];

// Si la pagina es privada comprobamos si el usuario es administrador, sino redirigimos a inicio
if ($controlador['privada'] && (!isset($_SESSION['administrador']) || !$_SESSION['administrador'])) {
    header('location:inicio'); 
    die();
}

// Creamos un objeto de la clase controladora y ejecutamos el metodo indicado en el action
require_once "controller/$clase_controlador.php";

$obj_controlador = new $clase_controlador();
$obj_controlador->$metodo();

?>
