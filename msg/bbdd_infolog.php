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

function selectAllUser(){
    $conectar = conectar("msg");
    $select = "select * from user";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function selectFechaHora($usuario){
    $conectar = conectar("msg");
    $select = "select max(date) as UltimaSesion from event where user = '$usuario'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $UltimaSesion;
}
