<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	<h1>Listado de Equipos por ciudad</h1>
	<form action="listarEquiposPorCiudad.php" method="post">
	<label for="">Escribe la ciudad: <input type="text" name="city" id=""></label>
	<input type="submit" value="Filtrar" name="enviar">
	</form><br><br>

	<?php 


	if(isset($_POST["enviar"])){


		

		require_once('../INDEX/lamagia.php');
		
		$city = $_POST["city"];
	
		$resultado = listarEquiposPorCiudad($city);


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

		echo '<a class="volver" href="../INDEX/index.php">Volver al menú</a>';

	}


	 ?>
</body>
</html>