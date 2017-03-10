<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz Cine</title>
    </head>
    <body>
        <h1>Quiz de cine</h1>
        <form method="POST" action="">
             ¿Quién dirigió la película "Terminator 2" ?:
   <input required style="margin-left: 20px;" type="radio" name="director" value="martin">Martin Scorsese<input style="margin-left: 20px;" type="radio" name="director" value="james">James Cameron<input style="margin-left: 20px;" type="radio" name="director" value="steven">Steven Spielberg<input style="margin-left: 20px;" type="radio" name="director" value="quentin">Quentin Tarantino<br/>
        <?php
        if(isset ($_POST['director'])){
            
        }
        ?>
    </body>
</html>
