<?php
	// consulta.php
	
	// Me conecto a la BD
	include("conexion.php");
	
	// Crear la query
	// Comillas dobles por fuera así permitimos insertar variables
	$insertar = "INSERT INTO usuarios VALUES(NULL,'$nombre','$email')";
	
	// Ejecutar la consulta
	$insertarEj = mysqli_query($conexion, $insertar);
	
	if($insertarEj == true){
		echo "Funcionó!!!";
	} else {
		echo "Hay un error, probablemente en SQL";
			
	}
	
?>







