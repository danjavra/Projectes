<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Usuario</title>
    </head>
    
    <style>
        *{
            font-family: cursive;
        }
        
        .body{
                margin-left: 23px;
          
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
        <h1>Eliminar Usuario</h1>
        <form action="" method="POST">
        <p>Escoge un usuario:
        <select name="usuario">
            <?php 
        require_once '../BBDD/bbddEliminarUsuario.php';
        session_start();
        $usuario = $_SESSION["user"];
        $AllUsuario = selectUsuario($usuario);
        while($fila= mysqli_fetch_array($AllUsuario)){
            extract($fila);
        echo"<option value='$username'>$username</option>";         
        } 
       ?></select></p>
        
        <br><input type="submit" name="eliminar" Value="Eliminar">
        </form>
        
        <?php
        if(isset($_POST["eliminar"])){
            $username = $_POST["usuario"];  
            eliminarUsuario($username);
        }
        ?>
        <br><br><a href="PaginaAdministrador.php">Volver a la pagina del administrador</a>
        
        <br><br><a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    
    </body>
</html>
