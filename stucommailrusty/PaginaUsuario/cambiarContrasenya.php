<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambiar Contraseña</title>
        <link href="../estilo/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
   
    <body>
        
        <h1>Cambiar Contraseña</h1> 
        <form action="" method="POST">
            Contraseña Actual:<input type="password" name="actual" required><br><br>
            Nueva Contraseña:<input type="password" name="nueva" required><br><br>
            Confirmar Contraseña:<input type="password" name="confirmar" required><br><br>
            <input type="submit" name="cambiar" Value="Cambiar Contraseña">
        </form>
        
        
        <?php
        if(isset($_POST["cambiar"])){
            require_once '../BBDD/bbddcambiarContra.php';
            session_start();
            $username = $_SESSION["user"];
            $actual = $_POST["actual"];
            $nueva = $_POST["nueva"];
            $confirmar = $_POST["confirmar"];
            $passwordcif = password_hash($nueva, PASSWORD_DEFAULT);

            if(contraseñaActual($username,$actual)){
                if($nueva == $confirmar){
                    cambiarContraseña($passwordcif,$username);
                }else{
                    echo"Confirmar contraseña incorrecta<br><br>";
                }
                
            }else{
                echo"Contraseña actual incorrecta<br><br>";
            }
        }
        ?>
       <a href="PaginaUsuario.php">Volver a la pagina del usuario</a><br><br>
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    
    </body>
</html>
