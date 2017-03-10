<?php

/* 
 * Recoge el array del POST hace los calculos y muestra los valores por pantalla.
 * 
 */

//Incluimos el fichero de funciones que vamos a utilizar
require_once 'calculos.php';

//Recogemos el array del POST
$valores = $_POST['numeros'];


//Mostramos los valores como ejemplo de que hemos recogido el array
//foreach ($valores as $val){
//    echo "$val<br>";
//}

//Calculamos la suma del array
$total = sumaArray($valores);
echo "La suma de los valores que has introducido es: $total<br>";


$media = mediaArray($valores);
echo "La media de los valores es: $media<br>";