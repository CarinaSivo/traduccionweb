<?php
	// enviar.php
	
	// Conseguir los datos
	$nombre   = $_POST['nombre'];
	$email    = $_POST['email'];
	$asunto   = $_POST['asunto'];
    $mensaje  = $_POST['mensaje'];
  
  	if ($nombre == "" or $email == "" or $mensaje == "" ){
		echo "Debes completar todos los campos para enviar el mensaje.";
	} else {
       
        $destino = "sivocarina@yahoo.com";
		$asunto  = "$nombre desde traduccionweb.com.ar $email";
		
		// Envio el mail
		mail($destino, $asunto, $mensaje);
		include("consulta.php");
	
	} // cierra else
	

	
?>

	
?>






