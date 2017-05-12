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

function PasswordUsername($username){
     $conectar = conectar("msg");
     $select = "select password from user where username='$username'";
     $resultado = mysqli_query($conectar, $select);
     $fila = mysqli_fetch_array($resultado);
     extract($fila);
     desconectar($conectar);
     return $password;
}
function modificarPassword($nuevopass,$username){
    $conectar = conectar("msg");
    $update = "update user set password='$nuevopass' where username = '$username'";
    if(mysqli_query($conectar, $update)){
        echo"Se ha modificado la contraseña!";
    }
    else{
    mysqli_error($conectar);
    }
    desconectar($conectar);
}
