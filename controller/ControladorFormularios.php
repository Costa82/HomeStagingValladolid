<?php
require_once './config/Validaciones.php';
require_once './config/Correo.php';

$correo = new Correo();

/**
 * Controlador de gestión de formularios
 */
class ControladorFormularios
{

	/**
	 * Método para el formulario de contacto
	 */
	public function formulario_contacto()
	{
		//6LdPFd4ZAAAAAC2bhYM05WBVR_7gl0HsQCRUXugP local
		//6LcfFd4ZAAAAAEGY3pAd5FyubNKX2SrYr7Z6SFNo producción
		$recaptcha_secret = '6LcfFd4ZAAAAAEGY3pAd5FyubNKX2SrYr7Z6SFNo';
		$recaptcha_response = $_POST['recaptcha_response'];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify?");
		curl_setopt($ch, CURLOPT_POST, 1);
		$campos=array('secret'=>$recaptcha_secret,'response'=>$recaptcha_response);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$campos);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ch_exec = curl_exec($ch);
		curl_close ($ch);

		$respuesta_google = json_decode($ch_exec);
		
		//FIXME Quitamos hasta más adelante la seguridad de Google
		//if($respuesta_google->success === true){

			if(isset($_REQUEST['nombre']) AND isset($_REQUEST['mail'])){

				// Campos obligatorios
				$nombre = $_REQUEST['nombre'];

				$mail = $_REQUEST['mail'];
				$telefonoValido = true;
					
				// Campos opcionales
				if ( isset($_REQUEST['telefono']) ) {

					$telefono = $_REQUEST['telefono'];

					if ($telefono != "" && $telefono != null) {
							
						if (!validarTelefono($telefono)) {
							$telefonoValido = false;
						}
					} else {
						$telefono = null;
					}

				} else {
					$telefono = null;
				}
					
				if ( isset($_REQUEST['consulta']) ) {
					$consulta = $_REQUEST['consulta'];
				} else {
					$consulta = null;
				}
					
				// Enviamos el correo de contacto
				// Comprobamos que no sea ninguno de estos correos (info@basededatos-info.com, yourmail@gmail.com)
				if ( $mail === "info@basededatos-info.com" || $mail === "yourmail@gmail.com" || $mail === "artyea@msn.com" || !$telefonoValido ) {
					$envio = "KO";
				} else {
					$correo = new Correo();
					$envio = $correo->enviarMailsConsulta($mail, $nombre, $telefono, $consulta);
				}
					
				// Comprobamos cómo ha ido el envío
				if ( $envio != "OK" ) {
					$_SESSION['error'] = 501;
				}

				// El nombre y el mail tienen que ser obligatorios
			} else {
				$_SESSION['error'] = 502;
			}

		//} 
		// El recaptcha ha ido mal
		//else {
			//$_SESSION['error'] = 503;
		//}

		if (!headers_sent()) {
			header('Location:respuesta_envio');
			exit;
		}
	}
	
	/**
	 * Método para el formulario de newsletter
	 */
	public function formulario_newsletter()
	{
		//6LdPFd4ZAAAAAC2bhYM05WBVR_7gl0HsQCRUXugP local
		//6LcfFd4ZAAAAAEGY3pAd5FyubNKX2SrYr7Z6SFNo producción
		$recaptcha_secret = '6LcfFd4ZAAAAAEGY3pAd5FyubNKX2SrYr7Z6SFNo';
		$recaptcha_response = $_POST['recaptcha_response'];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify?");
		curl_setopt($ch, CURLOPT_POST, 1);
		$campos=array('secret'=>$recaptcha_secret,'response'=>$recaptcha_response);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$campos);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ch_exec = curl_exec($ch);
		curl_close ($ch);

		$respuesta_google = json_decode($ch_exec);
		
		// FIXME Quitamos hasta más adelante la seguridad de Google
		//if($respuesta_google->success === true){

			if(isset($_REQUEST['nombre']) AND isset($_REQUEST['mail'])){

				// Campos obligatorios
				$nombre = $_REQUEST['nombre'];

				$mail = $_REQUEST['mail'];
					
				// Enviamos el correo de newsletter
				// Comprobamos que no sea ninguno de estos correos (info@basededatos-info.com, yourmail@gmail.com)
				if ( $mail === "info@basededatos-info.com" || $mail === "yourmail@gmail.com" || $mail === "artyea@msn.com") {
					$envio = "KO";
				} else {
					$correo = new Correo();
					$envio = $correo->enviarMailsNewsletter($mail, $nombre);
				}
					
				// Comprobamos cómo ha ido el envío
				if ( $envio != "OK" ) {
					$_SESSION['error'] = 501;
				}

				// El nombre y el mail tienen que ser obligatorios
			} else {
				$_SESSION['error'] = 502;
			}

		//} 
		// El recaptcha ha ido mal
		//else {
			//$_SESSION['error'] = 503;
		//}

		if (!headers_sent()) {
			header('Location:respuesta_envio');
			exit;
		}
	}

	/**
	 * Método para cargar la respuesta_envio
	 */
	public function respuesta_envio()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		require './views/respuesta_envio.php';
	}

}
?>