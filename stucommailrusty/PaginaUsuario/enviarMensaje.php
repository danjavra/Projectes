<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enviar un mensaje</title>
        <link href="../estilo/estilo2.css" rel="stylesheet" type="text/css"/>
   </head>

    <body>
        <?php
        session_start();
        $usuario = $_SESSION["user"];
        
        require_once '../BBDD/bbddEnviarMensaje.php';
        $allUser = selectUser($usuario);
        $date = date('Y-m-d H:i:s');
        
      
        ?>
        
        <h1>Enviar un mensaje</h1>
        <div class="div1">
        <form action="" method="POST">
            <p><span>Receiver:</span><select name="receiver" required><?php 
            while($fila = mysqli_fetch_array($allUser)){
                extract($fila);
                echo"<option value='$name'>$name $surname</option>";
            }
            ?></select></p>
            <p><span>Subject:</span><input class="subject" type="text" name="subject" maxlength="50" required></p>
            <p><span>Body:</span><textarea class="body" name="body" placeholder="Escribe un mensaje" required></textarea></p>
            <p><input type="submit" class="enviar" name="enviar" value="Enviar"></p>
        </form>
        </div>
        <a href="PaginaUsuario.php">Volver a la pagina del Usuario</a><br><br>
        
        <?php 
        if(isset($_POST["enviar"])){
            $receiver = $_POST["receiver"];
            $subject = $_POST["subject"];
            $body = $_POST["body"];

          enviarMensaje($usuario,$receiver,$date,$subject,$body);
          registrarEvent($usuario,$date);
        }
        
        ?>
        
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
