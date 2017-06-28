<?php
function conectar() {
    $con = mysqli_connect("localhost", "root", "", "gym")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}

function loginUser($name, $password) {
    $con = conectar("gym");
    $query = "select pass from member where name='$name'";
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

function insertUser($name, $pass, $edad, $type) {
    $conexion = conectar();
    $insert = "insert into member values (null,'$pass', '$name', $edad, 0)";
    if (mysqli_query($conexion, $insert)) {
        $msg = "ok";
    } else {
        echo mysqli_error($conexion);
        $msg = "error";
    }
    desconectar($conexion);
    return $msg;
}
function selectActividad($posicion,$cantidad){
    $con = conectar("gym");
    $select = "select * from activity where name not in(select name from member) limit $posicion,$cantidad";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
    
}

function totalActividades(){
    $con = conectar("gym");
    $select = "select count(*) as 'actividades' from activity where name not in(select name from member)";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $gamesnovatado;
}