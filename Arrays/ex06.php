<?php
$datos = array();

$datos["nombre"] = "Sara";
$datos["apellido"] = "Martínez";
$datos["edad"] = 23;
$datos["ciudad"] = "Barcelona";

echo $datos["nombre"]." ".$datos["apellido"]." ".$datos["edad"]." ".$datos["ciudad"];
echo"<br>";

?>

<?php
$datos = array();

$datos["nombre"] = "Sara";
$datos["apellido"] = "Martínez";
$datos["edad"] = 23;
$datos["ciudad"] = "Barcelona";

$datos["edad"] = 24;

echo $datos["nombre"]." ".$datos["apellido"]." ".$datos["edad"]." ".$datos["ciudad"];
echo"<br>";


?>

<?php
$datos = array();

$datos["nombre"] = "Sara";
$datos["apellido"] = "Martínez";
$datos["edad"] = 24;
$datos["ciudad"] = "Barcelona";
unset($datos["ciudad"]);
echo $datos["nombre"]." ".$datos["apellido"]." ".$datos["edad"];
echo"<br>";


?>