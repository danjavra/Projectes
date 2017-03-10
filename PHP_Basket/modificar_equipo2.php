<?php
require_once 'bbdd_basket.php';


	if(isset($_POST['modificar'])){		
		$name = $_POST["team"];
                $name2 = $_POST["name2"];
		modificarEquipo($name2, $name);
	}
	else{

	$name = $_POST["name"];
	$name2 = $_POST["name"];
        
	$datos = selectEquipo();

	echo "<form action='modificar_equipo2.php' method='post'>";
	echo "<h1>Modificar equipo del Jugador $name</h1>";

	$fila = mysqli_fetch_array($datos);

	extract($fila);

	echo "<input type='hidden' value='$name2' name='name2'>";

	echo '<label for="team">Escoge tu nuevo equipo <select name="team" id="team">';

			require_once 'bbdd_basket.php';
			$equipos = selectEquipo2();
			while($fila = mysqli_fetch_array($equipos)){
				extract($fila);
				echo "<option value= $name>$name</option>";
			}		
	echo '</select></label>';
	echo "<input type='submit' name='modificar' value='Modificar equipo'>";
	echo "</form><br><br/>";
	}

         echo '<a class="volver" href="indice.php">Volver al menú</a>';