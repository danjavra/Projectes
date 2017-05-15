<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Mensaje</title>
    </head>
    
    <style>
        *{
            font-family: cursive;
        }
        h1{
            text-align: center;
        }
        
        .div1{
            background-color: lightgray;
            width: 15%;
            height: 100px;
            margin-top: 20px;
        }
        
        .logout {
            text-decoration: none;
            background-color: red;
            color: white;
            padding: 0.5em 3em;
            display: table;
            margin: auto;

        }
    </style>
    <body>
        <h1>Consultar Mensajes</h1>
        
        <?php
         require_once '../BBDD/bbddConsultarMensajes1.php';
        session_start();
        $usuario = $_SESSION["user"];
        $date = date('Y-m-d H:i:s');
        $consultarMensaje = consultarMensaje($usuario);
        $total = totalMensages($usuario);
        
        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }
       
        insertarEvent($usuario, $date);
        
        while($fila = mysqli_fetch_array($consultarMensaje)){
            extract($fila);
            echo"<div class='div1'>";
            echo"Subject:$subject<br>Receiver:$receiver<br>Date:$date";
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
        ?>
        
         <br><br><br><a href="PaginaUsuario.php">Volver a la pagina del usuario</a>
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
