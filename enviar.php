<?php
	// enviar.php
	
	// Conseguir los datos
	$nombre   = $_POST['nombre'];
	$email    = $_POST['email'];
  $mensaje  = $_POST['mensaje'];
  
  
  

	if ($nombre == "" or $email == "" or $mensaje == "" ){
		echo "Debes completar todos los campos para enviar el mensaje.";
	} else {
    include("consulta.php");
		$destino = "sivocarina@yahoo.com";
		$asunto  = "$nombre desde traduccionweb.com.ar";
		// Enviamos el mail
		mail($destino, $asunto, $mensaje);
		
		// Le enviamos mail a la persona que completó el formulario
	// Para poder enviar HTML y caracteres especiales
  $cabeceras = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
  // Cabeceras adicionales 2
  $cabeceras .= 'From: TraducciónWeb <sivocarina@yahoo.com>'."\r\n";
	  
	// Agregamos el cuarto parámetro
		mail($email, "Recibimos tu consulta!", "Te contestaremos pronto.", $cabeceras);
	
	} // cierra else
	

	
?>






