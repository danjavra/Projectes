<?php

require_once 'bbdd_msg.php';
//Método que devuelve el tipo de Usuario
function getTipoUsuario($username){
    $con = conectar ("msg");
    $query = "select type from user where username='$username'";
    $resultado = mysqli_query($con,$query);
    //extraemos el tipo para devolver ya el string con el tipo de user
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $type;
}

function insertUser($nusuario, $passcif, $name, $surname, $type, $cpass){
    $conexion = conectar("msg");
    $insert = "insert into user values"
            ."('$nusuario','$passcif', '$name', '$surname', '$type')";
    if (mysqli_query($conexion, $insert)){
        echo "<p>Usuario dado de alta</p>";
    }else{
        echo mysqli_error($conexion);
    }
    desconectar($conexion);
}

// Función que devuelve true si existe un usuario con el nombre de usuario que se le pasa y false si no existe
function existeUsuario($nusuario){
    $conexion = conectar("msg");
    $consulta = "select * from user where username='$nusuario';";
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


        ?>
