<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo jugador</title>
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
		$birth = $_POST["birth"];
		$nbaskets = $_POST["nbaskets"];
		$nassists = $_POST["nassists"];
		$nrebounds = $_POST["nrebounds"];
		$position = $_POST["position"];
		$team = $_POST["team"];

		// Insertamos jugador en la bbd

		registrarJugador($name, $birth, $nbaskets, $nassists, $nrebounds, $position, $team);
	}
	else{

	
	echo '<h1>Registrar jugador</h1>
	<form action="nuevoJugador.php" method="post">
		<label for="name">Nombre: <input type="text" name="name" id="name"></label>
		<label for="birth">Fecha de nacimiento: <input type="date" name="birth" id="birth"></label>
		<label for="nbaskets">Número de canastas: <input type="number" name="nbaskets" id="nbaskets"></label>
		<label for="nassists">Número de asistencias: <input type="number" name="nassists" id="nassists"></label>
		<label for="nrebounds">Número de rebotes: <input type="number" name="nrebounds" id="nrebounds"></label>
		<label for="position">Posición: <input type="text" name="position" id="position"></label>';
	echo '<label for="team">Escoge el equipo: <select name="team" id="team">';
			require_once '../INDEX/lamagia.php';
			$equipos = selectEquipo();
			while($fila = mysqli_fetch_array($equipos)){
				extract($fila);
				echo "<option value= $name>$name</option>";
			}		
	echo '</select></label>';
	echo '<input type="submit" name="enviar" value="Registrar">';

	echo '</form>';
	}

?>
</body>
</html>



