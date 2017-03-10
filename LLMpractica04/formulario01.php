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
        <h1>
        <?php
       $usuario=$_GET['fname'];
       echo"El nombre es: ".$usuario;
       ?>
        </h1>
        <?php
        $mail=$_GET['email'];
        echo "El el mail es: ".$mail;
        ?>
        </br>
        <?php
       $password=$_GET['fpassword'];
       echo"El password es: ".$password;
       ?>
        </br>
        <?php
       
       $conpassword= $_GET['fpassword2'];
       echo"La confirmación del password es: ".$conpassword;
       ?>
        </br>
        <?php
      $transport=$_GET['transport'];
      echo"El transporte mas utilizado es: ".$transport;
        ?>
       
    </body>
</html>
