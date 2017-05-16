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
      <h1>Mensajes Enviados</h1>
        <?php
        require_once 'bbdd_enviados.php';
        session_start();
        //Nos aseguramos de que haya un usuario autentificado
        if(isset($_SESSION["user"])){
        // cogemos la variable de sesión y saludamos al usuario
        $username = $_SESSION["user"];
        echo"¡Hola $username!";
       echo"<br>==========================================</br>";
        $date = date('Y-m-d H:i:s');
        $consultarMensaje = consultarMensaje($username);
        $total = totalMensages($username);
        $posicion = 0;
       
        insertarEvent($username, $date);
        
        while($fila = mysqli_fetch_array($consultarMensaje)){
            extract($fila);
            
            echo"Para:$receiver<br>Tema:$subject<br>Data:$date<br></br>";
            
            
        }
        if($posicion>0){
            echo "<a href='consultarMensaje.php?posicion=".($posicion - 5)."><<</a>";
        }
        
         if($posicion + 10 <=$total){
              echo "Mostrando del " . ($posicion + 1) . " al " . ($posicion + 10) . " de $total ";
        }
        else {
        echo "Mostrando del " . ($posicion + 1) . " al $total de $total";
        }
        
        if ($posicion + 10 < $total) {
        echo "<a href='consultarMensaje.php?posicion=" . ($posicion + 10) . "'>>></a>";
}
      
        
        $tipo = getTipoUsuario($username);
                if($tipo == 0){
                    //dirigimos al usuario a su homepage.
                    echo"<br></br><a href='userHome.php'>Volver al menú</a>";
                    
                }else if($tipo == 1){
                    //Dirigimos a la página de administrador
                    echo"<br></br><a href='adminHome.php'>Volver al menú</a>";
                }
                }
        ?>
    </body>
</html>
