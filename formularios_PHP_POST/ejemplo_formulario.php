<!DOCTYPE html>
<!--
Ejemplo de formulario con diferentes tipos de datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de recogida de datos de un usuario</title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            <p>Nombre:<input type="text" name="nombre"></p>
            <p>Apellidos:<input type="text" name="apellidos"></p>
            <p>Aprobados:<input type="number" name="aprobados"></p>
            <p>Fecha nacimiento:<input type="date" name="nacimiento"></p>
            <p>Sexo:
                Mujer <input type="radio" name="sexo" value="mujer">
                Hombre <input type="radio" name="sexo" value="hombre">
            </p>
            <p>Ciudad: <select name="ciudad">
                    <option>Barcelona</option>
                    <option>Girona</option>
                    <option>Lleida</option>
                    <option>Tarragona</option>
                </select></p>
                <p><input type="submit" name="boton" value="Enviar datos"></p>
       
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
