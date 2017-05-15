<?php

require_once 'BBDD.php';




function selectUser($username){
    $conectar = conectar("msg");
    $select = "select * from user where username!='$username'";
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