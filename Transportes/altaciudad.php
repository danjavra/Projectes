<?php
/*
 * Fichero con formulario para dar de alta una ciudad
 * la insertará en la bbdd
 */

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbddtrans.php';

//Si se ha pulsado "alta" 
if (isset($_POST['alta'])){
 //Recogemos las variables del POST
    $cp = $_POST['cp'];
    $nombre = $_POST['nombre'];
    //llamamos al método que inserta la ciudad en la bbdd
    altaCiudad($cp, $nombre);
}else{
//formulario de alta de una ciudad
echo"<form ation='' method='POST'>";
echo"Código postal: <input type='txt' name='cp'>";
echo" Nombre: <input type='text' name='nombre'>";
echo"<input type='submit' name='alta' value='Alta'>";
echo"</form>";
}