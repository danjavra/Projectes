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

function rankingUsuario(){
    $conectar = conectar("msg");
    $select = "select sender, count(sender) as 'mensajes_enviados' from message group by sender order by mensajes_enviados desc";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}
