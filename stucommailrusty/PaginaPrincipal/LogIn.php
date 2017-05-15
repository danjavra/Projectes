<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link href="../estilo/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Log In</h1>
        <div class="div1" style="height: 400px !important">
        <form action="" method="POST">
            <span>Username:</span><input type="text" name="user"><br><br>
            <span>Password:</span><input type="password" name="pass" style="margin-left: 25px;"><br><br>
            <input type="submit" value="Log In" name="login" class="login">
        </form>
        </div>
            
        <?php
        

        if(isset($_POST["login"])){
            require_once '../BBDD/bbddLogIn.php';
            $username = $_POST["user"];
            $password = $_POST["pass"];
            $passwordcif = password_hash($password,PASSWORD_DEFAULT);
            $passwordVerify =password_verify($password, $passwordcif);
            $date = date('Y-m-d H:i:s');

            $type = selectTypeUser($username);
            
           if (LogIn($username,$password)){
               session_start();
               $_SESSION["user"] = $username;
               $_SESSION["type"] = $type;
               $_SESSION["pass"] = $password;
               registrarEvento($username,$date,$type);
               
               if($type==0){
                  
                   registrarEvento($username,$date,$type);
                    header("Location: ../PaginaUsuario/PaginaUsuario.php");
               }
               else if($type==1){
                   header("Location: ../PaginaAdministrador/PaginaAdministrador.php");
               }
               
            }else{
               echo"Error: No esta correcta!";
            }
             
        }
        
        
      
        ?>
    </body>
</html>
