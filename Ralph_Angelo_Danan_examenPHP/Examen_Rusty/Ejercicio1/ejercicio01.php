<?php

$numero = array();

for ($i = 0; $i < 25; $i++) {
    $numero_random = rand(10, 20);
    array_push($numero, $numero_random);
}

foreach ($numero as $num) {
    echo$num . "</br>";
}

echo "</br>";
echo "Los numeros impares son:" . "</br>";
$sumaimpares = 0;
$impares = $numero[0];
for ($i = 0; $i < 25; $i++) {
    if ($numero[$i] % 2 == 1) {
        $impares = $numero[$i];
        echo $impares . "</br>";
        $sumaimpares = $sumaimpares + $impares;
    }
}

echo"La suma de los impares es: " . $sumaimpares;





