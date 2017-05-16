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
         <h1>Lista de Mensajes Enviados</h1>
        <?php
        require_once 'bbdd_list_total_msg.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
       echo"<br>==========================================</br>";
       
        }else{
            echo"No estás autentificado.";
        }
         $mensajes = selectAllMessage();
        
        while($fila = mysqli_fetch_array($mensajes)){
            extract($fila);
            echo"<br>______________________________________________<br>";
            echo"Sender:$sender<br>Receiver:$receiver<br>Date:$date<br>Subject:$subject";
            echo"<br>______________________________________________<br>";
            
        }
       
                    echo"<br></br><a href='adminHome.php'>Volver al menú</a>";
                
       
        ?>
    </body>
</html>
