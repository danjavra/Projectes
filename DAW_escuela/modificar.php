<?php

/* 
 * Recibe el nombre del alumno seleccionado y muestra el formulario con los 
 * datos para poder modificar
 */


// Necesitamos fichero bbdd
require_once 'bbdd.php';
//si han pulsado modificar
if(isset($_POST['modificar'])){
   //recogemos las variables del POST
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    modificarAlumno($nombre, $edad, $ciudad, $telefono, $sexo);
}else{
// Recogemos el nombre del alumno seleccionado
$nombre = $_POST["alumno"];
// traemos los datos del alumno seleccionado
$datos = selectAlumnoByNombre($nombre);
echo"<h1>Datos del alumno $nombre</h1>";
//Creamos formulario para modificar los datos
//edad,ciudad,telefono,sexo
echo"<form action='' method='POST'>";
//Cargamos los datos en el formulario
$fila = mysqli_fetch_array($datos);
extract($fila);
echo "<input type='hidden' name='nombre' value=$nombre></br>";
echo "Edad: <input type='number' name='edad' value=$edad></br>";
echo "Ciudad: <input type='text' name='ciudad' value=$ciudad></br>";
echo "Telefono: <input type='text' name='telefono' value=$telefono></br>";
echo "Sexo: <input type='text' name='sexo' value=$sexo></br></br>";
echo "<input type='submit' name='modificar' value='Modificar'>";
echo "</form>";

}