<?php

/* 
 * Funciones necesarias para el ejercicio
 */

//Funcion que devuelve la suma de una array
function sumaArray($array){
    $suma = 0;
    foreach ($array as $n){
        $suma+=$n; //$suma = $suma+$n
    
        
    }
    return $suma;
}


//Funciones que devuelve la media de los valores de un array
function mediaArray($array){
    return sumaArray($array) /count($array);
}

