<?php

// Una forma de definir un array con clave numérica
$notas[3] = 5;
// Sacamos el dato que hay en la posición 3 por pantalla
  echo $notas[3]; 
// saca un 5
echo $notas; //saca array (dice el tipo de la variable)
// no saca nada avisa de error ya que la posición no existe
echo $notas[0];

// Otra forma de definir un array
$edades[]=18;
$edades[]=20;
$edades[]=19;
// sacamos datos por pantalla
echo"<br>";
echo"$edades[0] $edades[1] $edades[2] <br>";

//otra forma de definir un array
$numeros = Array(1,2,3,4,5);
echo"$numeros[0]<br>";

// Arrays con clave cadena
$datos["nombre"] = "Pepe";
$datos["apellido"] = "Gotera";
$datos["edad"] = 45;

// sacamos datos por pantalla
echo $datos["nombre"]." ".$datos["apellido"]." ".$datos["edad"];
echo"<br>";

// Otra forma de definir este tipo de array
$muebles = Array("tipo"=>"Aarmario", "material" => "madera");
echo $muebles["tipo"]."<br>";

// Método para acceder a los datos de un array con clave String
extract($datos);
// Genera las variables $nombre, $apellido y $edad
echo "$nombre , $apellido y $edad <br>";

// recorrer un array, por ejemplo mostramos los datos $numeros 
foreach ($numeros as $num){
    echo $num."<br>";
}

// Mostramos foreach array $datos sin clave
foreach ($datos as $dato) {
    echo " $dato <br>";
   
}
// Mostramos foreach array $datos con clave
foreach ($datos as $clave=>$dato) {
    echo "$clave - $dato <br>";
   
}
// Multiplicamos por todos los numeros de $numeros
foreach ($numeros as &$num){
    $num *=2;
   
}
// Comprobamos si se han multiplicado por dos los valores
foreach ($numeros as $num){
    echo $num."<br>";
}
// con un bucle for
for ($i=0;$i<count($numeros); $i++){
    $numeros[$i] +=10;
}
foreach ($numeros as $num){
    echo $num."<br>";
}
?>