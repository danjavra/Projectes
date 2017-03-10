<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$notas = array();

for ($i = 0; $i < 10; $i++) {
            $random = rand(0, 10);
            array_push($notas, $random);
        }
         foreach ($notas as $nums) {
            echo $nums . "<br/>";
        }
        echo"<br>";
        echo porcentaje($notas);
       
        function porcentaje ($notas){
             $contador =0;
            for ($i = 0; $i < 10; $i++) {
                if($notas[$i]>=5){
                    $contador++;
                }
            }$aprovados = ($contador*100)/10;
            return"Hay un ".$aprovados." % de aprovados <br/>";
        }
