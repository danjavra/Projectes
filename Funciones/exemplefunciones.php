<?php
// Llamamos a la función
saludar();
$n ="Isabel";
saludar($n);
//saludar("Leonardo");
$nombre=("Miguel");
saludar($nombre);
saludar($nombre,5,"Anotnio",3.5);

$r = suma(34, 45);
echo"El resultado de sumar es $r<br>";

?>

<?php
// Como ejemplo usaremos ete bloque para las funciones
function saludar(&$nombre="Pepe"){
    echo "Hola $nombre<br>";
    $nombre = "Marta";
}
// función con valor de retorno
function suma($a,$b) {
    $resultado = $a +$b;
    return $resultado;
}

function multiploTres($a){
    if ($a % 3 == 0){
        return true;
    } else {
        return false;
    }
}

function completamenteIguales($a,$b){
    if ($a === $b) { //Iguales en valor y tipo de dato
        return true;
    } else {
        return false;
    }
}

?>