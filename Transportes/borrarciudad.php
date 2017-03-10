<?php

//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbddtrans.php';
//si se ha pulsado borrar
if (isset($_POST['borrar'])){
    //recogemos el código postal de post
    $ciudad = $_POST['ciudad'];
    //llamamos a la función que borra en la bbdd
    borrarCiudad($ciudad);
}else{
//Necesitamos los datos de todas las ciudades
$ciudades = selectAllCiudades();
//Creamos el formulario con la lista desplegable
//para que el usuario pueda escoger la ciudad
echo"<form action='' method='POST'>";
echo"Ciudad: <select name='ciudad'>";
//Rellenamos el select con los datos leídos de la bbdd
while ($fila = mysqli_fetch_array($ciudades)){
    extract($fila);
    echo"<option value='$postalcode'>$postalcode $name</option>";
    
}
echo"</select>";
echo"<input type='submit' value='Borrar' name='borrar'>";
//cerramos formulario
echo"</form>";

}