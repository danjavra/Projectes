<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a NoTeRomas Gym</title>
    </head>
    
    <body>
        <h1>Bienvenido a NoTeRomas Gym</h1>
        <h2>LOGIN</h2>
        <form action="" method="post">
            <p>Usuario: <input type="text" name="usuario" required></p>
            <p>Password: <input type="password" name="pass"></p>
            <p><input type="submit" name="login" value="Acceder"></p>
        </form>
        <?php
        session_start();
        require_once 'bbdd.php';
        if (isset($_POST["login"])) {
            $passwordcif = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $passwordVerify = password_verify($_POST["pass"],$passwordcif);
            
            if (loginUser($_POST["usuario"], $_POST["pass"])) {
                $_SESSION["user"] = $_POST["usuario"];
                header("Location: socio.php");
                
            } else {
                echo "<p>Usuario o password incorrecto. </p>";
            }
        }
        ?>
        <p><a href="registro.php">Registrarme</a></p>
        
        
    </body>
</html>
