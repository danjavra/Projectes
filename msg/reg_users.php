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
           <h1>Registrar Usuarios</h1>
  
      
        <?php
           require_once 'bbdd_reg_users.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        
              echo'<form action="" method="POST">
     <p>Nombre de usuario: <input required type="text" name="username" maxlength="20"></p>
     <p>Password: <input required type="password" name="pass" maxlength="255"></p>
     <p>Confirmar Password: <input required type="password" name="cpass" maxlength="255"></p>
     <p>Nombre: <input required type="text" name="name" maxlength="20"></p>
     <p>Apellido: <input required type="text" name="surname" maxlength="20"></p>
     <p>Tipo de Usuario (0 = "User", 1 = "Admin"): <input type="number" name="tipo" min="0" max="1"></p>
            <input type="submit" value="registrarse" name="alta">
        </form>';
        
         //Si han pulsado el botón registramos el usuario
        if(isset($_POST["alta"])){
            //recogemos el nombre de usuario
            $nusuario = $_POST["username"];
            
            //Comprobamos si existe
            if(existeUsuario($nusuario) == true){
                echo"<p>Ya existe ese nombre de usuario en la bbdd</p>";
            }else {
                //Recogemos el resto de datos
                $pass = $_POST["pass"];
                $cpass = $_POST["cpass"];
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $type = $_POST["tipo"];
                
                if($pass==$cpass){
                  $passcif = password_hash($pass, PASSWORD_DEFAULT);
                //Registramos el usuario en la bbdd
                insertUser($nusuario, $passcif, $name, $surname, $type, $cpass);
                session_start();
                $_SESSION["username"]=$nusuario;
                header("Location: login.php ");
                }if($pass!=$cpass){
                echo"Error: La confirmación de la contraseña y la contraseña són diferentes.<br>";
            }
            
                }
        }
        
        
        
        
        
        
        
        
        
        }else{
            echo"No estás autentificado.";
        }
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<br></br><a href='adminHome.php'>Volver al menú</a>";
                }
        ?>
    </body>
</html>
