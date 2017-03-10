<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<?php  

	if(isset($_POST["borrar"])){

		require_once 'bbdd_basket.php';

		$name = $_POST["jugadores"];

		borrarJugador($name);
		
	}

	?>
        <form action="borrar_jugador.php" method="post">
		
		<h1>Borrar jugador</h1>
		<select name="jugadores" id="">
			<?php 

				require_once 'bbdd_basket.php';
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
