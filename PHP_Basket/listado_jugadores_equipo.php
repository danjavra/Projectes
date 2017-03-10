


<h1>Filtrar lista de jugadores por equipo</h1>
<form action="listado_jugadores_equipo.php" method="post">
		
		<?php 
		echo '<label for="team">Lista por equipo: <select name="team" id="team">';
			require_once('bbdd_basket.php');
			$equipos = selectEquipo();
			while($fila = mysqli_fetch_array($equipos)){
				extract($fila);
				echo "<option value= $name>$name</option>";
			}		
		echo '</select></label>';

		 ?>
		<input type="submit" name="enviar" value="Filtrar">
	</form><br>
	

	<?php 
		if(isset($_POST["enviar"])){
			require_once('bbdd_basket.php');
			$team = $_POST["team"];
			$resultado = listaJugadoresEquipo($team);
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
			echo '<a class="volver" href="indice.php">Volver al menú</a>';

			}


	 ?>
