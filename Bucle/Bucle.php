
<html>
<head>
<meta charset="UTF-8">
        <title></title>
        </head>
        <body>
        <?php
        // Mostrar un mensaje 5 veces
       // for (valor inicial; condición; incremento) {
//bloque de instrucciones;}
        for ($i = 0; $i <5; $i++){
            echo"$i - Mensaje que va a salir 5 veces <br>";
        }
echo"Valor de i cuando sale del bucle: $i <br>";

// Mismo ejemplo anterior con un while
$i = 0;
while ($i < 5){
    echo"$i <br>";
    $i++;
   
}

// Ejemplo de bucle que va sumando nº aleatorios
// Hasta que llegue a 100
// Inicializamos la variable donde vamos a ir haciendo la suma
echo"<br>";
$suma = 0;
while($suma < 100){
    // sumamos un nº aleatorio entre 1 y 20 a $suma
    $suma += rand(1,20);
    echo"$suma<br>";
}
        ?>
</body>
</html>