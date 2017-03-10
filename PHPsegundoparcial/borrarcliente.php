<?php

if(isset($_POST["borrar"])){

		require_once 'bbdd_catering.php';

		$nombre= $_POST["clientes"];

		borrarCliente($nombre);
		
	}
?>
        <form action="borrarcliente.php" method="post">
		
		<h1>Borrar clientes</h1>
		<select name="clientes" id="">
			<?php 

				require_once 'bbdd_catering.php';
				$clientes = selectCliente();
				while($fila = mysqli_fetch_array($clientes)){
				extract($fila);
				echo "<option value= $nombre $apellidos>$nombre $apellidos</option>";
			}		


			 ?>	


		</select>
		<input type="submit" name="borrar" value="Borrar cliente">
                <br></br><a class="volver" href="index.php">Volver al menú</a>
	</form>

