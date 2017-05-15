<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'BBDD.php';

function selectAllUser(){
    $conectar = conectar("msg");
    $select = "select * from user";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function selectFechaHora($usuario){
    $conectar = conectar("msg");
    $select = "select max(date) as 'UltimoSession' from event where user = '$usuario'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $UltimoSession;
}
