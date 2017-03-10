<?php

/* 
 * Fichero donde estarán todas las funciones relacionadas con la BBDD
 */

// Función que conecta con una bbdd
function conectar($database){
    $con = mysqli_connect("localhost","root","",$database)
            or die ("No se ha podido conectar con la BBDD.");
    return $con; 
}

//Función que cierra la conexión con la bbdd
function desconectar ($conexion){
    mysqli_close($conexion);
}

//Funcion que inserta una ciudad en la BBDD
function altaCiudad ($codipostal,$nombre){
    $con = conectar("transport");
    $insert = "insert into city values ('$codipostal','$nombre')";
    if (mysqli_query($con,$insert)){
        //Si todo va bien damos mensaje de ok!
        echo"Ciudad dada de alta";
    }else{
        //Sino, damos mensaje de error
        echo mysqli_error($con);
    }
    //Cerramos la conexión con la BBDD
    desconectar($con);
}

//funcion que devuelve todos los datos de todas las ciudades
function selectAllCiudades(){
    $con = conectar("transport");
    $select = "select * from city";
    //ejecutamos la consulta y recogemos el esultado
    $resultado = mysqli_query($con,$select);
    desconectar($con);
    // Devolvemos el resultado de la consulta
    return $resultado;
}
 //funcion que borra una ciudad a partir de su codigo postal
function borrarCiudad($cp){
    $con = conectar("transport");
    $delete = "delete from city where postalcode='$cp'";
    if(mysqli_query($con,$delete)){
        echo "Ciudad borrada";
    }else{
        echo mysqli_error($con);
    }
    desconectar($con);
}

//funcion que da de alta a los conductores en la BBDD
function altaConductor($dni, $nombre, $telf, $sueldo){
    $con = conectar("transport");
    $insert = "insert into truckdriver values ('$dni','$nombre','$telf','$sueldo')";
    if (mysqli_query($con,$insert)){
        //Si todo va bien damos mensaje de ok!
        echo"Conductor dado de alta";
    }else{
        //Sino, damos mensaje de error
        echo mysqli_error($con);
    }
    //Cerramos la conexión con la BBDD
    desconectar($con);
}

//funcion que devuelve todos los datos de todas los conductores
function selectAllConductores(){
    $con = conectar("transport");
    $select = "select * from truckdriver";
    //ejecutamos la consulta y recogemos el esultado
    $resultado = mysqli_query($con,$select);
    desconectar($con);
    // Devolvemos el resultado de la consulta
    return $resultado;
}
 //funcion que borra un conductor a partir de su dni
function borrarConductor($dni){
    $con = conectar("transport");
    $delete = "delete from truckdriver where dni='$dni'";
    if(mysqli_query($con,$delete)){
        echo "Conductor eliminado";
    }else{
        echo mysqli_error($con);
    }
    desconectar($con);
}

//Función que devuelve todos los datos de una ciudad dado un código postal pasado como parámetro
function selectCiudadByCodigopostal($cp){
    $con = conectar("transport");
    $select = "select * from city where postalcode='$cp'";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

//función que modifica una ciudad
function modificarCiudad($cp, $cpnuevo, $nom){
    $con = conectar("transport");
    $update = "update city set postalcode='$cpnuevo',
    name='$nom' where postalcode='$cp'";
    if(mysqli_query($con,$update)){
        echo"Ciudad modificada.";
    }else{
        echo mysqli_error($con);
    }
    desconectar($con);
}