<!DOCTYPE html>
<!--
HomePage del user
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stucom Games - Usuario</title>
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
        $totaljuegosNoVote = totalMensages();
        
        echo "<h1>Bienvenido, $usuario</h1>";
        ?>
<!--        <p>Juegos disponibles para puntuar</p>-->
        <h3>Juego que no esta votado</h3>
        <table>
            <tr><th>Tittle</th><th>Price</th><th>Genre</th></tr>
            <?php
            $juegonovotado = selectJuegosNoVotado($posicion,3);
            while($fila = mysqli_fetch_array($juegonovotado)){
                extract($fila);
                echo"<tr><form action='' method='POST'><td>$tittle</td><td>$price</td><td>$genre</td><td>"
                        . "<input type='hidden' name='idjuegos' value='$idgame'><input type='hidden' name='juego' value='$tittle'><input type='submit' name='votar' value='votar'></form></td></tr>";
            }

            ?>
             <?php
        if(isset($_POST["votar"])){
            require_once 'bbdd.php';
              $idjuego = $_POST["idjuegos"];
               $juegos = $_POST["juego"];
              echo"<p>Introduce 0 al 10 el punto de votos para el juego $juegos :<form action='' method='POST'>"
                      . "<input type='number' min='0' max='10' name='puntuacion'><input type='hidden' name='idgame' value='$idjuego'><input type='submit' value='votar' name='votarpuntos'></form></p>";     
        }
        
          if(isset($_POST["votarpuntos"])){
               $idjuego = $_POST["idgame"];
                $puntos = $_POST["puntuacion"];
                votarJuego($usuario,$idjuego,$puntos,$date);
            }
        ?>
            
            
             <?php
        if($posicion>0){
            echo "<a href='user.php?posicion=".($posicion - 3)."'>prev</a><br>";
        }
        
        if($posicion + 3 <=$totaljuegosNoVote){
              echo "Mostrando " . ($posicion + 1) . " al " . ($posicion + 3) . " de $totaljuegosNoVote ";
        }
        else {
        echo "Mostrando " . ($posicion + 1) . " al $totaljuegosNoVote de $totaljuegosNoVote";
        }
        
        if ($posicion + 3 < $totaljuegosNoVote) {
        echo "<a href='user.php?posicion=" .($posicion + 3)."'>next</a>";
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
                echo "<form action='' method='POST'><tr>";
                echo "<td>$tittle</td><td>$genre</td><td>$date</td><td>$points</td><td><input type='hidden' name='juego' value='juego'><input type='submit' value='borrar' name='borrar'></td>";
                echo "</tr></form>";
            }
            if(isset($_POST["borrar"])){
            $juego = $_POST["juego"];    
            $idjuego = selectIDjuego($juego);
            borrarjuego($usuario,$idjuego);
            }
            ?>
        </table>
        
        <?php
        $totalpuntosvotos = totalpuntosvotos($usuario);
        $totaljuegovoto = juegosvotados($usuario);
        ?>
        <p>
            Media de tus puntuaciones: <?php echo ($totalpuntosvotos/$totaljuegovoto)?>
        </p>
        <?php
        } else {
            echo "<p>Usuario no autentificado. No puedes ver esta página.</p>";
        }
        ?>
       
    </body>
</html>
