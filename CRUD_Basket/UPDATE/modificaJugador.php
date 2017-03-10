<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
<h1>Modificar datos de jugador</h1>
<form action="modificar.php" method="post">
<?php 
	require_once '../INDEX/lamagia.php';
	$jugadores = selectJugador();

	echo "<label>Selecciona alumno a modificar: ";
	echo "<select name='name' id=''>";	
	while($fila = mysqli_fetch_array($jugadores)){
		extract($fila);
		echo "<option value= $name>$name</option>";
	}
	echo "</select></label>";


 ?>
 	<input type="submit" value="Modificar">
</form>
</body>
</html>
