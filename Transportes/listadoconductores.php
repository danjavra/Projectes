<?php

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbddtrans.php';

//Ejecutamos la función que nos da los datos de las ciudades
$conductores = selectAllConductores();

//Mostramos los datos al usuario (en html)
echo "<h2>Listado de conductores</h2>";
//Vamos leyendo fila a fila y mostrando los datos de ciudades
while ($fila = mysqli_fetch_array($conductores)){
    extract($fila);
    //Siempre después de extract las variables 
    //se llaman como en la bbdd
    echo"$dni $name<br>";
}