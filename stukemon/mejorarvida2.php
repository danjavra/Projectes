<?php

require_once 'bbdd_stukemon.php';

$entrenador = $_POST['entrenador'];
$pokemonentrenador = PokemonEntrenador($entrenador);
$pokemon = SelectTodosPokemon();

if(mysqli_num_rows($pokemonentrenador) < 1){
    echo "Entrenador seleccionado no tiene pokemon";
}else{

$selectPotions = SelectPociones($entrenador);
$potionsfila = mysqli_fetch_array($selectPotions);
extract($potionsfila);
echo"<h1 style='text-align:center'>Seleciona El pokemon de $entrenador al que quieres mejorar la vida:</h1><br>";
echo"<form action='mejorarvida3.php' method='POST'>";
echo"Seleciona el pokemon:";
echo"<select name='pokemon'>";
while($fila=  mysqli_fetch_array($pokemonentrenador)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";

echo"<input type='hidden' name='entrenador' value='$entrenador'>";
echo"<input type='hidden' name='pociones' value='$potions'>";
echo"<br><br><input type='submit' name='mejorarvida' value='Mejorar Vida'>";

echo"</form>";
}
