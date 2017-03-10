<?php
//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbddtrans.php';

//Si se ha pulsado "alta" 
if (isset($_POST['altacon'])){
 //Recogemos las variables del POST
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $telf = $_POST['telf'];
    $sueldo = $_POST['salario'];
    //llamamos al método que inserta la ciudad en la bbdd
    altaConductor($dni, $nombre, $telf, $sueldo);
}else{
//formulario de alta de una ciudad
echo"<form ation='' method='POST'>";
echo" D.N.I.: <input type='txt' name='dni'>";
echo" Nombre: <input type='text' name='nombre'>";
echo" Telefono: <input type='text' name='telf'>";
echo" Salario: <input type='text' name='salario'>";
echo"<input type='submit' name='altacon' value='Alta'>";
echo"</form>";
}