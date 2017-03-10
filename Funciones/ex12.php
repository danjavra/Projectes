<?php

/* 
 *Crear una función que genere un array con tantos nº's aleatorios como se le indique en el parametro que se le pase
 * llamar a la función y luego mostrar los valores del array por pantalla
 */

function crearArray ($num){
    for ($i=0;$i<$num;$i++){
        $valores[]=rand(0,100);
    }
    return $valores;
}
$res = crearArray (8);
foreach($res as $numeros){
    echo$numeros."<br>";
}