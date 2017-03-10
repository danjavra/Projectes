<?php

$notas = array();

$notas["Isabel"] = "5";
$notas["Mireia"] = "18";
$notas["Juan"] = "7";
$notas["Pepe"] = "4";
$notas["Miguel"] = "6";

$max = $notas[0];
$min = $notas[0];

for ($i=0;$i<5;$i++){

if ($notas[$i]>$max){
 $max = $notas[$i];
$nommax = array_search($max,$notas);
}
if ($notas[$i]<$min) {
$min = $notas[$i]; 
$nommin = array_search($min,$notas);
}
}

echo"La nota mas alta es ";
echo $max."<br/>";
echo "El nombre del alumno es ";
echo $nommax."<br/>";
echo"<br/>";
echo"La nota mas baja es ";
echo $min."<br/>";
echo "El nombre del alumno es ";
echo $nommin."<br/>";
