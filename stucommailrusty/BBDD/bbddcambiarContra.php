<?php

require_once 'BBDD.php';


function contraseñaActual($username,$pass){
    $conectar = conectar("msg");
    $select = "select password from user where username='$username'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return password_verify($pass,$password);   
}

function cambiarContraseña($passwordcif,$username){
    $conectar = conectar("msg");
    $update = "update user set password ='$passwordcif' where username='$username'";
    if(mysqli_query($conectar, $update)){
        echo"Se ha cambiado la contraseña correctamente del usuario $username<br><br>";
        
    }else{
        echo mysqli_error($conectar);
    }
    desconectar($conectar);
}