<!doctype html>
<html lang="es">
	
	
	<?php
	// consulta.php
	
	// Me conecto a la BD
	include("conexion.php");
	
	// Crear la query
	$insertar = "INSERT INTO usuarios VALUES(NULL,'$nombre','$email')";
	
	// Ejecutar la consulta
	$insertarEj = mysqli_query($conexion, $insertar);
	
	if($insertarEj == true){
        
        
        	?>
        	<head>
		<link href="css/estiloscontacto.css" rel="stylesheet">
	</head>
        	<div class="botonera1"><!--abre botonera-->
				<ul>
				        <h1> Gracias por Contactarnos!</h1>
				        <br>
				        <h1> Nos comunicaremos a la brevedad</h1>
				        <li><a href="index.html">Volver</a></li>
					
				</ul>	
			</div><!--cierra botonera-->
        <?php
    } else {
		echo "Hay un error";
	}
	
?>

</html>







