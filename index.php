<!DOCTYPE html>
<!--
Conceptos basicos de PHP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi primer PHP</title>
    </head>
    <body>
        <?php
        // echo: instrucción para sacar mensaje por pantalla
        echo 'Hello World <br>';
        /* Esto es un comentario de 
          mas de una linea */
        //$ para indicar varriables
        $numero1 = 25;
        $numero2 = 5;
        $nombre = "Angelo";
        echo "Tu nombres es $nombre <br>";

//suma +
        $suma = $numero1 + $numero2;
        echo " La suma de $numero1 + $numero2 da $suma <br>";
//resta -
        $resta = $numero1 - $numero2;
        echo "La resta da $resta <br>";
//multiplicación *
        $multiplicacion = $numero1 * $numero2;
        echo" El resultado de multiplicarlos es $multiplicacion <br>";
// division /
        $cociente = $numero1 / $numero2;
        echo "El resultado de dividirlos es $cociente <br>";
//resto %
        $resto = $numero1 % $numero2;
        echo "El resto de la división anterior es $resto <br>";
        echo "Valor de la variable numero 1: $numero1 <br>";
        $numero1++; // Incrementa en 1 el valor de la variable
        echo" Valor después del ++: $numero1 <br>";
// equivalente restando --
        $numero1 = $numero1 + 1; // Lo mismo que $numero1++
        $numero1 +=8; // $numero1 = $numero1 + 8;
        $numero1 -=5; // restarle 5 a $numero1
        $numero1 *=10; // multiplicación por 10
        $numero1 /=2; // dividir por 2
        echo "Después de todo numero1 vale $numero1 <br>";

// Condicionales if / else if / else
        $edad = 29;
        if ($edad >= 18) {
            echo"Eres mayor de edad <br>";
        } else if ($edad > 13) {
            echo "Eres adolescente <br>";
        } else {
            echo "Eres pequeño <br>";
        }
            // Condicionales con más de una condición
            if ($edad > 30 && $edad < 50) {
                echo "Estás en la flor de la vida. <br>";
            } else if ($edad <= 30 && $edad >= 18) {
                echo "Tienes menos de 18 o eres VIP<br>";
            } else {
                echo "No se cumple ninguna condición anterior";
            }
        // Ejemplo a partir de un nº del 1 al 7
            //devuelve el nombre del dia de la semana a que corresponda
            $dia = 3;
            switch($dia){
                case 1:
                    echo"Lunes<br>";
                    break;
                case 2:
                    echo "Martes<br>";
                    break;
                case 3:
                    echo "Miercoles<br>";
                    break;
                case 4:
                    echo "Jueves<br>";
                    break;
                case 5:
                    echo "Viernes<br>";
                    break;
                case 6:
                    echo "Sabado<br>";
                    break;
                case 7:
                    echo "Domingo<br>";
                    break;
                default:
                    echo"Nº de día incorrecto";
                    
            }
        ?>
    </body>
</html>
