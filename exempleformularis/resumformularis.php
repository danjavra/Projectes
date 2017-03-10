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
        <?php
        $nom="";
        $edat="";
        if(isset($_POST["nom"])){
        $nom=$_POST["nom"];
        $edat=$_POST["edat"];
        
        }
        ?>
        
        <form action="resumformularis.php" method="post">
            Nom <input type="text" name="nom" placeholder="introduce el nombre" value="<?php echo $nom ?>"/> <br/>
            <select name="edat">
                <option value="men18"<?php if($edat=="men18"){echo"selected";} ?> >-18</option>
                <option value="igu18" <?php if($edat=="igu18"){echo"selected";} ?>>=18</option>
                <option value="maj18"<?php if($edat=="maj18"){echo"selected";} ?>>+18</option>
            </select>
            <?php
            if (isset($_POST["op"])){
            if($_POST["op"]=="mostrar"){
                echo "<br/> edad:".$edat;?> <br/> <?php
                echo " nom:".$nom ."<br/>"; 
            }
            }
            ?>
            <input type="submit" value="actualizar" name="op"/>
            <input type="submit" value="mostrar" name="op"/>
            
        </form>
        
    </body>
    <!-- si es fa amb method="get" les dades desapareixen en el link i si es vol ocultar tota la informacio del formulari i que tingui un link mes simplificat utilitzarem POST amb els registres -->
</html>

