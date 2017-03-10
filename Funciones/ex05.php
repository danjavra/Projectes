<?php

function calc($num1,$num2,$operacion){
    switch($operacion){
        case '+':
            return $num1+$num2;
        case '-':
            return $num1-$num2;
        case '*':
            return $num1*$num2;
        case '/':
            return $num1/$num2;
        default:
            return "operacion incorrecta";
    }
}

echo calc(8,5,'+')."<br>";
echo calc(8,5,'-')."<br>";
echo calc(8,5,'*')."<br>";
echo calc(8,5,'/')."<br>";
echo calc(8,5,'#')."<br>";