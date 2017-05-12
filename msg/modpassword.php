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
         <h1>Modificar Password</h1>
        <?php
         require_once 'bbdd_modpass.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        
        
        echo'<form action="modpassword.php" method="post">
        <p>Password Actual: <input type="password" name="pass" required></p>
        <p>Password Nuevo: <input type="password" name="npass" maxlength="10" required></p>
        <p>Confirmar Password: <input type="password" name="cpass" maxlength="10" required></p>        
        <input type="submit" value="Modificar" name="Modificar">
        </form>';
  
         if(isset($_POST['Modificar'])){
       $username = $_SESSION["user"];
       $password = PasswordUsername($username);
       $actualpass = $_POST['pass'];
       $nuevopass = $_POST['npass'];
       $confirmar = $_POST['cpass'];    
        
            if($password==$actualpass && $nuevopass==$confirmar){
                modificarPassword($nuevopass,$username);
            }
            if($password!=$actualpass){
              echo"Contraseña incorrecta<br>";  
            }
            
            if($nuevopass!=$confirmar){
                echo"Error: La confirmación de la contraseña y la nueva contraseña són diferentes.<br>";
            }
         
        }

        }else{
            echo"No estás autentificado.";
        }
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<br></br><a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<br></br><a href='adminHome.php'>Volver al menú</a>";
                }
                
        ?>
    </body>
</html>
