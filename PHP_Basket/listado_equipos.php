<?php

require_once('bbdd_basket.php');

		
		$resultado = listaEquipos();


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

		echo '<a class="volver" href="indice.php">Volver al menú</a>';


