
<?php

/*
 * fichero que mostrará el listado de alumnos que hay en la BBDD
 */

// Necesitamos incluïr el fichero para poder llamar las funciones de bbdd
require_once'bbdd.php';

//Llamamos a la función y recogemos el resultado
$matriz = selectAllCocineros();

// Mostramos el resultado por pantalla
echo "<h1>Tabla de Cocineros</h1>";
// Mientras haya filas en el resultado
while ($fila = mysqli_fetch_array($matriz)){
    // Extraigo los datos de la fila
    extract($fila);
    // Las Variables que genera extract tendrán el mismo nombre
    // que los campos en la bbdd
    // Mostramos los datos
    echo "$nombre $edad $sexo $telefono $experiencia $especialidad<br>";
}