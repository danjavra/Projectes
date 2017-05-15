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
        <link href="../estilo/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once '../BBDD/bbddRegistrar.php';
        ?>
        <h1>Registrar</h1>
        <div class="div1">
        <form action="" method="POST">
            <span>Username:</span><input type="text" name="user" required><br><br>
            <span>Password:</span><input style="margin-left:25px"; type="password" name="pass" required><br><br>
            <span>Name:</span><input style="margin-left: 51px;"  type="text" name="nombre" required><br><br>
            <span>Surname:</span><input style="margin-left: 30px" type="text" name="apellido" required><br><br>
           <input type="hidden" value="0"  name="type" required>
            <input type="submit" class="registrar" name="registrar" value="Registrar">
        </form>
            </div>
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
        
    </body>
</html>
