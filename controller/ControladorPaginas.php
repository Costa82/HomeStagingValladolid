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
	
	/**
	 * Método para cargar la página de error 404
	 */
	public function page404()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/page404.php';
	}
	
	/**
	 * Método para cargar la página del blog
	 */
	public function blog()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/blog.php';
	}
	
	/**
	 * Método para cargar la página del home_staging_vender_alquilar_rapido_mejor_precio
	 */
	public function home_staging_vender_alquilar_rapido_mejor_precio()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/home_staging_vender_alquilar_rapido_mejor_precio.php';
	}
	
	/**
	 * Método para cargar la página del por_que_no_consigo_visitas_para_vender_o_alquilar_mi_casa
	 */
	public function por_que_no_consigo_visitas_para_vender_o_alquilar_mi_casa()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/por_que_no_consigo_visitas_para_vender_o_alquilar_mi_casa.php';
	}

	/**
	 * Método para cargar la página de la declaración de cookies
	 */
	public function declaracion_cookies()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/declaracion_cookies.php';
	}
	
	/**
	 * Método para cargar la página de politica de privacidad y proteccion de datos
	 */
	public function politica_privacidad_y_proteccion_de_datos()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/politica_privacidad_y_proteccion_de_datos.php';
	}
	
	/**
	 * Método para cargar la página de aviso legal
	 */
	public function aviso_legal()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/aviso_legal.php';
	}
}