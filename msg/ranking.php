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
         <h1>Mostrar el Ranking de los Usuarios</h1>
        <?php
        require_once 'bbdd_ranking.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
         echo"<br>==========================================</br>";
       
        
        $rankingUsuario = rankingUsuario();
        while($fila = mysqli_fetch_array($rankingUsuario)){
            extract($fila);
            echo"<br><tr>Usuario:<td> $sender</td> ,mensajes enviados <td> $mensajes_enviados</td></tr><br>";
        }
        
   
        }else{
            echo"No estás autentificado.";
        }
                    echo"<br></br><a href='adminHome.php'>Volver al menú</a>";
                
        ?>
    </body>
</html>
