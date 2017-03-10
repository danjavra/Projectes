<?php

require_once('bbdd_stukemon.php');

		$resultado = listaRankingBatallas();
                	echo "<table style='text-align:center'>
				<tr>
				<th>Pokemon</th><th>Batallas Ganadas</th>
				</tr>";
		while($fila=mysqli_fetch_array($resultado)){
		extract($fila);
		echo "<tr>
				<td> $winner</td><td>$batallasganadas</td>
			</tr>";
			}	
		echo "</table><br><br>";
		echo '<a class="volver" href="indice.php">Volver al menú</a>';
