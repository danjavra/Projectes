<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	
<?php

	require_once '../INDEX/lamagia.php';

	// Si han pulsado modificar
	if(isset($_POST["modificar"])){

		// Recogemos las variables del fomulario del POST

		$name2 = $_POST["name2"];
		$name = $_POST["team"];

		modificarEquipo($name2, $name);

	}

	else{

	// Recogemos el nombre del alumno seleccionado
	$name = $_POST["name"];
	$name2 = $_POST["name"];

	// Traemos los datos del alumno seleccionado	
	$datos = selectEquipo2();

	
	echo "<form action='modificar2.php' method='post'>";

	echo "<h1>Modificar equipo del Jugador $name</h1>";

	// Creamos formulario para modificar los datos
	// edad, ciudad, telefono, sexo

	$fila = mysqli_fetch_array($datos);

	extract($fila);

	echo "<input type='hidden' value='$name2' name='name2'>";
	// echo "Tu equipo actual es: <b>$name</b>";
	echo '<label for="team">Escoge tu nuevo equipo <select name="team" id="team">';

			require_once '../INDEX/lamagia.php';
			$equipos = selectEquipo();
			while($fila = mysqli_fetch_array($equipos)){
				extract($fila);
				echo "<option value= $name>$name</option>";
			}		
	echo '</select></label>';
	echo "<input type='submit' name='modificar' value='Modificar equipo'>";
	echo "</form>";
	}

 ?>
</body>
</html>