<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>NoTeRomas Gym - Usuario</title>
    </head>
    <style>
         td,th{
            border:solid black 3px;
         
        }
        table{
            text-align: center;
                font-size: 20px;
        }
    </style>
    <body>
        <?php
        session_start();
        require_once 'bbdd.php';
        if (isset($_SESSION["user"])) {
        $usuario = $_SESSION["user"];
        $posicion = 0;
        
        $date = date('Y-m-d H:i:s');

        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }
        $totalActividades = totalActividades();
        
        echo "<h1>Bienvenido, $usuario</h1>";
        ?>

        <h3>Actividades que no esta apuntado</h3>
        <table>
            <tr><th>Nombre</th><th>Precio</th><th>Capacidad</th></tr>
            <?php
            $actividad = selectActividad($posicion,5);
            while($fila = mysqli_fetch_array($actividad)){
                extract($fila);
                echo"<tr><form action='' method='POST'><td>$nombre</td><td>$precio</td><td>$capacidad</td><td>"
                        . "<input type='hidden' name='actividades' value='$nombre'><input type='hidden' name='actividad' value='$nombre'><input type='submit' name='apuntar' value='apuntar'></form></td></tr>";
            }

            ?>
             <?php
        if(isset($_POST["apuntar"])){
            require_once 'bbdd.php';
              $actividades = $_POST["actividades"];
               $actividad = $_POST["actividad"];
             
        }
  
        if($posicion>0){
            echo "<a href='user.php?posicion=".($posicion - 5)."'>prev</a><br>";
        }
        
        if($posicion + 5  <=$actividad){
              echo "Mostrando " . ($posicion + 1) . " al " . ($posicion + 5) . " de $actividad ";
        }
        else {
        echo "Mostrando " . ($posicion + 1) . " al $actividad de $actividad";
        }
        
        if ($posicion + 3 < $actividad) {
        echo "<a href='user.php?posicion=" .($posicion + 3)."'>next</a>";
}
        }
?>
        </table>
    
   
    </body>
</html>
