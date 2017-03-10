<?php

require_once('bbdd_basket.php');

		
		$resultado = listaJugadores();

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


