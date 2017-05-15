<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina Administrador</title>
        <link href="../estilo/paginaadministrador.css" rel="stylesheet" type="text/css"/>
    </head>
    
 
    <body>
        <h1>Pagina Administrador</h1>
        <div class="main">
        <div><a href="cambiarContrasenya.php">Cambiar Contraseña</a></div>
        <div><a href="enviarMensaje.php">Enviar Mensaje</a></div>
        <div><a href="consultarMensaje.php">Consultar Mensajes que le han enviado</a></div>
        <div><a href="consultarMensajeHeEnviado.php">Consultar Mensajes que he enviado</a></div>
  
        <div><a href="listadoUsuarios.php">Listado de todos los usuarios</a></div>
        <div><a href="registrar.php">Registrar Usuarios</a></div>
        <div><a href="eliminarUsuario.php">Eliminar Usuarios</a></div>
        <div><a href="listaMensajes.php">Lista de todos los mensajes</a></div>
        <div><a href="obtenerFechaHora.php">Obtener fecha-hora del ultimo inicio de session</a></div>
        <div><a href="RankingUsuario.php">Obtener Ranking de los usuarios</a></div>
        </div>

 <?php
        // put your code here
        ?>
        
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
