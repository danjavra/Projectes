<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numeros = array();


        for ($i = 0; $i < 10; $i++) {
            $random = rand(0, 10);
            array_push($numeros, $random);
        }
        foreach ($numeros as $nums) {
            echo $nums . "<br/>";
        }
        echo "ahora empieza el ejercicio <br>";
        $suma=0;
        $contador=0;
        for ($i=0; $i<10; $i++) {
            if ($i %2 ==0) {
                $suma += $numeros[$i];
                $contador++;
            } else {
                echo $numeros[$i]." ";
            }
        }

//        if ($i % 2 == 0) {
//
//            $suma+= $i;
//        } else {
//            echo "<br>.Impar " . $i;
//        }



        echo"<br>";
        echo"La suma de los numeros pares es: $suma<br>";
        ?>
    </body>
</html>
