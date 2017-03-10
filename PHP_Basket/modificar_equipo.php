<?php

require_once 'bbdd_basket.php';

$nombres = selectNombreJugadores();

echo"<form action='modificar_equipo2.php' method='POST'>";
echo"Escoge el jugador: ";
echo "<select name='name'>";
while ($fila = mysqli_fetch_array($nombres)) {
    extract($fila);
    echo "<option value = $name>$name</option>";
}
echo "</select>";
echo"<input type='submit' name='modificarteam'>";
echo "</form>";


