<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina del usuario</title>
        
    </head>
    <body>
        <?php
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"Hola $username";
        }else{
            echo"No estás autentificado.";
        }
        ?>
        <br></br>
        <a href="steam.php">Inicio</a>
    </body>
</html>
         