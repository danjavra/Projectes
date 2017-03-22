<?php

require_once 'bbdd_steam.php';

//función que selecciona el usuario
function selectUsuario(){

	$conexion = conectar("daw_steam");

	$query = "select username from user";

	$resultado = mysqli_query($conexion,$query);

	desconectar($conexion);

	return $resultado;

}

//función que modifica los datos del usuario
function modificarPerfil($nusuario,$pass,$email){
    $conexion = conectar("daw_steam");
    	$query = "update user set password = '$pass' where email = '$email'";

	if(mysqli_query($conexion, $query)){

		echo "<script>
			alert('Usuario modificado');
			window.history.go(-3);
			</script>";
	}

	else{

		echo mysqli_error($conexion);
	}

	desconectar($conexion);
}
