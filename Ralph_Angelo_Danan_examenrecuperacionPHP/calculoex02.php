<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$asignaturas = array();
$notas = array();

$asignaturas[0]=$_POST['asig1'];
$asignaturas[1]=$_POST['asig2'];
$asignaturas[2]=$_POST['asig3']; 
$asignaturas[3]=$_POST['asig4'];

$notas[0]=$_POST['nota1'];
$notas[1]=$_POST['nota2'];
$notas[2]=$_POST['nota3'];
$notas[3]=$_POST['nota4'];

$max = $notas[0];

for($i = 0; $i < 4 ; $i++){
    if ($notas[$i]>$max){
 $max = $notas[$i];
$posmax = array_search($max,$notas);
    }
}
for($i = 0; $i < 4 ; $i++){
    echo"$asignaturas[$i]: "." $notas[$i]<br/>"; 
}
echo"<br/>";

$media = count($notas[0]+$notas[1]+$notas[2]+$notas[3])/4;
 
echo"La media es "."$media<br/>";
echo"La nota más alta es ";
echo "$max <br/>";
echo"Corresponde a la asignatura ";
echo"$asignaturas[$posmax]<br/>";
