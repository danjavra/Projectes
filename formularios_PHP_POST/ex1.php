<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Numeros del 1 al 10</title>
        
    </head>
    <body>
        <form method="POST" action="">
             Introduzca un numero del 1 al 10: <input type="number" min="1" max="10" name="num" >
            <input type="submit" value="Enviar">
        <?php
        if (isset($_POST['num'])){
        $valor = $_POST['num'];
        $numelegido = rand(1,10);
     
        
      if($numelegido == $valor){
        echo "Has acertado! ".$numelegido." es el numero elegido.";
        }
       else {
        echo"¡Numero incorrecto!";
        }
        }
         
        ?>
    </body>
</html>
