<?php

function conectar($database){
    $con = mysqli_connect("localhost","root","",$database)
            or die ("No se ha podido conectar con la BBDD.");
    return $con; 
}

function desconectar ($conexion){
    mysqli_close($conexion);
}

function listaClientes(){
            $conexion = conectar("catering");
            $query = "select * from cliente order by poblacion asc, apellidos asc, nombre asc";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;
    }
    
function borrarCliente($nombre){
            $conexion = conectar("catering");
            $query = "delete from cliente where nombre = '$nombre'";
             if(mysqli_query($conexion, $query)){
                    echo "Cliente eliminado con exito";
                }
                else{
                        echo mysqli_error($conexion);
                }
                desconectar($conexion);
            } 
            
function selectCliente(){
            $conexion = conectar("catering");
            $query = "select nombre, apellidos from cliente";
            $resultado = mysqli_query($conexion,$query);
            desconectar($conexion);
            return $resultado;
    }
    
function selectCocinero(){
    	$conexion = conectar("catering");
	$query = "select nombre, apellidos from cocinero";
	$resultado = mysqli_query($conexion,$query);
	desconectar($conexion);
	return $resultado;
}

function selectPlato(){
    	$conexion = conectar("catering");
	$query = "select nombre from plato";
	$resultado = mysqli_query($conexion,$query);
	desconectar($conexion);
	return $resultado;
}

function altaPreplato($idpreparar, $dnicocinero, $idplato, $fecha){
    $con = conectar("catering");
    $insert = "insert into preparar values ('$idpreparar', '$dnicocinero', '$idplato', '$fecha')";
    if (mysqli_query($con,$insert)){
        //Si todo va bien damos mensaje de ok!
        echo"Preparacion de plato dado de alta";
    }else{
        //Sino, damos mensaje de error
        echo mysqli_error($con);
    }
    //Cerramos la conexión con la BBDD
    desconectar($con);
}

function MostrarPlatos(){
    $connectar = conectar("catering");
    $select = "select nombre from plato";
    $resultado = mysqli_query($connectar,$select);
    desconectar($connectar);
    return $resultado;
}

function datosplato($nombre){
    $connectar = conectar("catering");
    $select="select nombre, precio from plato";
    $resultado = mysqli_query($connectar, $select);
    desconectar($connectar);
    return $resultado;
}

function PrecioPlato($plato){
    $connectar = conectar("catering");
     $select = "select precio from plato where nombre='$plato'";
     $resultado = mysqli_query($connectar, $select);
     desconectar($connectar);
     return $resultado;
}
