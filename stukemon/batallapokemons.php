<?php

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbdd_stukemon.php';

echo"<h1 style='text-align:center'>¡Batalla!</h1><br>";

echo"<h1 style='text-align:center'>Selecciona los pokemons que lucharán de cada entrenador</h1>";
$entrenador1 = $_POST['entrenador1'];
$entrenador2 = $_POST['entrenador2'];

$pokemon1 = selectPokemonEntrenador($entrenador1);
$pokemon2 = selectPokemonEntrenador($entrenador2);


echo"<form action='datosbatalla.php' method='POST'>";
echo"<h4>Seleciona el pokemon del entrenador $entrenador1 </h4>";
echo"<select name='pokemon1'>";
$puntos1 = SelectPuntos($entrenador1);
$filapuntos1 = mysqli_fetch_array($puntos1);
extract($filapuntos1);
while($fila=  mysqli_fetch_array($pokemon1)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";
echo"<input type='hidden' name='entrenador1' value='$entrenador1'><br><br>";
echo"<input type='hidden' name='puntos1' value='$points'>";
echo"<h4>Seleciona el pokemon del entrenador $entrenador2</h4>";
echo"<select name='pokemon2'>";
$puntos2 = SelectPuntos($entrenador2);
$filapuntos2 = mysqli_fetch_array($puntos2);
extract($filapuntos2);
while($fila=  mysqli_fetch_array($pokemon2)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";
echo"<input type='hidden' name='entrenador2' value='$entrenador2'><br><br>";
echo"<input type='hidden' name='puntos2' value='$points'>";
echo"<br><br><input type='submit' name='seleccionar' value='Seleccionar'>";


echo"</form>";



