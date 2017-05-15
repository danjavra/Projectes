<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Mensajes</title>
        <link href="../estilo/consultarmensaje.css" rel="stylesheet" type="text/css"/>

    </head>
   

    <body>
        <h1>Consultar Mensajes</h1>
        
        <?php
        session_start();
        $usuario = $_SESSION["user"];
        $date = date('Y-m-d H:i:s');

        require_once '../BBDD/bbddConsultarMensajes.php';
        insertarEvent($usuario, $date);
        
        $posicion = 0;
        
        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }

        $mensajesOrdenados = mensajesOrdenados($usuario,$posicion,10);
        $total = totalMensages($usuario);
        
       
        
        echo"<div class='div1'>";
        while ($fila = mysqli_fetch_array($mensajesOrdenados)) {
            extract($fila);
            if ($read == 0) {
                $read1 = "no";
            } else if ($read == 1) {
                $read1 = "yes";
            }

            echo"<div class='mensajes'>";
            echo"Sender:$sender <br> Subject:$subject<br>Date:$date<br>Read:$read1<br><br>";
            echo"<form action='' method='POST'>";
            echo"<input type='hidden' value='$idmessage' name='idmessage'>";
            if($read==0){
            echo"<input type='submit' value='Leer' name='leer'>";
            }else if($read==1){
                echo"Leido";
            }
            echo"</form>";
            echo"</div>";
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
        echo"</div>";

        if (isset($_POST["leer"])) {

            $idmessage = $_POST["idmessage"];
            $mensajes = selectBody($idmessage);
            updateRead($idmessage);
            echo"<div class='bodymensajes'>";
            echo"<h2>Body:</h2>";
            echo "$mensajes";
            echo"</div>";
        }
        ?>
        <br><br><br><a href="PaginaAdministrador.php">Volver a la pagina del administrador</a>
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
       

    </body>
</html>
