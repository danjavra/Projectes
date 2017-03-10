<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Vamos a necesitar guardar en variables de sesión
session_start();

// Recibimos los datos del post del formulario (fichero 3.php)
$nombre = $_POST["nombre"];
$pass= $_POST["password"];
$_SESSION["nombre"] = $nombre;
$_SESSION["pass"] = $pass;

echo "hola $nombre<br>";
echo "<a href=mod.php>Modificar contraseña</a>";