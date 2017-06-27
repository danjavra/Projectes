<?php

/*
 * Funciones de la base de datos
 */

function selectIDjuego($juego){
    $con = conectar("stugames");
    $select = "select idgame from game where tittle='$juego'";
    $resultado = mysqli_query($con, $select);
     $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $idgame;
}

function borrarjuego($usuario,$idjuego){
      $con = conectar("stugames");
      $delete = "delete from play where user='$usuario' and game='$idjuego'";
       if(mysqli_query($con, $delete)){
       echo"se ha borrado correctament!";
   }else{
       mysqli_error($con);
   }
   desconectar($con);
}

function juegosvotados($usuario){
      $con = conectar("stugames");
    $select = "select count(*) as 'total_juegos' from play where user = '$usuario'";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $total_juegos;
}

function totalpuntosvotos($usuario){
    $con = conectar("stugames");
    $select = "select sum(points) as 'totalpuntos' from play where user = '$usuario'";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $totalpuntos;
}

function votarJuego($usuario,$idgame,$puntos,$date){
   $con = conectar("stugames");
   $insert = "insert into play values(null,'$usuario','$idgame','$puntos','$date')";
   if(mysqli_query($con, $insert)){
       echo"voto hecho!";
   }else{
       mysqli_error($con);
   }
   desconectar($con);
}



function totalMensages(){
    $con = conectar("stugames");
    $select = "select count(*) as 'gamesnovatado' from game where idgame not in(select game from play)";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $gamesnovatado;
}

function selectJuegosNoVotado($posicion,$cantidad){
    $con = conectar("stugames");
    $select = "select * from game where idgame not in(select game from play) limit $posicion,$cantidad";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
    
}

function selectPlayByUser($usuario) {
    $con = conectar();
    $select = "select tittle, genre, points, date from play join game on game=idgame where user='$usuario'";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

function insertUser($usuario, $pass, $name, $edad) {
    $conexion = conectar();
    $insert = "insert into user values ('$usuario', '$pass', '$name', $edad)";
    if (mysqli_query($conexion, $insert)) {
        $msg = "ok";
    } else {
        echo mysqli_error($conexion);
        $msg = "error";
    }
    desconectar($conexion);
    return $msg;
}

function loginUser($username, $password) {
    $con = conectar("stugames");
    $query = "select pass from user where username='$username'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if($filas>0){
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($password, $pass);
    }
    else{
        return false;
    }
}

function conectar() {
    $con = mysqli_connect("localhost", "root", "", "stugames")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}
