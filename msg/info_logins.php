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
            <h1>Consulta de las horas de inicio de sesión de un Usuario</h1>
        <?php
      require_once 'bbdd_infolog.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
        
        
               echo' <form action="" method="POST">
        <p>Escoge un usuario:
            
            <select name="usuario">';

            $allUser = selectAllUser();
            while($fila = mysqli_fetch_array($allUser)){
                extract($fila);
                echo"<option value='$name'>$name $surname</option>";
            }
                
            echo'</select>
             </p>
                <input type="submit" name="obtener" value="Filtrar">
            </form>';
        
       
        if(isset($_POST["obtener"])){
            
            $usuario = $_POST["usuario"];
            $FechaHora = selectFechaHora($usuario);
      
            echo "Última sesión del usuario $usuario :    $FechaHora<br></br>";
        }
       

        }else{
            echo"No estás autentificado.";
        }
          $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<a href='adminHome.php'>Volver al menú</a>";
                }
        ?>
    </body>
</html>
