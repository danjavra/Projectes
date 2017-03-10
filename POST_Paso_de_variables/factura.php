<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Factura</title>
    </head>
    <body>
         <h1>Introduzca el articulo a comprar.</h1>
         <form action="total.php" formtarget="result" autocomplete="on" method="post">
             Artículo:<input required="" maxlength="50" pattern=".{2,50}" type="text" name="fname" placeholder="Nombre del producto">
             Cantidad:<input required   type="number" name="num1" min="0" placeholder="Introducir cantidad a comprar"> 
             Precio por unidad en €:<input required   type="number" step="any" name="num2" min="0" placeholder="Introducir el precio por unidad"></br> 
             <br>
             <input type="submit" value="Calcular"/>
    
        <?php
        // put your code here
        ?>
    </body>
</html>
