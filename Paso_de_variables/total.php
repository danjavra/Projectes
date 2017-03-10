<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$art=$_POST['fname'];        
$cant=$_POST['num1'];
$preu=$_POST['num2'];
$iva=((($cant*$preu)*21)/100);

echo"Resumen de la Factura: <br></br>";
echo"Total neto de compra del articulo ".$art." es: ".($cant*$preu)."€. <br>";
echo"El importe de Iva es: ".$iva."€.<br>";
echo"El total con el IVA incluido es de: ".(($cant*$preu)+$iva)."€.";