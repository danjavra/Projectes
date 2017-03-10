<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$name = $_POST["nombre"];
$surname = $_POST["apellidos"];
$pass = $_POST["aprobados"];
$born = $_POST["nacimiento"];
$sex = $_POST["sexo"];
$city = $_POST["ciudad"];

echo"<p>Datos del usuario</p>";
echo"<p>$name $surname, $pass, $born, $sex, $city</p>";