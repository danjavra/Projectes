<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'BBDD.php';

function selectAllMessage(){
    $conectar = conectar("msg");
    $select = "select * from message";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}
