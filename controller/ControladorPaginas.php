<?php
require_once './config/Validaciones.php';

/**
 * ControladorPaginas
 */
class ControladorPaginas
{

	/**
	 * Método que llama a la acción inicio
	 */
	public function inicio()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		require './views/inicio.php';
	}

}