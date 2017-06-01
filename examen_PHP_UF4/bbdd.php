<?php

/*
 * Funciones de la base de datos
 */

function selectPlayByUser($usuario) {
    $con = conectar();
    $select = "select tittle, genre, points, date from play join game on game=idgame where user='$usuario'";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

function juegosNovotados($usuario){
  $con = conectar();
    $select = "select tittle, genre, price from game";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;  
}

function totalJuegos($usuario){
    $conectar = conectar();
    $select = "select count(*) as 'total_game' from play where user='$usuario'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $total_game;
}

function mediaPuntuaciones($usuario){
    $con = conectar();
    $select = "select avg(points) from play where user='$usuario'";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;  
}

function insertUser($usuario, $passcif, $name, $edad) {
    $conexion = conectar();
    $insert = "insert into user values ('$usuario', '$passcif', '$name', $edad)";
    if (mysqli_query($conexion, $insert)) {
        $msg = "ok";
    } else {
        echo mysqli_error($conexion);
        $msg = "error";
    }
    desconectar($conexion);
    return $msg;
}

function loginUser($username, $pass) {
    $con = conectar();
    $query = "select pass from user where username='$username' and pass='$pass'";
    echo $query;
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    return ($filas > 0);
}

function conectar() {
    $con = mysqli_connect("localhost", "root", "", "stugames")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

function elegirJuego($game){
    $conectar = conectar("msg");
    $select = "select * from play where game!='$game'";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}
