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

	if(isset($_POST["modificar"])){

		$name = $_POST["name"];
		$nbaskets = $_POST["nbaskets"];
		$nassists = $_POST["nassists"];
		$nrebounds = $_POST["nrebounds"];

		modificarJugador($name, $nbaskets, $nassists, $nrebounds);

	}

	else{

	$name = $_POST["name"];

	$datos = selectJugadorByNombre($name);

	
	echo "<form action='modificar.php' method='post'>";

	echo "<h1>Datos del Jugador $name</h1>";

	$fila = mysqli_fetch_array($datos);

	extract($fila);

	echo "<input type='text' value='$name' name='name'>";
	echo "<label>Número de canastas: <input type='number' value='$nbaskets' name='nbaskets'></label>";
	echo "<label>Número de asistencias: <input type='number' value='$nassists' name='nassists'></label>";
	echo "<label>Número de rebotes: <input type='number' value='$nrebounds' name='nrebounds'></label>";

	echo "<input type='submit' name='modificar' value='Modificar datos'>";
	echo "</form>";

	}

 ?>
</body>
</html>