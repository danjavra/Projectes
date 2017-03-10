<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	<h1>Filtrar lista de jugadores por equipo</h1>
	<form action="listarJugadoresPorEquipo.php" method="post">
		
		<?php 
		echo '<label for="team">Lista por equipo: <select name="team" id="team">';
			require_once '../INDEX/lamagia.php';
			$equipos = selectEquipo();
			while($fila = mysqli_fetch_array($equipos)){
				extract($fila);
				echo "<option value= $name>$name</option>";
			}		
		echo '</select></label>';

		 ?>
		<input type="submit" name="enviar" value="Filtrar">
	</form><br><br>
	

	<?php 

		if(isset($_POST["enviar"])){


			require_once('../INDEX/lamagia.php');
			
			$team = $_POST["team"];
		
			$resultado = listarJugadoresPorEquipo($team);


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

			}


	 ?>


</body>
</html>