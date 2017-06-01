<!DOCTYPE html>
<!--
HomePage del user
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stucom Games - Usuario</title>
    </head>
    <body>
        <?php
        session_start();
        require_once 'bbdd.php';
        if (isset($_SESSION["user"])) {
        $usuario = $_SESSION["user"];
        echo "<h1>Bienvenido, $usuario</h1>";
        ?>
        <p>Juegos disponibles para puntuar</p>
        <table>
         <tr><th>Juego</th><th>Genero</th><th>Precio</th></tr>
          <?php 
           
        $posicion = 0;
        
        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }

        $total = totalJuegos($usuario );
            $gamesvoto = juegosNovotados($usuario,$posicion,3);
            while ($fila = mysqli_fetch_array($gamesvoto)) {
                extract($fila);
                echo "<tr>";
                echo "<td>$tittle</td><td>$genre</td><td>$price</td>";
                echo "</tr>";
            }
             if($posicion>0){
            echo "<a href='consultarJuegos.php?posicion=".($posicion - 3)."'>prev</a><br>";
        }
        
        if($posicion + 3 <=$total){
              echo "Mostrando del " . ($posicion + 1) . " al " . ($posicion + 3) . " de $total ";
        }
        else {
        echo "Mostrando del " . ($posicion + 1) . " al $total de $total";
        }
        
        if ($posicion + 3 < $total) {
        echo "<a href='consultarJuegos.php?posicion=" .($posicion + 3)."'>next</a>";
}
            ?>
        </table>
        
        
        <table>
            <caption>Listado de juegos votados</caption>
            <tr><th>Juego</th><th>Genero</th><th>Fecha</th><th>Puntuacion</th></tr>
            <?php 
            $games = selectPlayByUser($usuario);
            while ($fila = mysqli_fetch_array($games)) {
                extract($fila);
                echo "<tr>";
                echo "<td>$tittle</td><td>$genre</td><td>$date</td><td>$points</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <p>Media de tus puntuaciones</p>
        <?php
        $media= mediaPuntuaciones($usuario);
        echo "La media de puntuaciones de juegos del usuario es: $media";
        ?>        
        <?php
        } else {
            echo "<p>Usuario no autentificado. No puedes ver esta página.</p>";
        }
        ?>
        
        <p>Eliminar puntuaciones</p>
        <?php
         echo'<form action="" method="POST">
        <p>Escoge un juego:
        <select game="juego">';
        $game = elegirJuego($usuario);
        while($fila= mysqli_fetch_array($game)){
            extract($fila);
       
            echo"<option value='$game'>$game</option>";         
        } 
      echo'</select></p>
        
        <br><input type="submit" name="eliminar" Value="Eliminar">
        </form></br>';
        
        if(isset($_POST["eliminar"])){
            $game = $_POST["juego"];  
            eliminarUsuario($game);
        }
       ?>
    </body>
</html>
