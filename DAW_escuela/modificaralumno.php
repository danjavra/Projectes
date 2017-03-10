<?php

/* 
 * Aquí mostraremos los alumnos para que el usuario escoja cuál quiere modificar
 */

// Necesitamos el fichero de la bbdd
require_once 'bbdd.php';

// Llamamos a la función que nos devuelve los nombres de todos los alumnos
$nombres = selectNombreAlumnos();
// Abrimos el formulario
echo"<form action='modificar.php' method='POST'>";
// Vamos a mostrar los nombres con una lista desplegable
echo"Escoge el alumno: ";
// Abrimos select
echo "<select name='alumno'>";
// Rellenamos cada option del select con nombre de alumno
while ($fila = mysqli_fetch_array($nombres)) {
    extract($fila);
    echo "<option value = $nombre>$nombre</option>";
}
//Cerramos select
echo "</select>";
// Mostramos botón
echo"<input type='submit' namevalue='modificar'>";
//cerramos el formulario
echo "</form>";