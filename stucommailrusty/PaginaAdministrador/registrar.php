<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
    </head>
    
    <style>
        *{
            font-family: cursive;
        }
         h1{
            text-align: center;
        }
        
        .logout {
    text-decoration: none;
    background-color: red;
    color: white;
    padding: 0.5em 3em;
    display: table;
    margin: auto;

        }
    </style>
    <body>
        <?php
        require_once '../BBDD/bbddRegistrar.php';
        ?>
        <h1>Registrar</h1>
        <form action="" method="POST">
            Username:<input type="text" name="user" required><br><br>
            Password:<input type="password" name="pass" required><br><br>
            Name:<input type="text" name="nombre" required><br><br>
            Surname:<input type="text" name="apellido" required><br><br>
            Type:<input type="number" min="0" max="1"  name="type" required><br><br>
            <input type="submit" name="registrar" value="Registrar">
        </form>
        <?php 
            if(isset($_POST["registrar"])){
               $username = $_POST["user"];
               $password = $_POST["pass"];
               $name = $_POST["nombre"];
               $surname = $_POST["apellido"];
               $type = $_POST["type"];
               
               $existeUsuario = existeUsuario($username);
               if($existeUsuario){
                   echo"Ya existe esa usuario";
               }
               else{
               $passcif = password_hash($password, PASSWORD_DEFAULT);
               Registrar($username,$passcif,$name,$surname,$type);
               }
               
            }
        ?>
        
        <br><br><a href="PaginaAdministrador.php">Volver a la pagina del administrador</a>
        
        <br><br><a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
