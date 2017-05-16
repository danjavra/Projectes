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

function selectUser($name){
    $conectar = conectar("msg");
    $select = "select username from user where name!='$name'";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}


function enviarMensaje($username,$receiver,$date,$subject,$body){
   $conectar = conectar("msg");
   $insert = "insert into message values(null,'$username','$receiver','$date',0,'$subject','$body')";
       if(mysqli_query($conectar, $insert)){
           echo"Se ha enviado correctamente<br><br>";
       }else{
           echo mysqli_error($conectar);
       }
       desconectar($conectar);
}

function registrarEvent($usuario,$date){
   $conectar = conectar("msg");
   $insert = "insert into event values(null,'$usuario','$date','R')";
   $resultado = mysqli_query($conectar, $insert);
   desconectar($conectar);
   return $resultado;
}