<?php

require_once 'bbdd_stukemon.php';

$entrenador = $_POST['entrenador'];
$numeropociones = $_POST['numeropociones'];

$puntosentrenador = SelectPuntos($entrenador);
$filapoints = mysqli_fetch_array($puntosentrenador);
extract($filapoints);

$pocionesentrenador = SelectPociones($entrenador);
$filapotions = mysqli_fetch_array($pocionesentrenador);
extract($filapotions);

$costepociones = $numeropociones*10;

 

if(isset($_POST['conseguir'])){
    if($points>$costepociones || $points==$costepociones){
        $points = $points-$costepociones;
        $potions = $potions+$numeropociones;
        echo"$entrenador ha conseguido $numeropociones pociones más. <br><br> ";
        echo"Los puntos de $entrenador ahora seran: $points<br><br>";
        echo"Las pociones de $entrenador ahora seran: $potions<br><br>";
        ActualizarVidaPocion($potions, $points, $entrenador);
    }
    
    else if($points<$costepociones){
        $faltapuntos = $costepociones-$points;
        echo"El entrenador $entrenador no puede conseguir $numeropociones pociones!<br><br>";
        echo"Faltan $faltapuntos puntos para conseguir $numeropociones pociones<br><br> ";
    }
}
echo '<a class="volver" href="indice.php">Volver al menú</a>';