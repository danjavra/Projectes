<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'BBDD.php';

function rankingUsuario(){
    $conectar = conectar("msg");
    $select = "select sender, count(sender) as 'mensajes_enviados' from message group by sender order by mensajes_enviados desc";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}
