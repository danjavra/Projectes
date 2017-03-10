<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reproductor</title>
    </head>
    <body>
         <form action="audio.php" formtarget="result" autocomplete="on" method="get">
            <div style="background-color: bisque ; margin-left: 550px; margin-right: 550px; height:250px;   color:brown; text-align: center; border: solid yellow;" >
                <h1>Playlist</h1>
                <div>  
                     <audio controls autoplay>
      <source src="<?php  $musica = $_GET["musica"];  if(isset($_GET["musica"])){echo $musica;}?>" type="audio/mpeg">
    </audio> <br/>
                    <div>
                    Canciones:<select name="musica">
      <option id="[]" value=""></option>
      <option id="[]" value="PPAP.mp3">Pico Taro - PPAP</option>
      <option id="[]" value="Joey Montana - Picky.mp3">Joey Montana - Picky</option>
      <option id="[]" value="Ylvis - The Fox.mp3">Ylvis - The fox</option>
    </select>
                    <input style=" margin-top: 10px; width:80px ; height:30px; font-size: 12px;" type="submit" name="playsong" value="Play Song"/>
                   </div> <br/><br/><br/>
                  
   <input style="margin-left: 20px;" type="radio" name="random" value="random">Random
   <input style="margin-left: 20px;" type="radio" name="norandom" value="norandom">No Random
 <!--  Pensava que seria així pero no funciona
   <?php
$aleat=0;
$musica=$_GET['random'];

$aleat = rand(1,3); 
$aleat = floor($aleat); 

switch($aleat){
case 1:$musica="PPAP.mp3";break;
case 2:$musica="Joey Montana - Picky.mp3";break;
case 3:$musica="Ylvis - The Fox.mp3";break;


}?>
 -->
   <br/><br/>
      
    </body>
</html>
