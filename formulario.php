<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fomulario.php</title>
	</head>
	<body>
		<h1>Fomulario</h1>
		
		
<form action="mpost.php" method="post">
	Nombre 
	<input type="text" name="nombre" required><br>
	
	Mail:
	<input type="email" name="email"><br>
	
	Teléfono:
	<input type="tel" name="telefono"><br>
	
	Comidas:<br>
	<!-- Si todos tienen el mismo name los agrupamos y logramos seleccionar solamente uno de ese grupo.
		Con el value indicamos cuál seleccionó
	-->
	<label>
		<input type="radio" name="comida" value="Pizza">Pizza
	</label>
	<br>
	<label>
		<input type="radio" name="comida" value="Milanesa">Milanesa
	</label>
	<br>
	<label>
		<input type="radio" name="comida" value="Empanadas">Empanadas
	</label>
	<br>
	<br>
	
	<label>
		<input type="checkbox" name="condiciones" value="Acepta condiciones" required> Aceptar vender mi alma.
	</label><br>
	
	Comentario:
	<textarea name="comentario"></textarea><br>
	
	<input type="submit" value="Enviar">
</form>
		
	</body>
</html>




