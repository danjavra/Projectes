<?php

require_once 'bbdd_stukemon.php';


$entrenador = MostrarEntrenadores();

echo"<h1 style='text-align:center'>Conseguir Pociones(Seleciona El Entrenador)</h1><br>";
echo"<form action='pocionessalud2.php' method='POST'>";
echo"Seleciona el entrenador: ";
echo"<select name='entrenador'>";
while($fila = mysqli_fetch_array($entrenador)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";
echo"<br><br>Nº de pociones que quieres: <input type='number' min=0 name='numeropociones'>";
echo"<br><br><input type='submit' name='conseguir' value='Conseguir Pociones'>";

        
        