<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	<h1>Filtrar jugadores por número de canastas</h1>
	<form action="listarJugadoresPorScore.php" method="post">
	<label>Escribe el número de canastas: <input type="text" name="nbaskets" id=""></label>
	<input type="submit" value="Filtrar" name="enviar">
	 </form><br><br>

	 <?php 

	 	if(isset($_POST["enviar"])){

	 		

	 		require_once('../INDEX/lamagia.php');
			
			$nbaskets = $_POST["nbaskets"];
		
			$resultado = listarJugadoresPorScore($nbaskets);


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



	 		echo "<br><br>";

	 		echo '<a class="volver" href="../INDEX/index.php">Volver al menú</a>';

	 	}


	  ?>
</body>
</html>