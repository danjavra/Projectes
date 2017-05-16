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
//Función que verifica los datos de un user
function verificarUser($username, $pass){
    $con = conectar("msg");
    $query = "select password from user where username='$username'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if ($filas > 0){
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($pass,$password);
    }else{
        return false;
    }
}

function registrarEvento($username,$date,$tipo){
    $conectar = conectar("msg");
    $insert = "insert into event values(null,'$username','$date','I')";
    if(mysqli_query($conectar, $insert)){
        echo"";
    }else{
        echo mysqli_error($conectar);
    }
    desconectar($conectar);
}

