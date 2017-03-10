<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$nombre = $_SESSION["nombre"];


echo"Hola $nombre <br>";
echo"Hoy es: ";
$time = time();
echo date("d-m-Y (H:i:s)", $time);
