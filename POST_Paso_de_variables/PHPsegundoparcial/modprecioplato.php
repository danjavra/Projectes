<?php

require_once 'bbdd_catering.php';

$plato = MostrarPlatos();

echo"<h1 style='text-align:center'>Modificar el Precio del plato (Seleciona El Plato)</h1><br>";
echo"<form action='modprecioplato2.php' method='POST'>";
echo"Escoge el plato:";
echo"<select name='plato'>";
while($fila=  mysqli_fetch_array($plato)){
    extract($fila);
    echo"<option value='$nombre'>$nombre</option>";
}
echo"</select>";

echo"<br><br><input type='submit'  value='Seleccionar'>";
echo"</form>";