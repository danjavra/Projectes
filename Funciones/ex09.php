<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$impar = par(6);

if($impar==true){
    echo"El nombre es parell";
} else {
    echo"El nombre es impar";
   
}

function par ($num){
    if($num%2==0){
        return true;
    }
        else {
            return false;
        }
        
    }
