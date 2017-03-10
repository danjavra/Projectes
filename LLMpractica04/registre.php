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
       $nombre=$_GET['fname'];
       echo"El nombre es:".$nombre;
       ?>
        </h1>
        <?php
       $password=$_GET['fpassword'];
       echo "<h2>El password es:<h2>".$password;
       
       $numero= $_GET['fnumero'];
       $numero = intval($numero);
       while($numero>0){
           //$numero--;
           $numero=$numero-1;
           
      echo"<article>".$numero."</article>";
       }
        ?>
       
    </body>
</html>
