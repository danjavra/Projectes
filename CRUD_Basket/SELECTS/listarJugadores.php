<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar jugadores</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	<h1>Listado de todos los jugadores registrados.</h1>
	<?php 

		require_once('../INDEX/lamagia.php');

		
		$resultado = listarJugadores();


		echo "<table>
				<tr>
				<th>Nombre</th><th>Fecha de nacimiento</th><th>Número de canastas</th><th>Número de asistencias</th><th>Número de rebotes</th><th>Posición</th><th>Equipo</th>
				</tr>";

		while($fila=mysqli_fetch_array($resultado)){

		extract($fila);

		echo "<tr>
				<td> $name</td><td>$birth</td><td>$nbaskets</td><td>$nassists</td><td>$nrebounds</td><td>$position</td><td>$team</td>
			</tr>";

			}	

		echo "</table><br><br>";

		echo '<a class="volver" href="../INDEX/index.php">Volver al menú</a>';



	 ?>
</body>
</html>