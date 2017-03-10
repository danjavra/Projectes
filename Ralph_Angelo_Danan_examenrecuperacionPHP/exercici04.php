<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$num = 8;
echo "$num".": ";
echo comprobar($num);

function comprobar ($num){
    if ($num >=5 && $num <= 10){
        return"Apto.";
    }
    else if($num < 5 && $num >= 0){
        return"No apto.";
    }
    else{
        return"Incorrecto.";
    }
}
