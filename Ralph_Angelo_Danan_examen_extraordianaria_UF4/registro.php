<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h2>REGISTRO</h2>
        <form action="" method="post">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Edad: <input type="number" name="edad"></p>
            <!--Tipo de Usuario (0 = "User", 1 = "Admin") añadida manualmente a la bbdd--> <p><input type="hidden" name="tipo" value="0"></p> 
            <p><input type="submit" name="reg" value="Registro"</p>
        </form>
        <?php
      
        if (isset($_POST["reg"])) {
            require_once 'bbdd.php';
            $passcif = password_hash( $_POST["pass"], PASSWORD_DEFAULT);
            $resultado = insertUser($_POST["nombre"],$passcif, $_POST["edad"],$_POST["tipo"]);
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
