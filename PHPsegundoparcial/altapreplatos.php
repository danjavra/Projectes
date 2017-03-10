<?php



require_once 'bbdd_catering.php';


if (isset($_POST['altapreplato'])){
    
    $idpreparar = $_POST['preparar'];
    $dnicocinero = $_POST['cocinero'];
    $idplato= $_POST['plato'];
    $fecha = $_POST['fecha'];
    
    altaPreplato($idpreparar, $dnicocinero, $idplato, $fecha);
}else{

echo"<form ation=' ' method='POST'>";
echo" Idpreparar: <input auto type='text' name='preparar'><br></br>";

$dnicocinero = selectCocinero();
echo"Cocinero: <select name='cocinero'>";
while ($fila=mysqli_fetch_array($dnicocinero)){
    extract($fila);
    echo"<option value='$dni'>";
    echo "$nombre $apellidos";
    echo"</option>";
}
echo"</select><br></br>";
$plato = selectPlato();
echo"Plato: <select name='plato'>";
while ($fila=mysqli_fetch_array($plato)){
    extract($fila);
    echo"<option value='$idplato'>";
    echo "$nombre";
    echo"</option>";
}
echo"</select><br></br>";
echo" Fecha: <input required type='date' name='fecha'><br></br>";
echo"<input type='submit' name='altapreplato' value='Alta'>";
echo"</form>";
echo"</br>";
echo'<a class="volver" href="index.php">Volver al menú</a>';
}