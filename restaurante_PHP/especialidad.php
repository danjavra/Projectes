
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cocineros por especialidades</title>
    </head>
    <body>
        <form action="" method="POST">
             Especialidad: <select required name="especialidad">
                 <option value=""> </option>
                 <option value="entrantes">Entrantes</option>
                 <option value="platosprincipales">Primer Plato</option>
                 <option value="postre">Postres</option>
                 </select><br/>
            
            <input type="submit" name="enviar" value="<?php
       if (isset($_POST["especialidad"])) {
           $spel = $_POST["especialidad"];
       }if ($spel == "entrantes"){
           
            require_once'bbdd.php';
            $matriz = selectAllCocinerosEspentrantes();
            echo "<h1>Tabla de Cocineros especializados en entrantes</h1>";
            while ($fila = mysqli_fetch_array($matriz)){
            extract($fila);
   
            echo "$nombre $edad $sexo $telefono $experiencia $especialidad<br>";
        }
        if ($spel == "platosprincipales"){
            require_once'bbdd.php';
            $matriz = selectAllCocinerosEspplatosprincipales();
            echo "<h1>Tabla de Cocineros especializados en platos principales</h1>";
            while ($fila = mysqli_fetch_array($matriz)){
            extract($fila);
   
            echo "$nombre $edad $sexo $telefono $experiencia $especialidad<br>";
        }
        if ($spel == "postres"){
            require_once'bbdd.php';
            $matriz = selectAllCocinerosEsppostres();
            echo "<h1>Tabla de Cocineros especializados en postres</h1>";
            while ($fila = mysqli_fetch_array($matriz)){
            extract($fila);
   
            echo "$nombre $edad $sexo $telefono $experiencia $especialidad<br>";
        }
       }
       ?>" />
        </form>
     
    </body>
</html>
