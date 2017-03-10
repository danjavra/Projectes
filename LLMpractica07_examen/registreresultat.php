<?php
   
       $usuario=$_GET['fname'];
       echo"El nombre es: ".$usuario;
       ?>
</br>
        <?php
   
       $cognom=$_GET['cogn'];
       echo"El cognom es: ".$cognom;
       ?>
</br>
        <?php
        $cumple=$_GET['nacimiento'];
        echo "La data de naixement es: ".$cumple;
        ?>
        </br>
        <?php
       $mail=$_GET['mail'];
       echo"El e-mail es: ".$mail;
       ?>
        </br>
        <?php
       
       $coneixer= $_GET['coneixer'];
       echo"Ens ha conegut per: ".$coneixer;
       ?>
        </br>
        <?php
      $sexo=$_GET['sexo'];
      echo"El sexe del usuari es: ".$sexo;
        ?>
        </br>
       
 <?php
      $tema=$_GET['temes'];
      echo"Els temes que li interessen són: ";
      for($i=0; $i<count($tema);$i++){
      echo $tema[$i]." ";
      }
        ?>