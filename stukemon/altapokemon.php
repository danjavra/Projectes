<?php


//incluimos el fichero para poder ejecutar métodos de la bbdd
require_once 'bbdd_stukemon.php';

//Si se ha pulsado "alta" 
if (isset($_POST['altapokemon'])){
    
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $habilidad= $_POST['habilidad'];
    $ataque= $_POST['ataque'];
    $defensa= $_POST['defensa'];
    $velocidad= $_POST['velocidad'];
    $vida= $_POST['vida'];
    //$nivel= $_POST['nivel'];
    $entrenador= $_POST['entrenador'];
    //llamamos al método que inserta la ciudad en la bbdd
    altaPokemon($nombre, $tipo, $habilidad, $ataque, $defensa, $velocidad, $vida, 0, $entrenador);
}else{
//formulario de alta de una ciudad
echo"<form ation=' ' method='POST'>";
echo" Nombre: <input required type='text' name='nombre'><br></br>";
echo" Tipo: <input required type='text' name='tipo'><br></br>";
echo" Habilidad: <input required type='text' name='habilidad'><br></br>";
echo" Ataque: <input required type='number' min=0 name='ataque'><br></br>";
echo" Defensa: <input required type='number' min=0 name='defensa'><br></br>";
echo" Velocidad: <input required type='number' min=0 name='velocidad'><br></br>";
echo" Vida: <input required type='number' min=0 name='vida'><br></br>";
//echo" <input type='hidden' value='0' name='nivel'>";
$entrenador = selectEntrenadoresdisp();
//Los mostramos en una lista desplegable
echo"Entrenador del pokemon: <select name='entrenador'>";
while ($fila=mysqli_fetch_array($entrenador)){
    extract($fila);
    echo"<option value='$name'>";
    echo "$name";
    echo"</option>";
}
echo"</select><br></br>";
echo"<input type='submit' name='altapokemon' value='Alta'>";
echo"</form>";
echo"</br>";
echo'<a class="volver" href="indice.php">Volver al menú</a>';
}