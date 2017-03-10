<?php

$num = 13;
$num2 = 2;
$resto = $num % $num2;

if ($num > 20) {
            echo "Tu numero es mayor que 20 <br>";
} 
else if ($resto == 0) {
    echo 'Es multiplo de 2';
    
}
else {
    echo 'No es multiplo de 2';
}