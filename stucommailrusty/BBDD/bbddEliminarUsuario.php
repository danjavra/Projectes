<?php

require_once 'BBDD.php';

function selectUsuario($usuario){
    $conectar = conectar("msg");
    $select = "select * from user where username!='$usuario'";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function eliminarUsuario($username){
    $conectar = conectar("msg");
    $delete = "on delete cascade from user where username='$username'";
    if(mysqli_query($conectar, $delete)){
        echo"Se ha eliminado el usuario $username<br><br>";
    }else{
        echo mysqli_error($conectar);
    }
    desconectar($conectar);
}

