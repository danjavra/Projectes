<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$realizacion = array();
$tortugas = array();

$realizacion[0]=$_POST['leo'];
$realizacion[1]=$_POST['rap'];
$realizacion[2]=$_POST['don']; 
$realizacion[3]=$_POST['mic'];

$tortugas[0]="Leonardo";
$tortugas[1]="Raphael";
$tortugas[2]="Donatello";
$tortugas[3]="Michelangelo";

$max = $realizacion[0];


for($i = 0; $i < 4 ; $i++){
    if ($realizacion[$i]>$max){
 $max = $realizacion[$i];
$posmax = array_search($max,$realizacion);
    }
}
echo"El número més gran es ";
echo $max."<br/>";
echo "La seva posició en el array es el ";
echo $posmax."<br/>";
echo"El seu nom es ";
echo"$tortugas[$posmax]<br/>";