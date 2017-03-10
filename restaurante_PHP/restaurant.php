<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Restaurant</title>
    </head>
    <body>
          <!-- Añado enlace para ir al listado de alumnos -->
          <a href="tablacocineros.php">Ver tabla de todos los cocineros registrados</a>
          <a href="experiencia.php">Ver tabla de cocineros con más de 5 años de experiencia</a>
          <a href="especialidad.php">Ver tabla de cocineros por especialidades</a>
        <?php
         //Si ya se ha rellenado el formulario y se le ha pulsado el boton enviar
         if(isset($_POST["enviar"])){
           //Incluimos el fichero de bbdd
        require_once 'bbdd.php';

        //recibimos los datos del POST
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $tfno = $_POST["telefono"];
        $sexo = $_POST["sexo"];
        $xper = $_POST["experiencia"];
        $spel = $_POST["especialidad"];

        // Insertamos alumno en la bbdd
        insertarCocinero($nombre,$edad,$tfno,$sexo,$xper,$spel);
         }else{
             echo'
        <form action="" method="POST">
            Nombre: <input required type="text" name="nombre"><br>
            Edad: <input required type="number" min="18" max="65" name="edad"><br>
            Telefono: <input required type="number" min="100000000" max="999999999" name="telefono"><br>
            Sexo: <input required style="margin-left: 20px;" type="radio" name="sexo" value="hombre">hombre<input style="margin-left: 20px;" type="radio" name="sexo" value="mujer">mujer<br/><br/>
            Experiencia: <input required type="number" min="0" max="46" name="experiencia"><br>            
            Especialidad: <select required name="especialidad">
                 <option value=""> </option>
                 <option value="entrantes">Entrantes</option>
                 <option value="platosprincipales">Primer Plato</option>
                 <option value="postre">Postres</option>
                 </select><br/>
            
            <input type="submit" name="enviar" value="Alta">
        </form>';
        }
        ?>
    </body>
</html>
