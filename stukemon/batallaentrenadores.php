<?php


//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbdd_stukemon.php';

echo"<h1 style='text-align:center'>¡Batalla!</h1><br>";

echo"<form action='batallapokemons.php' method='POST'>";
$entrenador1 = selectEntrenadores();
echo"<text style='margin-left:50px'>Entrenador 1:";
echo"<select name='entrenador1'>";
while($fila=  mysqli_fetch_array($entrenador1)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";
$entrenador2 = selectEntrenadores();
echo"<br><br><br><text style='margin-left:50px'>Entrenador 2:";
echo"<select name='entrenador2'>";
while($fila=  mysqli_fetch_array($entrenador2)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";
echo"<br><br><input style='margin-left:50px' type='submit' value='Seleccionar'>";
echo"</form>";