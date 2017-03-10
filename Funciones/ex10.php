<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$num=1000;
$iva=18;

function calcular ($num,$iva){
    return ($num * $iva)/100;
    
}
echo calcular($num,$iva);
echo "<br>";

?>

<?php

function iva ($valor,$porcentaje=0.18){
    $resultado = $valor * $porcentaje;
    return $resultado;
    
}

echo iva(1000);
echo"<br>";
echo iva(1000,$porcentaje = 0.08);
echo "<br>";
echo iva(1000,$porcentaje = 0);
echo "<br>";