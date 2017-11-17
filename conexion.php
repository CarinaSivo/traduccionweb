<?php
	// conexion.php
	
	/*
		Servidor: localhost / 127.0.0.1
		Usuario:  root
		Clave:    "" (sin contraseña cuando trabajamos en nuestras máquinas)
		Nombre BD: "usuarios"
	*/	
	
	$conexion = mysqli_connect(
					"localhost",
					"root",
					"", 
					"usuarios"
					);
					
	// echo $conexion;

	
	
?>





