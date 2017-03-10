<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contar</title>
    </head>
    <body>
        <h1>Introduzca un valor hasta donde tendremos que contar</h1>
        <form action="numeros.php" formtarget="result" autocomplete="on" method="post">
             Numero:<input required   type="number" name="num1" placeholder="Introducir valor"> 
             <input type="submit" value="Resultado"/>
        <?php
        // put your code here
        ?>
    </body>
</html>
