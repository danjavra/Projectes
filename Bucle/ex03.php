<?php
$contador = 0;
for ($i = 0; $i <=100; $i+=3){
       $contador++;    
     echo"$i ";
        
if ($contador == 10){
    echo"<br>";
    $contador =0;
//    $contador++;
}
}