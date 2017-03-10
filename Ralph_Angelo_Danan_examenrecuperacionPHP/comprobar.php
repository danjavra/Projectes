<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$nombre = $_POST["nombre"];
$pass= $_POST["password"];
$_SESSION["nombre"] = $nombre;
$_SESSION["pass"] = $pass;



if( $nombre =='admin' && $pass =='admin'){
    echo "Usuario correcto<br>";
    echo "hola $nombre<br>";
    echo "<a href=bienvenida.php>Pagina de bienvenida</a>";
}elseif ($nombre == 'Stucom' && $pass =='Stucom2017'){
     echo "Usuario correcto<br>";
     echo "hola $nombre<br>";
     echo "<a href=bienvenida.php>Pagina de bienvenida</a>";
}elseif ($nombre == 'Usuario' && $pass =='1234') {
    echo "Usuario correcto<br>";
    echo "hola $nombre<br>";
    echo "<a href=bienvenida.php>Pagina de bienvenida</a>";
}elseif ($nombre == 'DAW1M' && $pass =='Aula36') {
   echo "Usuario correcto<br>"; 
   echo "hola $nombre<br>";
   echo "<a href=bienvenida.php>Pagina de bienvenida</a>";
}else{
    echo "Usuario o contraseña incorrecto<br>";
    echo "<a href=ejercicio3.php>Volver a introducir datos</a>";
}