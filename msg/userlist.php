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
           <h1>Lista de Usuarios Registrados</h1>
        <?php
        require_once 'bbdd_userlist.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        echo"<br>===================================</br>";
         echo' <table>
            <tr>
                <th>| Nombre de Usuario | </th>
                <th> | Nombre | </th>
                <th> | Apellido | </th>
            </tr>';
         $listadoUsuarios = listadoUsuario();
        while($fila = mysqli_fetch_array($listadoUsuarios)){
            extract($fila);
            echo"<tr><td>$username</td><td>$name</td><td>$surname</td></tr>";
        }
        echo'</table></br>';
        
         
                    echo"<a href='adminHome.php'>Volver al menú</a>";
                
        
        }else{
            echo"No estás autentificado.";
        }
       
        ?>
    </body>
</html>
