<?php 
// FUNCIÓN PARA CONECTAR A LA BASE DE DATOS.
function conectar($database){


	$conexion = mysqli_connect("localhost", "root", "", "$database") or die ("No se ha podido conectar con la BBDD");

	return $conexion;
}

// FUNCIÓN PARA DESCONECTAR DE LA BASE DE DATOS.
function desconectar($conexion){


	mysqli_close($conexion);

}

// FUNCIÓN PARA INSERTAR EQUIPO A LA BASE DE DATOS.
function crearEquipo($name, $city, $creation){

	$conexion = conectar("basket");

	$insert = "insert into team values
			('$name', '$city', '$creation')";


	if(mysqli_query($conexion,$insert)){

		echo "<script>
			alert('Equipo creado');
			window.history.go(-2)
			</script>";



	}else{

		echo mysqli_error($conexion);
	}

	desconectar($conexion);


}


// FUNCIÓN PARA INSERTAR JUGADOR A LA BASE DE DATOS.
function registrarJugador($name, $birth, $nbaskets, $nassists, $nrebounds, $position, $team){

	$conexion = conectar("basket");

	$insert = "insert into player values
			('$name', '$birth', '$nbaskets', '$nassists', '$nrebounds', '$position', '$team')";


	if(mysqli_query($conexion,$insert)){

		// Si ha ido bien

		echo "<script>
			alert('Jugador registrado');
			window.history.go(-2)
			</script>";

		// header('Location:index.php');


	}else{

		echo mysqli_error($conexion);
	}

	desconectar($conexion);


}


// FUNCIÓN PARA SELECCIONAR EQUIPO POR NOMBRE.
function selectEquipo(){

	$conexion = conectar("basket");

	$query = "select name from team";

	$resultado = mysqli_query($conexion,$query);

	desconectar($conexion);

	return $resultado;
}


// FUNCIÓN PARA SELECCIONAR JUGADOR POR NOMBRE.
function selectJugador(){

	$conexion = conectar("basket");

	$query = "select name from player";

	$resultado = mysqli_query($conexion,$query);

	desconectar($conexion);

	return $resultado;

}

// FUNCIÓN QUE RECOGE LOS DATOS DEL JUGADOR POR EL NOMBRE.
function selectJugadorByNombre($name){

	$conexion = conectar("basket");

	$query = "select * from player where name = '$name'";

	$resultado = mysqli_query($conexion, $query);

	desconectar($conexion);

	return $resultado;
}


// FUNCIÓN QUE MODIFICA CAMPOS DE JUGADOR.
function modificarJugador($name, $nbaskets, $nassists, $nrebounds){

	$conexion = conectar("basket");

	$query = "update player set nbaskets='$nbaskets', nassists='$nassists', nrebounds='$nrebounds' where name = '$name' ";

	if(mysqli_query($conexion, $query)){

		echo "<script>
			alert('Datos de jugador modificados');
			window.history.go(-3);
			</script>";
	}

	else{

		echo mysqli_error($conexion);
	}

	desconectar($conexion);
}


// FUNCIÓN QUE SELECCIONA EL NOMBRE DEL EQUIPO.
function selectEquipo2(){

	$conexion = conectar("basket");

	$query = "select name from team";

	$resultado = mysqli_query($conexion,$query);

	desconectar($conexion);

	return $resultado;
}


// FUNCIÓN QUE MODIFICA EL EQUIPO.
function modificarEquipo($name2, $name){

	$conexion = conectar("basket");

	$query = "update player set team = '$name' where name = '$name2'";

	if(mysqli_query($conexion, $query)){

		echo "<script>
			alert('Equipo de jugador modificado');
			window.history.go(-3);
			</script>";
	}

	else{

		echo mysqli_error($conexion);
	}

	desconectar($conexion);
}


// FUNCIÓN QUE BORRA JUGADOR DE LA BASE DE DATOS.
function borrarJugador($name){

	$conexion = conectar("basket");

	$query = "delete from player where name = '$name'";

	if(mysqli_query($conexion, $query)){

		echo "<script>
			alert('Jugador eliminado con exito.');
			window.history.go(-2);
			</script>";
	}

	else{

		echo mysqli_error($conexion);
	}

	desconectar($conexion);
}


// FUNCIÓN QUE LISTA TODOS LOS DATOS DE LOS JUGADORES.
function listarJugadores(){

	$conexion = conectar("basket");

	$query = "select * from player";

	$resultado = mysqli_query($conexion, $query);

	desconectar($conexion);

	return $resultado;
}

function listarEquipos(){

	$conexion = conectar("basket");

	$query = "select * from team";

	$resultado = mysqli_query($conexion, $query);

	desconectar($conexion);

	return $resultado;
}


function listarJugadoresPorEquipo($team){

	$conexion = conectar("basket");

	$query = "select * from player where team = '$team'";

	$resultado = mysqli_query($conexion, $query);

	desconectar($conexion);

	return $resultado;

}


function listarJugadoresPorScore($nbaskets){

	$conexion = conectar("basket");

	$query = "select * from player where nbaskets > '$nbaskets'";

	$resultado = mysqli_query($conexion, $query);

	desconectar($conexion);

	return $resultado;
}


function listarEquiposPorCiudad($city){


	$conexion = conectar("basket");

	$query = "select * from team where city ='$city'";

	$resultado = mysqli_query($conexion, $query);

	desconectar($conexion);

	return $resultado;



}







 ?>