<?php


require_once 'bbdd_msg.php';
//Método que devuelve el tipo de Usuario


function listadoUsuario(){
    $conectar = conectar("msg");
    $select = "select * from user ";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}