<?php

require_once 'bbdd_stukemon.php';


$pociones = $_POST['pociones'];
$pokemon = $_POST['pokemon'];
$entrenador = $_POST['entrenador'];


if(isset($_POST['mejorarvida'])){
    if($pociones>0){
      
   UpdateVida50($pokemon);
   $gastarpocion = $pociones-1;
   GastarPociones($entrenador,$gastarpocion); 
    }
    else if($pociones<=0){
        echo"El entrenador $entrenador no tiene pociones que gastar<br></br>";
    }
   
}

echo'<a class="volver" href="indice.php">Volver al menú</a>';