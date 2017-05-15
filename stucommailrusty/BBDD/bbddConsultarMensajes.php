<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'BBDD.php';

function insertarEvent($usuario,$date){
    $conectar = conectar("msg");
    $insert = "insert into event values(null,'$usuario','$date','C')";
    $resultado = mysqli_query($conectar, $insert);
    desconectar($conectar);
    return $resultado;
}

function mensajesOrdenados($usuario,$posicion,$cantidad){
    $conectar = conectar("msg");
    $select = "select * from message  where receiver='$usuario' order by date desc limit $posicion,$cantidad";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function selectBody($idmessage){
    $conectar = conectar("msg");
    $select = "select body from message where idmessage='$idmessage'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $body;
}

function updateRead($idmessage){
    $conectar = conectar("msg");
    $update = "update message set message.read = 1 where idmessage = $idmessage";
    $resultado = mysqli_query($conectar, $update);
    desconectar($conectar);
    return $resultado;
}

function totalMensages($usuario){
    $conectar = conectar("msg");
    $select = "select count(*) as 'total_message' from message where receiver='$usuario'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $total_message;
}
