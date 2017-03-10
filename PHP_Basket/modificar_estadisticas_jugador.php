<?php


require_once 'bbdd_basket.php';

$nombres = selectNombreJugadores();

echo"<form action='' method='POST'>";
echo"Escoge el jugador: ";
echo "<select name='name'>";
while ($fila = mysqli_fetch_array($nombres)) {
    extract($fila);
    echo "<option value = $name>$name</option>";
}
echo "</select>";
echo"<input type='submit' name='modificar'>";
echo "</form>";

if(isset($_POST['modificar'])){
 
        $name = $_POST["name"];
        $datos = selectJugadorByNombre($name);

echo"<h1>Datos del jugador $name</h1>";
echo"<form action='' method='POST'>";

$fila = mysqli_fetch_array($datos);
extract($fila);
echo "<input type='hidden' name='name' value='$name'></br>";
echo "Nº de canastas: <input type='number' name='canastas' value='$nbaskets'></br>";
echo "Nº de asistencias: <input type='number' name='assis' value='$nassists'></br>";
echo "Nº de rebotes: <input type='number' name='rebot' value='$nrebounds'></br>";
echo "<input type='submit' name='modificar1' value='Modificar'>";
echo "</form>";

}
            
   if(isset($_POST['modificar1'])){     
        $name = $_POST["name"];
        $nbaskets = $_POST["canastas"];
        $nassists = $_POST["assis"];
        $nrebounds = $_POST["rebot"];
        modificarEstadisticas($name,$nbaskets, $nassists, $nrebounds);
   }  
   echo'<br><br/>';
   echo '<a class="volver" href="indice.php">Volver al menú</a>';