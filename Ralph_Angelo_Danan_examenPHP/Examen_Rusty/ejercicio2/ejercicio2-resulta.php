<?php

//$fantastico = array();
//
//$fantastico[] = $_POST["fantastico"];
//$fantastico[] = $_POST["invisible"];
//$fantastico[] = $_POST["antorcha"];
//$fantastico[] = $_POST["cosa"];
//
//$maximo = 0;
//
//for ($i=0;$i<count($fantastico);$i++){
//    if ($fantastico[$i]>$maximo){
//        $maximo = $fantastico[$i];
//    }
//    
//}
//
//echo "El numero que haya vencido mas enemigos es:" . $maximo;


$fantastico["fantastico"] = $_POST["fantastico"];
$fantastico["invisible"] = $_POST["invisible"];
$fantastico["antorcha"] = $_POST["antorcha"];
$fantastico["cosa"] = $_POST["cosa"];

$maximo = 0;
$nombre = "";

foreach ($fantastico as $n => $enemigos) {
    if ($enemigos > $maximo) {
        $maximo = $enemigos;
        $nombre = $n;
    }
}

echo "El numero que haya vencido mas enemigos es:" . $maximo." y su nombre es: ".$nombre;