<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numeros = array();


        for ($i = 0; $i < 40; $i++) {
            $random = rand(0, 10);
            array_push($numeros, $random);
        }
        foreach ($numeros as $nums) {
            echo $nums . "<br/>";
        }
        $contador0=0;
        $contador1=0;
        $contador2=0;
        $contador3=0;
        $contador4=0;
        $contador5=0;
        $contador6=0;
        $contador7=0;
        $contador8=0;
        $contador9=0;
        $contador10=0;
        
        for ($i=0; $i<40; $i++) {
            if ($numeros[$i] == 0) {
        $contador0++;
        
            }   if ($numeros[$i] == 1) {
        $contador1++;
        
            }
               if ($numeros[$i] == 2) {
        $contador2++;
        
            }
              if ($numeros[$i] == 3) {
        $contador3++;
        
            }
               if ($numeros[$i] == 4) {
        $contador4++;
        
            }
               if ($numeros[$i] == 5) {
        $contador5++;
        
            }
               if ($numeros[$i] == 6) {
        $contador6++;
        
            }
               if ($numeros[$i] == 7) {
        $contador7++;
        
            }
               if ($numeros[$i] == 8) {
        $contador8++;
        
            }
               if ($numeros[$i] == 9) {
        $contador9++;
        
            }   if ($numeros[$i] == 10) {
        $contador10++;
        
            }
        }
        
        $moda = array();
        
        $moda[0]=$contador0;
        $moda[1]=$contador1;
        $moda[2]=$contador2;
        $moda[3]=$contador3;
        $moda[4]=$contador4;
        $moda[5]=$contador5;
        $moda[6]=$contador6;
        $moda[7]=$contador7;
        $moda[8]=$contador8;
        $moda[9]=$contador9;
        $moda[10]=$contador10;
        
        $max = $moda[0];

for($i = 0; $i < 11 ; $i++){
    if ($moda[$i]>$max){
 $max = $moda[$i];
$posmax = array_search($max,$moda);
    }
}

echo"La moda es ".$moda."<br/>";
echo"Corresponde al numero ";
echo"$numeros[$posmax]<br/>";