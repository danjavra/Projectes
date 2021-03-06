<?php

require_once 'bbdd_steam.php';
//Método que devuelve el tipo de Usuario
function getTipoUsuario($username){
    $con = conectar ("daw_steam");
    $query = "select type from user where username='$username'";
    $resultado = mysqli_query($con,$query);
    //extraemos el tipo para devolver ya el string con el tipo de user
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $type;
}
//Función que verifica los datos de un user
function verificarUser($username, $pass){
    $con = conectar("daw_steam");
    $query = "select * from user where username='$username'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if ($filas > 0){
        // Comprobamos que la contraseña es correcta
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        /* if(password_verify($pass,$password)){
        return true;
    }else{
        return false;
    } */
    return password_verify($pass,$password);
}else{ //este else no hace falta
    return false;
}
}
// Función que inserta un usuario de tipo usuario

function insertUser($nusuario,$pass,$email){
    $conexion = conectar("daw_steam");
    $insert = "insert into user values"
            ."('$nusuario','$pass', '$email', 'usuario')";
    if (mysqli_query($conexion, $insert)){
        echo "<p>Usuario dado de alta</p>";
    }else{
        echo mysqli_error($conexion);
    }
    desconectar($conexion);
}

// Función que devuelve true si existe un usuario con el nombre de usuario que se le pasa y false si no existe
function existeUsuario($nombre_usuario){
    $conexion = conectar("daw_steam");
    $consulta = "select * from user where username='$nombre_usuario';";
    //Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
    $contador =mysqli_num_rows($resultado);
    desconectar($conexion);
    //Si devueve 1 es que ya existe un usuario con ese nombre de usuario, si devuelve 0 no existe
    if($contador == 0){
        return false;
    }else{
        return true;
    }
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

