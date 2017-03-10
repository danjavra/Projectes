<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tiempo</title>
    </head>
    <body>
        <h1>Introduzca el tiempo actual.</h1>
         <form action="segundos.php" formtarget="result" autocomplete="on" method="post">
             Hora:<input required type="number" name="hora" min="0" max="24">
             Minutos:<input required type="number" name="minutos" min="0" max="60">
             Segundos:<input required type="number" name="segundos" min="0" max="60"><br/><br/>
             <input type="submit" value="Registrar"/>
        <?php
        // put your code here
        ?>
    </body>
</html>
