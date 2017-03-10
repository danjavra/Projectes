<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $num1 = 88;
       $num2 = 23;
       $num3 = 3;

       
       echo nummayor($num1,$num2,$num3);
       
echo "<br>";
        ?>
        <?php
        function nummayor ($num1,$num2,$num3){
            
  if ($num1==$num2 && $num1==$num3){
    return"Los numeros son iguales";
}

else if($num1 > $num2 && $num1 > $num3 && $num2==$num3){
    return"$num1";
}

else if($num2 > $num1 && $num2>$num3 && $num1==$num3){
    return"$num2 ";
}

else if($num3 > $num2 && $num3>$num2 && $num2==$num1){
    return"$num3";
}


else if ($num1 > $num2 && $num1 > $num3 && $num2 > $num3 ){
    return"$num1 ";
}

else if ($num1 > $num2 && $num1 > $num3 && $num3 > $num2){
    return"$num1 ";   
}

else if ($num2 > $num1 && $num2 > $num3 && $num1 > $num3 ){
    return"$num2";

}
    
else if ($num2 > $num1 && $num2 > $num3 && $num3 > $num1){
    return"$num2 ";
}

else if ($num3 > $num1 && $num3 > $num2 && $num1 > $num2) {
    return "$num3 ";
}

else if ($num3 > $num1 && $num3 > $num2 && $num2 > $num1) {
    return "$num3 ";
}
        }
    ?>    
    </body>
</html>
