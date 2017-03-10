<?php

require_once('bbdd_stukemon.php');

		$resultado = listaPokemons();
                	echo "<table style='text-align:center'>
				<tr>
				<th>Nombre</th><th>Tipo</th><th>Habilidad</th><th>Ataque</th><th>Defensa</th><th>Velocidad</th><th>Vida</th><th>Nivel</th><th>Entrenador</th>
				</tr>";
		while($fila=mysqli_fetch_array($resultado)){
		extract($fila);
		echo "<tr>
				<td> $name</td><td>$type</td><td>$ability</td><td>$attack</td><td>$defense</td><td>$speed</td><td>$life</td><td>$level</td><td>$trainer</td>
			</tr>";
			}	
		echo "</table><br><br>";
		echo '<a class="volver" href="indice.php">Volver al menú</a>';