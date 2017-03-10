<?php

$dia = 40;
$mes = 2;
$any = 5015;



 if ($any >0 && $dia <=31 && $dia >0 && $mes==1){
    echo" Fecha correcta <br> $dia / Enero / $any";
}
 else if ($any >0 && $dia <=29 && $dia >0 && $mes==2){
    echo" Fecha correcta <br> $dia / Febrero / $any";
}
 else if ($any >0 && $dia <=31 && $dia >0 && $mes==3){
    echo" Fecha correcta <br> $dia / Marzo / $any";
}
else if ($any >0 && $dia <=30 && $dia >0 && $mes==4){
    echo" Fecha correcta <br> $dia / Abril / $any";
}
else if ($any >0 && $dia <=31 && $dia >0 && $mes==5){
    echo" Fecha correcta <br> $dia / Mayo / $any";
}
else if ($any >0 && $dia <=30 && $dia >0 && $mes==6){
    echo" Fecha correcta <br> $dia / Junio / $any";
}
else if ($any >0 && $dia <=31 && $dia >0 && $mes==7){
    echo" Fecha correcta <br> $dia / Julio / $any";
}
else if ($any >0 && $dia <=31 && $dia >0 && $mes==8){
    echo" Fecha correcta <br> $dia / Agosto / $any";
}
else if ($any >0 && $dia <=30 && $dia >0 && $mes==9){
    echo" Fecha correcta <br> $dia / Septiembre / $any";
}
else if ($any >0 && $dia <=31 && $dia >0 && $mes==10){
    echo" Fecha correcta <br> $dia / Octubre / $any";
}
else if ($any >0 && $dia <=30 && $dia >0 && $mes==11){
    echo" Fecha correcta <br> $dia / Noviembre / $any";
}
else if ($any >0 && $dia <=31 && $dia >0 && $mes==12){
    echo" Fecha correcta <br> $dia / Diciembre / $any";
}
else  {
    echo" Fecha incorrecta.";
}
