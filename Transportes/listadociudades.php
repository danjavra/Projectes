<?php

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbddtrans.php';

//Ejecutamos la función que nos da los datos de las ciudades
$ciudades = selectAllCiudades();

//Mostramos los datos al usuario (en html)
echo "<h2>Listado de ciudades</h2>";
//Vamos leyendo fila a fila y mostrando los datos de ciudades
while ($fila = mysqli_fetch_array($ciudades)){
    extract($fila);
    //Siempre después de extract las variables 
    //se llaman como en la bbdd
    echo"$postalcode $name<br>";
}