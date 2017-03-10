<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>calculadora</title>
    </head>
    <body>
        <form action="calculadora.php" formtarget="result" autocomplete="on" method="get">
            <div style="background-color: lightsteelblue; margin-left: 550px; margin-right: 550px; height:250px;   color:red; text-align: center; border: dashed red;" >
                <h1>Calculadora</h1>
                <div>           
                    Numero 1:<input required   type="number" name="num1" placeholder="Introducir valor"> 
                    <input style="margin-left: 10px; margin-top: 10px; width:60px ; height:40px; font-size: 20px; " type="submit" name="suma" value="+" />
                    <input style=" margin-top: 10px; width:60px ; height:40px; font-size: 20px;" type="submit" name="resta" value="-"/>
                </div> 
                <div>   
                    Numero 2:<input required  type="number" name="num2" placeholder="Introcudir valor">
                    <input style="margin-left: 10px; margin-top: 10px; width:60px ; height:40px; font-size: 20px;" type="submit" name="multiplicacion" value="x"/>
                    <input style=" margin-top: 10px; width:60px ; height:40px; font-size: 20px;" type="submit" name="division" value="÷"/>
                </div> 
                <br/>

                Resultado:<input type="text" name="resultado" clase="resultado" id="resultado" value="<?php
                if (isset($_GET["num1"])) {
                    $num1 = $_GET["num1"];
                    $num2 = $_GET["num2"];
                    if (isset($_GET["suma"])) {
                        echo $num1 + $num2;
                    } else if (isset($_GET["resta"])) {
                        echo $num1 - $num2;
                    } else if (isset($_GET["division"])) {
                        echo $num1 / $num2;
                    } else if (isset($_GET["multiplicacion"])) {
                        echo $num1 * $num2;
                    }
                }
                ?>" />


                <input  style="margin-left: 12px;" type="reset" value="limpia el formulario" /><br/>

            </div>

        </form>



    </body>
</html>
