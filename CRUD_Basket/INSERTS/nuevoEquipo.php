<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Equipo</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
<?php

	// Si ha rellenado formulario y se le ha pulsado botón enviar
	if(isset($_POST["enviar"])){

		// Incluimos el fichero de bbdd
		require_once '../INDEX/lamagia.php';

		// Recibimos los datos del POST

		$name = $_POST["name"];
		$city = $_POST["city"];
		$creation = $_POST["creation"];

		// Insertamos alumno en la bbd

		crearEquipo($name, $city, $creation);
	}
	else{

	
	echo '<h1>Crear equipo</h1>
	<form action="nuevoEquipo.php" method="post">
		<label for="name">Nombre: <input type="text" name="name" id="name"></label>
		<label for="city">Ciudad: <input type="text" name="city" id="city"></label>
		<label for="creation">Fecha de creación: <input type="date" name="creation" id="creation"> </label>
		<input type="submit" name="enviar" value="Crear equipo">



	</form>';
	}


?>
</body>
</html>