<?php

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbddtrans.php';
//si se ha pulsado borrar
if (isset($_POST['borrar'])){
    //recogemos el código postal de post
    $conductor = $_POST['conductor'];
    //llamamos a la función que borra en la bbdd
    borrarConductor($conductor);
}else{
//Necesitamos los datos de todas los conductores
$conductores = selectAllConductores();
//Creamos el formulario con la lista desplegable
//para que el usuario pueda escoger al conductor
echo"<form action='' method='POST'>";
echo"Conductor: <select name='conductor'>";
//Rellenamos el select con los datos leídos de la bbdd
while ($fila = mysqli_fetch_array($conductores)){
    extract($fila);
    echo"<option value='$dni'>$dni $name</option>";
    
}
echo"</select>";
echo"<input type='submit' value='Borrar' name='borrar'>";
//cerramos formulario
echo"</form>";

}