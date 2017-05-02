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
function verificarUser($username, $password){
    $con = conectar("msg");
    $query = "select * from user where username='$username' and password='$password'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if ($filas > 0){
        return true;
    }else{
        return false;
    }
}
