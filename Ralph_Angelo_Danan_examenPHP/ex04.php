<?php


$datos = array();

$datos["Matematicas"] = 10;
$datos["Ingles"] = 4;
$datos["Fisica"] = 8;
$datos["Literatura"] = 5;
$datos["Filosofia"] = 7;
$datos["Ciencias"] = 9;
$datos["Quimica"] = 6;

echo "Matematicas: ".$datos["Matematicas"];
echo"<br>";
echo "Ingles: ".$datos["Ingles"];
echo"<br>";
echo "Fisica: ".$datos["Fisica"];
echo"<br>";
echo"Literatura: ".$datos["Literatura"];
echo"<br>";
echo"Filosofia: ".$datos["Ciencias"];
echo"<br>";
echo"Ciencias: ".$datos["Ciencias"];
echo"<br>";
echo"Quimica: ".$datos["Quimica"];
echo"<br>";

?>

<?php
echo"<br>";
$datos = array();

$datos["Matematicas"] = 10;
$datos["Ingles"] = 4;
$datos["Fisica"] = 8;
$datos["Literatura"] = 5;
$datos["Filosofia"] = 7;
$datos["Ciencias"] = 9;
$datos["Quimica"] = 6;

$datos["Ingles"] = 5;

echo "Matematicas: ".$datos["Matematicas"];
echo"<br>";
echo "Ingles: ".$datos["Ingles"];
echo"<br>";
echo "Fisica: ".$datos["Fisica"];
echo"<br>";
echo"Literatura: ".$datos["Literatura"];
echo"<br>";
echo"Filosofia: ".$datos["Ciencias"];
echo"<br>";
echo"Ciencias: ".$datos["Ciencias"];
echo"<br>";
echo"Quimica: ".$datos["Quimica"];
echo"<br>";

?>

<?php
echo"<br>";
$datos = array();

$datos["Matematicas"] = 10;
$datos["Ingles"] = 4;
$datos["Fisica"] = 8;
$datos["Literatura"] = 5;
$datos["Filosofia"] = 7;
$datos["Ciencias"] = 9;
$datos["Quimica"] = 6;

$datos["Ingles"] = 5;
unset($datos["Literatura"]);

echo "Matematicas: ".$datos["Matematicas"];
echo"<br>";
echo "Ingles: ".$datos["Ingles"];
echo"<br>";
echo "Fisica: ".$datos["Fisica"];
echo"<br>";
echo"Literatura: ".$datos["Literatura"];
echo"<br>";
echo"Filosofia: ".$datos["Ciencias"];
echo"<br>";
echo"Ciencias: ".$datos["Ciencias"];
echo"<br>";
echo"Quimica: ".$datos["Quimica"];
echo"<br>";


foreach ($datos as $asig => $nota) {
    echo "$asig: $nota<br>";
}
?>

