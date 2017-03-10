<?php

require_once 'bbdd_catering.php';


$plato = $_POST['plato'];
$precio = PrecioPlato($plato);
$precio2 = $_POST['precio2'];

echo"<form action='modprecioplato3.php' method='POST'>";
$datosplato = datosplato($nombre);
$fila = mysqli_fetch_array($datosplato);

extract($fila);
echo"<h1 style='text-align:center'>Precio del plato $plato</h1>";
echo"Plato:<input type='text' name='nombre' value='$nombre'><br>";
echo"Precio:<input type='decimal' name='precio' value='$precio'><br>";

echo"Precio que quieres poner:<input type='decimal' name='precio2' value='$precio2'><br>";
echo"<br><br><input type='submit' name='cambiar' value='Cambiar'>";
echo"</form>";
