<?php
echo '
<div id="ancla_contacto"></div>
<div class="bloque_texto formulario">

	<h3>ENVÍANOS UN MENSAJE</h3>
	
	<h4>PARTICULAR O PROFESIONAL DEL SECTOR INMOBILIARIO: CONTESTAREMOS TODAS TUS PREGUNTAS Y QUEDAREMOS PARA VISITAR TU(S) INMUEBLE(S)</h4>

	<form action="formulario_contacto" method="post" class="formularioRegistro" onSubmit="return validar();">
		<div class="form">
			<p><label>Nombre (Requerido)</label></p> <input type="text" name="nombre" class="nombre"  required="required" />
		</div>
		<div class="form">
			<p><label>Email (Requerido)</label></p> <input type="email" name="mail" class="mail"  required="required" />
		</div>
		<div class="form">
			<p><label>Teléfono</label></p> <input type="tel" name="telefono" class="telefono" />
		</div>
		<div>
			<p><label>Consulta (Requerido)</label></p>
			<textarea rows="8" cols="50" name="consulta" class="consulta" required="required"></textarea>
		</div>
		
		<div class="form condiciones">
			<p><input type="checkbox" name="condiciones" id="condiciones"><label>Acepta
				la <a href="politica-privacidad-y-proteccion-de-datos"
				title="Aviso Legal"><i>Política de privacidad y Protección de datos</i>
			</a></label></p>
		</div>

		<div class="texto_legal_formulario">
			<p class="titulo_proteccion_datos">
				<strong>Protección de datos</strong>
			</p>
			<p>
				En virtud de lo dispuesto en la Ley 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, 
				te informamos que mediante la cumplimentación del presente formulario tus datos personales quedarán incorporados 
				a los ficheros titularidad de Valladolid Home Staging, y serán tratados con la finalidad de contactarte para responder a 
				peticiones de información, envío de presupuestos y otras finalidades relacionadas con nuestra actividad. 
				Puedes ejercer, en cualquier momento, los derechos de acceso, rectificación, cancelación y oposición de tus datos 
				de carácter personal mediante correo electrónico dirigido a <a href="hola@valladolidhomestaging.es" title="Contactar">hola@valladolidhomestaging.es</a>.
			</p>
		</div>

		<input type="hidden" name="recaptcha_response" id="recaptchaResponse">

		<div>
			<button type="submit" name="enviar" class="boton boton_formulario">Enviar</button>
		</div>
	</form>
</div>';
