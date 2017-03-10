<?php

/* 
 * Formulario que muestra los datos de la ciudad de la ciudad seleccionada y permite modificarlos
 */

require_once 'bbddtrans.php';
if(isset($_POST['mod'])){
 // Recogemos las variables del POST
    $cpactual =$_POST['cpactual'];
    $cpnuevo =$_POST['cpnuevo'];
    $nombre =$_POST['nombre'];
    //llamamos al método que modifica una ciudad pasándole los datos recogidos
modificarCiudad($cpactual,$cpnuevo,$nombre);
    
}else{
//Recogemos la ciudad seleccionada del post
$ciudad = $_POST['ciudad'];
//traemos todos los datos de la ciudad a partir del codigo postal
$datos = selectCiudadByCodigopostal($ciudad);
$fila=mysqli_fetch_array($datos);
extract($fila);
echo"<form action='modificarciudad2.php' metodo='post'>";
//Los mostramos en el formulario para que el usuario los pueda modificar
echo"<input type='hidden' value='$postalcode' name='cpactual'>";
echo"Código postal: ";
echo"<input type='text' value='$postalcode' name='cpnuevo'>";
echo"Nombre: <input type='text' value='$name' name='nombre'>";
echo"<input type='submit' value='Modificar' name='mod'>";
echo "</form>";
}