<?php



require_once 'bbdd_stukemon.php';



echo"<h1 style='text-align:center'>Resultados de la batalla</h1>";



if(isset($_POST['lucha'])){
    
$puntos1 = $_POST['puntos1'];
$entrenador1 = $_POST['entrenador1'];
$name1 = $_POST['name1'];
$type1 = $_POST['type1'];
$ability1 = $_POST['ability1'];
$attack1 = $_POST['attack1'];
$defense1 = $_POST['defense1'];
$speed1 = $_POST['speed1'];
$life1 = $_POST['life1'];
$level1 = $_POST['level1'];

$entrenador2 = $_POST['entrenador2'];
$name2 = $_POST['name2'];
$puntos2 = $_POST['puntos2'];
$type2 = $_POST['type2'];
$ability2 = $_POST['ability2'];
$attack2 = $_POST['attack2'];
$defense2 = $_POST['defense2'];
$speed2 = $_POST['speed2'];
$life2 = $_POST['life2'];
$level2 = $_POST['level2'];

$attack1 = $attack1+(2*$level1);
$attack2 = $attack2+(2*$level2);

$life1 = $life1-$attack2;
$life2 = $life2-$attack1;




if($life1>$life2){
    echo"Gana $name1<br><br>";
    $level1++;
    $puntos1=$puntos1+10;
    PuntosGanador($entrenador1,$puntos1);
    PonerPokemonGanador($name1,$name2,$name1);
}
else if($life1<$life2){
    echo"Gana $name2<br><br>";
      $level2++;
       $puntos2=$puntos2+10;
    PuntosGanador($entrenador2,$puntos2);
    PonerPokemonGanador($name2,$name1,$name2);
}

if($life1<$life2){
      $puntos1=$puntos1+1;
  PuntosPerdedor($entrenador1,$puntos1);
 
}

else if($life2<$life1){
   $puntos2=$puntos2+1;
    PuntosPerdedor($entrenador2,$puntos2);
}
echo"---Despues de la batalla---<br><br>";

echo"La vida de $name1 pasara a ser: $life1 <br><br>";
echo"La vida de $name2 pasara a ser: $life2 <br><br>";

UpdateVidaNivel1($name1,$life1,$level1);
UpdateVidaNivel2($name2,$life2,$level2);


}

echo'<a class="volver" href="indice.php">Volver al menú</a>';