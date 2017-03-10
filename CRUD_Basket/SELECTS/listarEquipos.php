<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar jugadores</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	<h1>Listado de todos los equipos registrados.</h1>
	<?php 

		require_once('../INDEX/lamagia.php');

		
		$resultado = listarEquipos();


		echo "<table>
				<tr>
				<th>Nombre</th><th>Ciudad</th><th>Fecha de creación</th>
				</tr>";

		while($fila=mysqli_fetch_array($resultado)){

		extract($fila);

		echo "<tr>
				<td> $name</td><td>$city</td><td>$creation</td>
			</tr>";

			}	

		echo "</table><br><br>";

		echo '<a class="volver" href="../INDEX/index.php">Volver al menú</a>';



	 ?>
</body>
</html>