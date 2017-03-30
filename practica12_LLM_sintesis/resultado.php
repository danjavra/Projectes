<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado de la batalla</title>
        <link href="resultado.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA65Ze76pHoK0uwg7PjB0zMXrJ3nOtDR3Q&region=GB"></script>
        <script src="gmap3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div style=" height: 80vh; width: 55%; background-color:black; margin-left:25%; border:dashed 3px yellow; ">
        <h1 style="text-align:center; color:crimson;">Localización del ganador y su musica</h1>
        <?php
        $winner = rand(1,2);
            $direccion1 = $_POST['direccion2'];
            $edad1= $_POST['edad2'];
            $personaje1 = $_POST['personaje2'];
            $direccion2 = $_POST['direccion1'];
            $edad2 = $_POST['edad1'];
            $personaje2 = $_POST['personaje1'];
            
            $edad = "";
            $direccion = "";
            $mostrardireccion="";
            $personaje = "";
            $personajeimagen = "";
            
            if($winner==1){
             $direccion = $direccion1;
             $edad = $edad1;
             $mostrardireccion = $direccion1;
             $personaje = $personaje1;
             $personajeimagen = "<img style='height:300px;width:70%;' src='$personaje1.jpg'>";
             
             echo"<audio style='display:none' controls autoplay loop preload='auto'>";
            echo"<source src='musica/MortalKombat.mp3' type='audio/mpeg'> </audio>";   
               
           
             
            }
            else if($winner==2){
             $direccion = $direccion2;
             $mostrardireccion = $direccion2;
             $edad = $edad2;
              $personaje = $personaje2;
           $personajeimagen = "<img style='height:300px;width:70%;' src='$personaje2.jpg'>";
            
           echo"<audio style='display:none' controls autoplay loop preload='auto'>";
            echo"<source src='musica/AllIDoIsWin.mp3' type='audio/mpeg'> </audio>";   
               
           
            }
          

        ?>
        

        <div id="mapa2" style="margin:auto;width: 800px; height:500px;"></div>
       <script>

            $(document).ready(init);
            function init() {
                $('#mapa2')
                        .gmap3({
                           zoom:4
                        })
                        .infowindow({content: "contentString"})
                        .marker([
                           
                            {address: "<?php echo $mostrardireccion ?>", data: "<h3>Datos del ganador</h3>\n\
                                <?php echo"Edad: $edad<br>Direccion: $direccion<br>Personaje: $personaje<br>$personajeimagen" ?><div>", icon: "http://maps.google.com/mapfiles/marker_grey.png"}
                        ])
                        .on('click', function (marker) {  //Al clicar obrim una finestra sobre la marca i hi insertem el data de la marca
                            marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
                            var map = this.get(0); //this.get(0) retorna la primera propietat vinculada-> gmap3
                            var infowindow = this.get(1); //this.get(1) retorna la segona propietat vinculada -> infowindow
                            infowindow.setContent(marker.data);     //dins la finestra mostrem el atribut data de la marca
                            infowindow.open(map, marker);
                        })
                      
                        .fit();
            }


        </script>
        </div>
    </body>
</html>
