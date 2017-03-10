<!DOCTYPE html>
<!--
Formulario con respuesta en la misma ventana pedir al usuario cuantos nºs 
quiere introducir. Crear las casillas correspondientes para dichos numeros.
Cuando el usuario los haya introducido puede pedir los calculos:
Suma, media y cantidad de nºs pares que hay.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculos con nºs en arrays</title>
    </head>
    <body>
        <form method="POST" action="">
            Numeros: <input type="number" name="cantidad">
            <input type="submit" value="Enviar">
        </form>
       

         <?php
            if (isset($_POST['cantidad'])){
                
            
            $cantidad = $_POST['cantidad'];
            echo "<form method='POST' action='resultados1.php'>";
            for ($i=0;$i<$cantidad;$i++){
                echo "<input style='margin-top:10px;'  type='number' name='numeros[]'><br>";
            }
            
            echo "<br><input type='submit' value='Calcular'>";
            echo "</form>";
            
            }
        ?>
    </body>
</html>