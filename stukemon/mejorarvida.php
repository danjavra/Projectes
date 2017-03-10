<?php

require_once 'bbdd_stukemon.php';

$entrenador = MostrarEntrenadores();

echo"<h1 style='text-align:center'>Mejorar Vida(Seleciona El Entrenador)</h1><br>";
echo"<form action='mejorarvida2.php' method='POST'>";
echo"Escoge el entrenador:";
echo"<select name='entrenador'>";
while($fila=  mysqli_fetch_array($entrenador)){
    extract($fila);
    echo"<option value='$name'>$name</option>";
}
echo"</select>";

echo"<br><br><input type='submit'  value='Seleccionar'>";
echo"</form>";



