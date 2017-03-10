<?php

/* 
 * Php para dar a escoger la ciudad que quiere modificar el usuario
 */

// formulario para escoger la ciudad (se muestran las ciudades que hay en la bbdd)

echo "<form action='modificarciudad2.php' method='POST'>";
//ncesitamos el fichero bbdd
require_once 'bbddtrans.php';
//Consultamos los datos de todas las ciudades
$ciudades = selectAllCiudades();
//Los mostramos en una lista desplegable
echo"Escoge la ciudad a modificar: <select name='ciudad'>";
while ($fila=mysqli_fetch_array($ciudades)){
    extract($fila);
    echo"<option value='$postalcode'>";
    echo "$postalcode - $name";
    echo"</option>";
}
echo"</select>";
echo"<input type='submit' value='Seleccionar'>";
echo"</form>";