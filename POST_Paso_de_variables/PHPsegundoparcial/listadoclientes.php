<?php

require_once('bbdd_catering.php');

		$resultado = listaClientes();
                	echo "<table style='text-align:center'>
				<tr>
				<th>Nif</th><th>Nombre</th><th>Apellidos</th><th>Direccion</th><th>Poblacion</th><th>Telefono</th><th>Sexo</th><th>Nacimiento</th>
				</tr>";
		while($fila=mysqli_fetch_array($resultado)){
		extract($fila);
		echo "<tr>
				<td> $nif</td><td>$nombre</td><td>$apellidos</td><td>$direccion</td><td>$poblacion</td><td>$telefono</td><td>$sexo</td><td>$nacimiento</td>
			</tr>";
			}	
		echo "</table><br><br>";
		echo '<a class="volver" href="index.php">Volver al menú</a>';