
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="practica07.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="left">
            <div class="linksleft"><a href="#article1">Link artículo 1</a></div>
            <div class="linksleft"><a href="#article2">Link artículo 2</a></div>
        </div>
        <div id="top">
            <div class="topleft">
                <div class="linkstopleft"><a href="practica07.php">link pag 1</a></div>
                <div class="linkstopleft"><a href="practica07registre.php">link pag 2</a></div>
            </div>
            <div class="topcenter"></div>
              <div class="topright">
                <div class="linkstopright"><a href="https://www.fcbarcelona.es/entradas/cosas-para-hacer-en-barcelona?gclid=CL2yr_PtstECFecK0wodCvYBeQ">Web oficial FC Barcelona</a></div>
                <div class="linkstopright"><a href="http://www.leomessi.com/">Web Oficial Leo Messi</a></div>
            </div>
            
            <div></div>
            <div></div>
        </div>
        <div id="right"></div>
        <div id="content">
           
            <article id="article1" name="article1">
            <h2>Lionel Messi</h2>
            <div class="image1"></div>
            <p class="paragraf">
            Lionel Andrés Messi, també conegut com a Leo Messi (Rosario, Argentina, 24 de juny de 1987), és un futbolista argentí espanyol que juga com a davanter al FC Barcelona, del qual és el segon capità i a la selecció de l'Argentina, de la qual és el capità.
Es va formar a les categories inferiors de Newell's Old Boys, i més tard a la Masia del Barça, on va arribar amb 13 anys. Va debutar amb el primer equip en un partit oficial la temporada 2004-2005 i va començar a destacar la temporada següent.
Molts mitjans de comunicació l'han qualificat de successor de Diego Armando Maradona, i fins i tot ell mateix l'ha designat successor seu. Amb el pas del temps i amb els mèrits assolits, molts consideren que ja ha superat Maradona. Els anys 2009, 2010, 2011, 2012 i 2015 va rebre la Pilota d'Or, i va esdevenir així el primer jugador format al planter del Barça a guanyar aquest guardó i a assolir-lo quatre anys seguits (2009, 2010, 2011 i 2012). Des del 2014 és el màxim golejador de la història de la lliga espanyola de futbol i també de la Lliga de Campions de la UEFA, i des de 2016, el màxim assistent de la lliga espanyola. Des del desembre de 2015, quan va guanyar el Mundialet de 2015 és, conjuntament amb Andrés Iniesta, el jugador amb més títols guanyats amb la samarreta del Barça, amb 26.
              
            </p>
            <br>
            <aside class="linksart"><a href="https://ca.wikipedia.org/wiki/Lionel_Andrés_Messi">Biografía completa a Viquipèdia</a></aside>
          
        </article>
            
            <article id="article2" name="article2">
        <h2>Balon d'Or </h2>
         <div class="image2"></div>
         <div class="info">
         <p id="descrip">
             Lionel Messi és l'únic jugador que ha guanyat el premi en quatre ocasions, sent a més de manera consecutiva (2009, 2010, 2011 i 2012; i ocupant un lloc al podi de manera permanent des de 2009); i quatre jugadors més van ser capaços de guanyar-lo en 3 ocasions: Johan Cruyff, Michel Platini, Marco van Basten i Cristiano Ronaldo.
Els jugadors neerlandesos i alemanys, amb 7 trofeus, han estat els que han guanyat més títols; i el club amb més guardons és el Futbol Club Barcelona, amb 10 títols.
          </p>
       
        <div class="taula">
            <div class="centrat">
            Màxims Guanyadors de la Pilota d'Or<table class="guanyadors" border="1px">
            <tr class="fila1">
                <td>Jugador</td><td>Equip Actual</td><td>Nº de Pilotes d'Or</td>
            </tr>
            <tr class="fila2">
                <td>Lionel Messi</td>
                <td>FC Barcelona</td>
                <td>5</td>
            </tr>
                   <tr class="fila3">
                <td>Cristiano Ronaldo</td>
                <td>Real Madrid</td>
                <td>4</td>
            </tr>
        </table>
        </div>
             </div>
         </div>
            <div class="linksart">
                
                  <a href="https://ca.wikipedia.org/wiki/Pilota_d%27Or">Pilota d'Or a la Viquipèdia</a>   
                 
                </div>
       
            </article>
             <div id="newformulario">
                 <form action="newform.php" autocomplete="on" method="get">
                     <h3>Nuevo Formulario</h3>
                     <div class="box1">
                     <div class="caixanew1">
                         <div class="image3"></div>
                     </div>
                     <div class="caixanew2">
                         <div class="cargarfoto">Cargar foto<a href="Carga Avatar"></a></div>
                     </div>
                         </div>
                     <div class="box2">
                     <div class="caixanew3">
                          E-mail:<br><input required maxlength="20" pattern=".{6,20}" type="mail" name="mail" placeholder="Introdueix el e-mail">
                     </div>
                     <div class="caixanew4">
                          Raza:<br><br>
   <input required style="margin-left: 20px;" type="radio" name="raza" value="humano">Humano<input style="margin-left: 20px;" type="radio" name="raza" value="nomo">Nomo<input required style="margin-left: 20px;" type="radio" name="raza" value="elfo">Elfo<br/><br/>
                     </div>
                     <div class="caixanew5">
                          Comida favorita:<br><br>
   <input   style="margin-left: 20px;" type="checkbox" name="comida[]" value="judias">judias<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="habas">habas<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="espinacas">espinacas<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="maiz">maiz<br/><br/>
                     </div>
                         </div>
                      <div class="caixanew6">
                         <input type="submit" value="REGISTRATE"/>
                     </div>
             </div>
    </div>
       
        <div id="footer">
             <div class="linksfooter1"><a href="practica07.php">link pag 1</div><div class="linksfooter2"><a href="practica07registre.php">link pag 2</div><div class="linksfooter3"><a href="registreresultat.php">link pag 3</div>
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
