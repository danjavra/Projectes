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
         <h1>Menú del Administrador</h1>
        <?php
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        }else{
            echo"No estás autentificado.";
        }
        ?>
        <br><br/>
           <a href="modpassword.php">Modificar password</a>
         <br/>
           <a href="enviar_msg.php">Enviar un mensaje</a>
         <br/>
           <a href="bandeja_entrada.php">Bandeja de entrada</a>
         <br/>
           <a href="enviados.php">Mensajes enviados</a>
         <br/>
           <a href="userlist.php">Lista de usuarios registrados</a>
         <br/>
           <a href="reg_users.php">Registrar Usuarios</a>
         <br/>
           <a href="eliminar_user.php">Eliminar Usuario</a>
         <br/>
           <a href="list_msg_enviados.php">Lista del total de mensajes enviados</a>
         <br/>
           <a href="info_logins.php">Consultar las horas de inicio de sesión de los usuarios</a>
         <br/>
           <a href="ranking.php">Ranking de Usuarios</a>
        <br></br>
        <a href="msg.php">Inicio</a>
    </body>
</html>
