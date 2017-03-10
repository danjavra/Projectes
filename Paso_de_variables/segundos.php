<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$hora=$_POST['hora'];        
$min=$_POST['minutos'];
$seg=$_POST['segundos'];


if($seg == 59 && $min == 59 && $hora == 24){
    echo"El tiempo ahora es: ".(($hora*0)+1)."h ".($min*0)."min y ".($seg*0)."s.";
}
else if($seg == 59 && $min == 59){
    echo"El tiempo ahora es: ".($hora+1)."h ".($min*0)."min y ".($seg*0)."s.";
}
else if($seg == 59){
    echo"El tiempo ahora es: ".$hora."h ".($min+1)."min y ".($seg*0)."s.";
}        
else {
    echo"El tiempo ahora es: ".$hora."h ".$min."min y ".($seg+1)."s.";
}    