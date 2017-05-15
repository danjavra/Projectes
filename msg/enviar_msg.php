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
           <h1>Enviar Mensaje Nuevo</h1>
        <?php
        require_once 'bbdd_enviar_msg.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        
        }else{
            echo"No estás autentificado.";
        }
        
         $allUser = selectUser($username);
        $date = date('Y-m-d H:i:s');
        
      
        ?>
        
        
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
       
        
        <?php 
        if(isset($_POST["enviar"])){
            $receiver = $_POST["receiver"];
            $subject = $_POST["subject"];
            $body = $_POST["body"];

          enviarMensaje($usuario,$receiver,$date,$subject,$body);
          registrarEvent($usuario,$date);
        }
        
        
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<a href='adminHome.php'>Volver al menú</a>";
                }
        ?>
    </body>
</html>
