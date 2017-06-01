<!DOCTYPE html>
<!--
 Registro
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h2>REGISTRO</h2>
        <form action="" method="post">
            <p>Nombre de usuario: <input type="text" name="usuario" required></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Edad: <input type="number" name="edad"></p>
            <p><input type="submit" name="reg" value="Registro"</p>
        </form>
        <?php
        if (isset($_POST["reg"])) {
            require_once 'bbdd.php';
            $pass = $_POST["pass"];
            $passcif = password_hash($pass, PASSWORD_DEFAULT);
            $resultado = insertUser($_POST["usuario"], $passcif, $_POST["nombre"], $_POST["edad"]);
            if ($resultado == "ok") {
                 
                echo "<p>Usuario registrado. Ya puedes iniciar sesión.</p>";
            } else {
                echo $msg;
            }
        }
        ?>
        <p><a href="index.php">Pagina principal</a></p>
    </body>
</html>
