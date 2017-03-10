<?php

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbdd_stukemon.php';

//Si se ha pulsado "alta" 
if (isset($_POST['altatrainer'])){
 //Recogemos las variables del POST
    $nombre = $_POST['nombre'];
    $pokeball = $_POST['pokeballs'];
    $pocion = $_POST['pociones'];
//    $puntos =$_POST['puntos'];
    //llamamos al método que inserta la ciudad en la bbdd
    altaEntrenador($nombre, $pokeball, $pocion, 0);
}else{
//formulario de alta de una ciudad
echo"<form ation=' ' method='POST'>";
echo" Nombre: <input required type='text' name='nombre'><br></br>";
echo" Pokeballs: <input required type='number' min=0 name='pokeballs'><br></br>";
echo" Pociones: <input required type='number' min=0 name='pociones'><br></br>";
//echo" <input type='hidden' value='0' name='puntos'>";
echo"<input type='submit' name='altatrainer' value='Alta'>";
echo"</form>";
echo"</br>";
echo'<a class="volver" href="indice.php">Volver al menú</a>';
}