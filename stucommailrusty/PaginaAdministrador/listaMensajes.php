<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista mensajes</title>
    </head>
    <style>
        *{
            font-family: cursive;
        }
        
         .div1{
             background-color: lightgray;
           margin-top: 20px;
            width: 15%;
            height: 100px;
        }
        
        .body{
                margin-left: 23px;
          
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
        <h1>Lista de todos los mensajes</h1>
        
        <?php
        require_once '../BBDD/bbddListaMensajes.php';
        
        $mensajes = selectAllMessage();
        
        while($fila = mysqli_fetch_array($mensajes)){
            extract($fila);
            echo"<div class='div1'>";
            echo"Sender:$sender<br>Receiver:$receiver<br>Date:$date<br>Subject:$subject";
            echo"</div>";
            
        }
        ?>
        
        <br><br><a href="PaginaAdministrador.php">Volver a la pagina del administrador</a>
        
        <br><br><a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
