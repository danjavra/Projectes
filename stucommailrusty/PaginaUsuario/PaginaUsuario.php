<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina Usuario</title>
    </head>
    
    <style>
        *{
            font-family: cursive;
        }
         h1{
            text-align: center;
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
        <h1>Pagina Usuario</h1>
        <a href="cambiarContrasenya.php">Cambiar Contraseña</a><br><br>
        <a href="enviarMensaje.php">Enviar Mensaje</a><br><br>
        <a href="consultarMensaje.php">Consultar Mensajes que le han enviado</a><br><br>
        <a href="consultarMensajeHeEnviado.php">Consultar Mensajes que he enviado</a><br><br>
        
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
        <?php
        // put your code here
        ?>
    </body>
</html>
