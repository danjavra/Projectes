<?php

require_once 'bbdd_stukemon.php';

if(isset($_POST['seleccionar'])){
$entrenador1 = $_POST['entrenador1'];
$entrenador2 = $_POST['entrenador2'];

$pokemon1 = $_POST['pokemon1'];
$pokemon2 = $_POST['pokemon2'];

$puntos1 = $_POST['puntos1'];
$puntos2 = $_POST['puntos2'];


echo"<form action='batalla.php' method='POST'>";
$datospokemon = datospokemon($entrenador1,$pokemon1);
$fila = mysqli_fetch_array($datospokemon);

extract($fila);
echo"<h1 style='text-align:center'>Estadisticas del pokemon de $entrenador1</h1>";
echo"<h2>$pokemon1</h2>";
echo"<input type='hidden' name='name1' value='$name'><br>";
echo"Tipo:<input type='text' name='type1' value='$type'><br>";
echo"Habilidad:<input type='text'name='ability1' value='$ability'><br>";
echo"Ataque:<input type='number' name='attack1' value='$attack'><br>";
echo"Defensa:<input type='number' name='defense1' value='$defense'><br>";
echo"Velocidad:<input type='number' name='speed1' value='$speed'><br>";
echo"Vida:<input type='number' name='life1' value='$life'><br>";
echo"Nivel:<input type='number' name='level1' value='$level'><br>";
echo"<input type='hidden' name='entrenador1' value='$entrenador1'>";
echo"<input type='hidden' name='puntos1' value='$puntos1'>";

$datospokemon = datospokemon($entrenador2,$pokemon2);
$fila = mysqli_fetch_array($datospokemon);
extract($fila);

echo"<h1 style='text-align:center'>Estadisticas del pokemon de $entrenador2</h1>";
echo"<h2>$pokemon2</h2>";
echo"<input type='hidden' name='name2' value='$name'><br>";
echo"Tipo:<input type='text' name='type2' value='$type'><br>";
echo"Habilidad:<input type='text'name='ability2' value='$ability'><br>";
echo"Ataque:<input type='text' name='attack2' value='$attack'><br>";
echo"Defensa:<input type='text' name='defense2' value='$defense'><br>";
echo"Velocidad:<input type='number' name='speed2' value='$speed'><br>";
echo"Vida:<input type='number' name='life2' value='$life'><br>";
echo"Nivel:<input type='number' name='level2' value='$level'><br></br>";
echo"<input type='submit' name='lucha' value='¡A luchar!'>";
echo"<input type='hidden' name='entrenador2' value='$entrenador2'>";
echo"<input type='hidden' name='puntos2' value='$puntos2'>";
echo"</form>";
}
