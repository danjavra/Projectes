<?php

$chess = array();

$chess["torre"] = "t";
$chess["alfil"] = "a";
$chess["caballo"] = "c";
$chess["rey"] = "r";
$chess["reina"] = "R";
$chess["peon"] = "p";
$chess["nada"] = ".";

echo $chess["torre"]."  ".$chess["caballo"]."  ".$chess["alfil"]."  ".$chess["rey"]."  ".$chess["reina"]."  ".$chess["alfil"]."  ".$chess["caballo"]."  ".$chess["torre"];
echo "<br>";

for($i = 0; $i < 8 ; $i++){
    echo$chess["peon"]."  ";
    
}
echo"<br>";
for($i = 0; $i < 8 ; $i++){
    echo"  ".$chess["nada"]."   ";
    
}
echo"<br>";
for($i = 0; $i < 8 ; $i++){
    echo"  ".$chess["nada"]."   ";
   
}
 echo"<br>";
for($i = 0; $i < 8 ; $i++){
    echo"  ".$chess["nada"]."   ";
    
}
echo"<br>";
for($i = 0; $i < 8 ; $i++){
    echo"  ".$chess["nada"]."   ";
   
}
 echo"<br>";
for($i = 0; $i < 8 ; $i++){
    echo$chess["peon"]."  ";
    
}
echo"<br>";
echo $chess["torre"]."  ".$chess["caballo"]."  ".$chess["alfil"]."  ".$chess["rey"]."  ".$chess["reina"]."  ".$chess["alfil"]."  ".$chess["caballo"]."  ".$chess["torre"];
