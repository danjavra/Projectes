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
         <ul>
        <?php
        
        $numero = $_GET["numero"];
        
        for ($i=0; $i<=$numero;$i++){
            echo"<li>".$i."</li>"; //<li>0</li>
         // echo'<li>$i</li>'; -->  <li>$i</li>  
        }
        
     
        ?>
      
        </ul>
    </body>
</html>

