<?php

$menor = 0;

function menor($numero){
        for($i=0;$i<4;$i++)
        if ($numero<10){
            $menor = $numero;    
            return $menor;
        }
    
}
echo menor(3,9,6);

function menordetres($a, $b, $c) {
    if ($a < $b && $a < $c) {
        return $a;
    } else if ($b<$a && $b<$c) {
        return $b;
    } else {
        return $c;
    }
}


echo menordetres(3, 9, 6);
?>