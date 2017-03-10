
<h1>Lista de jugadores por número de canastas</h1>
<form action="listado_jugadores_mascanastas.php" method="post">
	<label>Escribe el número de canastas: <input type="text" name="nbaskets" id=""></label>
	<input type="submit" value="Filtrar" name="enviar">
	 </form><br>

	 <?php 

	 	if(isset($_POST["enviar"])){

	 		require_once 'bbdd_basket.php';
			$nbaskets = $_POST["nbaskets"];
			$resultado = listaJugadoresCanastas($nbaskets);
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
			echo "</table><br>";

	 		echo "<br>";
	 		echo '<a class="volver" href="indice.php">Volver al menú</a>';
	 	}


	  ?>
