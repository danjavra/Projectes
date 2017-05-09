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
    <body>
           <h1>Lista de Usuarios Registrados</h1>
        <?php
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        }else{
            echo"No estás autentificado.";
        }
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<a href='adminHome.php'>Volver al menú</a>";
                }
        ?>
    </body>
</html>
