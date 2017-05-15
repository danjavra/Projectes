<?php

require_once 'BBDD.php';


function Registrar($username,$passcif,$name,$surname,$type){
    $conectar = conectar("msg");
    $insert = "insert into user values('$username','$passcif','$name','$surname','$type')";
    if(mysqli_query($conectar, $insert)){
        echo"Se ha registrado el usuario $username en la BBDD <br><br>";
    }else{
        echo mysqli_error($conectar);
    }
    desconectar($conectar);
}

function existeUsuario($username){
   $conectar = conectar("msg");
   $select = "select * from user where username='$username'";
   $resultado = mysqli_query($conectar, $select);
   $fila = mysqli_num_rows($resultado);
   if($fila>0){
       return true;
   }else{
       return false;
   }
   desconectar($conectar);
}