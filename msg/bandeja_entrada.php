<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <h1>Bandeja de Entrada</h1>
        <?php
          require_once 'bbdd_bandejaEntrada.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        echo"<br>==========================================</br>";
        $date = date('Y-m-d H:i:s');

        
        insertarEvent($username , $date);
        
        $posicion = 0;
        
        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }

        $mensajesOrdenados = mensajesOrdenados($username ,$posicion,10);
        $total = totalMensages($username );

        
        while ($fila = mysqli_fetch_array($mensajesOrdenados)) {
            extract($fila);
            if ($read == 0) {
                $read1 = " Pendiente de leer";
            } else if ($read == 1) {
                $read1 = " Leído";
            }

            echo"De: $sender <br> Tema: $subject<br>Date: $date<br>Leer: $read1<br><br>";
            echo"<form action='' method='POST'>";
            echo"<input type='hidden' value='$idmessage' name='idmessage'>";
            if($read==0){
            echo"<input type='submit' value='Leer' name='leer'>";
            }else if($read==1){
                echo" Leído";
            }
            echo"</form>";
           
        }
        if($posicion>0){
            echo "<a href='consultarMensaje.php?posicion=".($posicion - 10)."'>prev</a><br>";
        }
        
        if($posicion + 10 <=$total){
              echo "Mostrando " . ($posicion + 1) . " al " . ($posicion + 10) . " de $total ";
        }
        else {
        echo "Mostrando " . ($posicion + 1) . " al $total de $total";
        }
        
        if ($posicion + 10 < $total) {
        echo "<a href='consultarMensaje.php?posicion=" .($posicion + 10)."'>next</a>";
}
      

        if (isset($_POST["leer"])) {

            $idmessage = $_POST["idmessage"];
            $mensajes = selectBody($idmessage);
            updateRead($idmessage);
            echo"<div class='bodymensajes'>";
            echo"<h2>Body:</h2>";
            echo "$mensajes";
            echo"</div>";
        }
    
        }else{
            echo"No estás autentificado.";
        }
        
        
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<br></br><a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<br></br><a href='adminHome.php'>Volver al menú</a>";
                }
        ?>
    </body>
</html>
