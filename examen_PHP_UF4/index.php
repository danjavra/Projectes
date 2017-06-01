<!DOCTYPE html>
<!--
 DAM / DAW M02 UF4 - PHP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a Stucom Games</title>
    </head>
    <body>
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
            if (loginUser($_POST["usuario"], $_POST["pass"])) {
                $_SESSION["user"] = $_POST["usuario"];
                header("Location: user.php");
            } else {
                echo "<p>Usuario o password incorrecto. </p>";
            }
        }
        ?>
        <p><a href="registro.php">Registrarme</a></p>
    </body>
</html>
