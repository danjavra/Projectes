<?php


$numeros = array();


for ($i=0;$i<10;$i++) {
  $random = rand(0,100);
  array_push($numeros,$random);
  echo $numeros[$i]."<br/>";

}
echo"<br/>";
$suma = array_sum($numeros);
echo"La suma dels números es ";
 echo $suma."<br/>" ;

 echo"<br/>";
$totalnum = count($numeros);
$media = $suma/$totalnum;
echo "La mitjana dels números es ";
echo $media."<br/>";
echo"<br/>";

$max = $numeros[0];
$min = $numeros[0];



for ($i=0;$i<10;$i++){

if ($numeros[$i]>$max){
 $max = $numeros[$i];
$posmax = array_search($max,$numeros);
}
if ($numeros[$i]<$min) {
$min = $numeros[$i]; 
$posmin = array_search($min,$numeros);
}
}
echo"El número més gran es ";
echo $max."<br/>";
echo "La seva posició en el array es el ";
echo $posmax."<br/>";
echo"<br/>";
echo"El número més petit es ";
echo $min."<br/>";
echo "SLa seva posició en el array es el ";
echo $posmin."<br/>";


