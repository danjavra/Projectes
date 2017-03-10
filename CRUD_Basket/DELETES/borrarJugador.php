<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Borrar Jugador</title>
	<link rel="stylesheet" href="../INDEX/index.css">
</head>
<body>
	<?php  

	if(isset($_POST["borrar"])){

		require_once('../INDEX/lamagia.php');

		$name = $_POST["jugadores"];

		borrarJugador($name);
		
	}

	?>
	<form action="borrarJugador.php" method="post">
		
		<h1>Borrar jugador</h1>
		<select name="jugadores" id="">
			<?php 

				require_once '../INDEX/lamagia.php';
				$jugadores = selectJugador();
				while($fila = mysqli_fetch_array($jugadores)){
				extract($fila);
				echo "<option value= $name>$name</option>";
			}		


			 ?>	


		</select>
		<input type="submit" name="borrar" value="Borrar jugador">

	</form>

	
</body>
</html>