<?php

require_once 'BBDD.php';


function LogIn($username,$pass){
    $conectar = conectar("msg");
    $select = "select password from user where username='$username'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_num_rows($resultado);
    desconectar($conectar);
    if($fila > 0){
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($pass,$password);
    }else{
        return false;
    }
}

function selectTypeUser($username){
    $conectar = conectar("msg");
    $select = "select type from user where username='$username'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $type;
}

function registrarEvento($username,$date,$type){
    $conectar = conectar("msg");
    $insert = "insert into event values(null,'$username','$date','I')";
    if(mysqli_query($conectar, $insert)){
        echo"";
    }else{
        echo mysqli_error($conectar);
    }
    desconectar($conectar);
}

