<?php

$info["ciudad"] = "Castelldefels";
$info["Comarca"] = "Baix Llobregat";
$info["Provincia"] = "Barcelona";
$info["Orden"] = 15;
$info["Valoracion"] = 9;
$info["Playa"] = "Si";

echo "Ciudad: " . $info["ciudad"]."</br>";
echo "Comarca: " . $info["Comarca"]."</br>";
echo "Provincia: " . $info["Provincia"]."</br>";
echo "Orden: " . $info["Orden"]."</br>";
echo "Valoracion: " . $info["Valoracion"]."</br>";
echo "Playa: " . $info["Playa"]."</br>";

echo"</br>";
echo"</br>";

$info["Valoracion"] = 88;
unset($info["Playa"]);

echo "Ciudad: " . $info["ciudad"]."</br>";
echo "Comarca: " . $info["Comarca"]."</br>";
echo "Provincia: " . $info["Provincia"]."</br>";
echo "Orden: " . $info["Orden"]."</br>";
echo "Valoracion: " . $info["Valoracion"]."</br>";
echo "Playa: " ."</br>";