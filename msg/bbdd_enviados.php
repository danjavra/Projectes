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


function consultarMensaje($username){
    $conectar = conectar("msg");
    $select = "select receiver, date , subject from message where sender='$username'";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function insertarEvent($username,$date){
    $conectar = conectar("msg");
    $insert = "insert into event values(null,'$username','$date','C')";
    $resultado = mysqli_query($conectar, $insert);
    desconectar($conectar);
    return $resultado;
}

function totalMensages($username){
    $conectar = conectar("msg");
    $select = "select count(*) as 'total_message' from message where sender='$username'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $total_message;
}