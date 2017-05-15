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
        <h1>Obtener fecha-hora del último inicio de sesión de un usuario</h1>
        <form action="" method="POST">
        <p>Escoge un usuario:
            
            <select name="usuario">
            <?php
            require_once '../BBDD/bbddObtenerFechaHora.php';
            $allUser = selectAllUser();
            while($fila = mysqli_fetch_array($allUser)){
                extract($fila);
                echo"<option value='$name'>$name $surname</option>";
            }
            ?>
                
            </select>
             </p>
                <input type="submit" name="obtener" value="Filtrar">
            </form>
        
        <?php
        if(isset($_POST["obtener"])){
            $usuario = $_POST["usuario"];
            $FechaHora = selectFechaHora($usuario);
            
            
            echo"La fecha y hora del ultimo inicio de session del usuario $usuario :"."      $FechaHora";
        }
        ?>
        
        <br><br><br><a href="PaginaAdministrador.php">Volver a la pagina del Administrador</a>
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>

    </body>
</html>
