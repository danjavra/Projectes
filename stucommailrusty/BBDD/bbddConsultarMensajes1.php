<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'BBDD.php';

function consultarMensaje($usuario){
    $conectar = conectar("msg");
    $select = "select receiver, date , subject from message where sender='$usuario'";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function insertarEvent($usuario,$date){
    $conectar = conectar("msg");
    $insert = "insert into event values(null,'$usuario','$date','C')";
    $resultado = mysqli_query($conectar, $insert);
    desconectar($conectar);
    return $resultado;
}

function totalMensages($usuario){
    $conectar = conectar("msg");
    $select = "select count(*) as 'total_message' from message where sender='$usuario'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $total_message;
}