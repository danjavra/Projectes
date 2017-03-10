<?php
   
       $usuario=$_GET['fname'];
       echo"El nombre es: ".$usuario;
       ?>
</br>
        </h1>
        <?php
        $cumple=$_GET['nacimiento'];
        echo "La fecha de nacimiento es: ".$cumple;
        ?>
        </br>
        <?php
       $blog=$_GET['blog'];
       echo"El blog es: ".$blog;
       ?>
        </br>
        <?php
       
       $mobil= $_GET['mobilbrand'];
       echo"La marca del mobil es: ".$mobil;
       ?>
        </br>
        <?php
      $sexo=$_GET['sexo'];
      echo"El sexo del usuario es: ".$sexo;
        ?>
        </br>
        <?php
        $hermanos=$_GET['hermanos'];
        echo"El numero de hermanos és: ".$hermanos;
        ?>
        <br/>
 <?php
      $comida=$_GET['comida'];
      echo"Su comida favorita es: ";
      for($i=0; $i<count($comida);$i++){
      echo $comida[$i]." ";
      }
        ?>