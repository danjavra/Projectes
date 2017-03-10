<?php

require_once('bbdd_stukemon.php');

		$resultado = RankingEntrenadores();
                	echo "<table style='text-align:center'>
				<tr>
				<th>Nombre</th><th>Pokeballs</th><th>Pociones</th><th>Puntos</th>
				</tr>";
		while($fila=mysqli_fetch_array($resultado)){
		extract($fila);
		echo "<tr>
				<td> $name</td><td>$pokeballs</td><td>$potions</td><td>$points</td>
			</tr>";
			}	
		echo "</table><br><br>";
		echo '<a class="volver" href="indice.php">Volver al menú</a>';