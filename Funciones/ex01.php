<?php

$numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$letras = array("P", "R", "U", "E", "B", "A", "L", "O");

mostrar($numeros);
echo "<br>";
mostrar($letras);
?>

<?php

function mostrar($array) {
    foreach ($array as $valor) {
        echo $valor."<br>";
    }
}
?>