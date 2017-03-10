<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de alumno</title>
    </head>
    <body>
        <!-- Añado enlace para ir al listado de alumnos -->
        <a href="listado.php">Ver listado de alumnos</a>
        <br/>
        <!-- Añado enlace para ir a la función de modificar un alumno -->
        <a href="modificaralumno.php">Modificar datos alumno</a>
        <br>
        
         <?php
         //Si ya se ha rellenado el formulario y se le ha pulsado el boton enviar
         if(isset($_POST["enviar"])){
           //Incluimos el fichero de bbdd
        require_once 'bbdd.php';

        //recibimos los datos del POST
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $ciudad = $_POST["ciudad"];
        $tfno = $_POST["telefono"];
        $sexo = $_POST["sexo"];

        // Insertamos alumno en la bbdd
        insertarAlumno($nombre,$edad,$ciudad,$tfno,$sexo);
         }else{
             echo'
        <form action="" method="POST">
            Nombre: <input type="text" name="nombre"><br>
            Edad: <input type="number" name="edad"><br>
            Ciudad: <input type="text" name="ciudad"><br>
            Telefono: <input type="text" name="telefono"><br>
            Sexo: <input type="text" name="sexo"><br>
            <input type="submit" name="enviar" value="Alta">
        </form>';
        }
        ?>
    </body>
</html>
