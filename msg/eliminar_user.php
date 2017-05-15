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
            <h1>Eliminar un Usuario</h1>
        <?php
       require_once 'bbdd_eliminar.php';
       
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
       
        
        $usuario = $_SESSION["user"];
         echo'<form action="" method="POST">
        <p>Escoge un usuario:
        <select name="usuario">';
        $Usuarios = elegirUsuario($usuario);
        while($fila= mysqli_fetch_array($Usuarios)){
            extract($fila);
       
            echo"<option value='$username'>$username</option>";         
        } 
      echo'</select></p>
        
        <br><input type="submit" name="eliminar" Value="Eliminar">
        </form></br>';
        
        if(isset($_POST["eliminar"])){
            $username = $_POST["usuario"];  
            eliminarUsuario($username);
        }
       
      
        }else{
            echo"No estás autentificado.";
        }
        
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<a href='adminHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<a href='adminHome.php'>Volver al menú</a>";
                }
        ?>
    </body>
</html>
