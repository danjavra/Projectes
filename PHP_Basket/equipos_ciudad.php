
<h1>Listado de Equipos por ciudad</h1>
<form action="equipos_ciudad.php" method="post">
	<label for="">Escribe la ciudad: <input type="text" name="city" id=""></label>
	<input type="submit" value="Filtrar" name="enviar">
	</form><br>
        
	<?php 

	if(isset($_POST["enviar"])){

		require_once('bbdd_basket.php');
		$city = $_POST["city"];
		$resultado = listaEquiposCiudad($city);
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
		echo "</table><br>";
		echo '<a class="volver" href="indice.php">Volver al menú</a>';

	}

	 ?>