<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 12 Sintesi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="slick-1.6.0/slick/slick.min.js" type="text/javascript"></script>
        <link href="slick-1.6.0/slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="slick-1.6.0/slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <script src="slickpractica12.js" type="text/javascript"></script>
        <link href="practica12css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
     <div id="main">
         <h1>Monster Wars</h1>
         <div id="slider1" class="your-class">
            
             <div class="cont"><img src="Ifrit.jpg" alt=""/></div>
             <div  class="cont"><img src="titan.jpg" alt=""/></div>
             <div  class="cont"><img src="godzilla.jpg" alt=""/></div>
             <div  class="cont"><img src="kong.jpg" alt=""/></div>
   
         </div>
         <div class="player1" id="player1">
                <p>Player1</p>
            </div>
            <div class="player2" id="player2">
                <p>Player2</p>
            </div>
            <form action="resultado.php" method="POST" id="formulario">
                <div class="FormularioPlayer1">
                    <span class="text1">Direccion:</span><input required class="Direccion" name="direccion1" id="direccion" placeholder="Direccion" ><br>
                    <span class="text2">(entre 5 y 20 letras)</span><br>
                    <span class="text1">edad:<input required class="edad" id="edad" name="edad1" ></span><br>
                    <span class="text2">(entre 18 y 99 años)</span><br>
                    <span class="text1">Personaje:
                        <select required id="personaje1" class="personaje" name="personaje1" >
                            <option></option>
                            <option value="Ifrit">Ifrit</option>
                            <option value="titan">Titan</option>
                            <option value="godzilla">Godzilla</option>
                            <option value="kong">Kong</option>
                        </select>
                    </span>
                    <div class="Ply1Heroes">
                    <img src="" id="imagenselecionado1">
                    </div>
                </div>
                
                <div class="FormularioPlayer2">
                    <span class="text1">Direccion:</span><input required class="Direccion" name="direccion2" id="direccion" placeholder="Direccion"><br>
                    <span class="text2">(entre 5 y 20 letras)</span><br>
                    <span class="text1">edad:<input required class="edad" id="edad" name="edad2"></span><br>
                    <span class="text2">(entre 18 y 99 años)</span><br>
                    <span class="text1">Personaje:
                        <select required id="personaje2" name="personaje2"  class="personaje" >
                            <option></option>
                            <option value="Ifrit">Ifrit</option>
                            <option value="titan">Titan</option>
                            <option value="godzilla">Godzilla</option>
                            <option value="kong">Kong</option>
                        </select>
                    </span>

                    <div class="Ply2Heroes">
                       <img src="" id="imagenselecionado2">
                    </div>
                
                 </div>
                <input type="submit" name="Fight" value="Fight" class="fight">
            </form>
     </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
