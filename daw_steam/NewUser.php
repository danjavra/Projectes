<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Usuario</title>
    </head>
    <body>
        
        <form action="" method="POST">
            <p>Nombre de usuario: <input type="text" name="nombre"></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Email: <input type="email" name="email"></p>
            <input type="submit" value="registrarse" name="alta">
        </form>
        <?php
        require_once 'bbdd_steam.php';
        //Si han pulsado el botón registramos el usuario
        if(isset($_POST["alta"])){
            //recogemos el nombre de usuario
            $nusuario = $_POST["nombre"];
            //Comprobamos si existe
            if(existeUsuario($nusuario) == true){
                echo"<p>Ya existe ese nombre de usuario en la bbdd</p>";
            }else{
                //Recogemos el resto de datos
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                //Registramos el usuario en la bbdd
                insertUser($nusuario, $pass, $email);
            }
        }
        ?>
        <p><a href="steam.php">Inicio</p>
    </body>

