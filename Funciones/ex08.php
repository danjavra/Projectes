<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$altura=13;
$radio=3;

function volumen($altura, $radio){
   return pi() * $radio * $radio * $altura ;
    
}
echo volumen($altura,$radio);