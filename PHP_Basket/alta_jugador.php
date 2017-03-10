<?php

if(isset($_POST["enviar"])){

        require_once 'bbdd_basket.php';

        $nameplayer = $_POST["nombre"];
        $birth = $_POST["nasc"];
        $nbaskets = $_POST["canastas"];
        $nassists = $_POST["assis"];
        $nrebounds = $_POST["rebot"];
        $position = $_POST["posi"];
        $team = $_POST["team"];

        altaJugador($nameplayer,$birth,$nbaskets,$nassists,$nrebounds,$position,$team);
         }else{
             echo'
        <form action="" method="POST">
            Nombre: <input type="text" name="nombre"><br><br/>
            Día de nacimiento: <input type="date" name="nasc"><br><br/>
            Nº de canastas: <input type="number" name="canastas"><br><br/>
            Nº de asistencias: <input type="number" name="assis"><br><br/>
            Nº de rebotes: <input type="number" name="rebot"><br><br/>
            Posicion: <select required name="posi" >
  <option value="Base">Base</option>
  <option value="Escolta">Escolta</option>
  <option value="Alero">Alero</option>
  <option value="Ala-Pivot">Ala-Pivot</option>
  <option value="Pivot">Pivot</option>
</select><br/><br/>';
         echo' Equipo: <select name="team">';
         require_once 'bbdd_basket.php';
         $equipo = selectEquipo();
         while ($fila = mysqli_fetch_array($equipo)) {
    extract($fila);
    echo "<option value = $name>$name</option>";
}
             echo'
               </select><br><br/>
            <input type="submit" name="enviar" value="Alta">
        </form>';
        }
        echo '<a class="volver" href="indice.php">Volver al menú</a>';