<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mail=$_GET['mail'];
       echo"El e-mail es: ".$mail."<br/>";
       
       $raza=$_GET['raza'];
      echo"La raza del usuario es: ".$raza."<br/>";
     
      $comidas=$_GET['comida'];
      echo"La comida favorita del usuario es: ";
       for($i=0; $i<count($comidas);$i++){
      echo $comidas[$i]." ";
       }
      