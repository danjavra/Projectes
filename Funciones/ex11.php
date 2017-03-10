<?php

/* 
Escribe una función a la que se le pase un array de números y devuelve la media de los mismos para probarla,
 * crea una variable llamada media, muestrala por pantalla luego añade un elemento array, vuelve a llamar la funcion con el nuevo array
 * y vuelve a mostrar la nueva media por pantalla
 */

function myArray ($ar){
    $media = 0;
    $cuenta = 0;
    foreach ($ar as $value){
        $media += $value;
        $cuenta++;
    }

    $resultado = $media/$cuenta;
    return $resultado;
    
    }
$ar1 = array (5,7,9,3);
$res = myArray ($ar1);

echo $res;