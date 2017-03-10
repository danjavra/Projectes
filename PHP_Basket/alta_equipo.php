<?php

if(isset($_POST["enviar"])){
           //Incluimos el fichero de bbdd
        require_once 'bbdd_basket.php';

        //recibimos los datos del POST
        $nameteam = $_POST["name"];
        $city = $_POST["city"];
        $creation = $_POST["creation"];

        // Insertamos alumno en la bbdd
        altaEquipo($nameteam,$city,$creation);
         }else{
             echo'
        <form action="" method="POST">
            Nombre: <input type="text" name="name"><br><br/>
            Ciudad: <input type="text" name="city"><br><br/>
            Creation: <input type="date" name="creation"><br><br/>
            <input type="submit" name="enviar" value="Alta">
        </form>';
        }
        echo '<a class="volver" href="indice.php">Volver al menú</a>';