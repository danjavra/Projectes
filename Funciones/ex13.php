<?php
include("ex12.php");

/* 
 * Crear una función a la que se le pase un array y devuelva cuántos nº's pares contiene. 
 * Desde el programa principal, crea un array con nº's aleatorios, muestralo por pantalla 
 * y luego muestra cuántos nº's pares contiene
 */

function Pares ($num){
    $a = 0;
    for($i=0; $i < count($num);$i++){

        if( $num[$i] % 2 == 0)
           $a++; 
        }
        return $a;
    }


$result = crearArray (10);
mostrararray($result);
$num3 = Pares($result);
echo $num3;
    
