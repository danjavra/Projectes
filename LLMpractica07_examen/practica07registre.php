
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="registre.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="left">
        
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
            
        </div>
        <div id="right"></div>
        <div id="content">
            <form action="registreresultat.php" autocomplete="on" method="get">
             <h2>Registre</h2>
      
            <div class="caixa1">
                 <div class="subcaixa1">
            Nom:<input required maxlength="10" pattern=".{3,10}"  type="text" name="fname" placeholder="El teu nom"> 
                 </div>
                 <div class="subcaixa2">
            Cognom:<input required maxlength="20" pattern=".{3,20}"  type="text" name="cogn" placeholder="El teu cognom"> 
                 </div>
            </div>
            <div class="caixa2">
                <div class="subcaixa3">
   Data de neixement:<input  required  type="date" name="nacimiento" >
                </div>
                <div class="subcaixa4">
   E-mail:<input required  type="mail" name="mail" placeholder="Introdueix el e-mail">
                </div>
            </div>
             <div class="caixa3">  
                 Sexe:<br><br>
   <input required style="margin-left: 20px;" type="radio" name="sexo" value="home">Home<input style="margin-left: 20px;" type="radio" name="sexo" value="dona">Dona<input required style="margin-left: 20px;" type="radio" name="sexo" value="altres">altres<br/><br/>
   
   
</div>   
             <div class="caixa4">
                 <text style="margin-left: 10px;">Com ens ha conegut?:<br><br><select required name="coneixer" >
  <option value=""> </option>
  <option value="foros">Foros</option>
  <option value="revistes">Revistes</option>
  <option value="amics">Amics</option>
  <option value="buscadors">Buscadors</option>
</select><br/>
<br />
  </div>
             <div class="caixa5">
                 Temes que t'interessen:<br><br>
   <input   style="margin-left: 20px;" type="checkbox" name="temes[]" value="tecnologia">tecnologia<input style="margin-left: 20px;" type="checkbox" name="temes[]" value="musica">música<input style="margin-left: 20px;" type="checkbox" name="temes[]" value="fisica">física<input style="margin-left: 20px;" type="checkbox" name="temes[]" value="literatura">literatura<br/><br/>
             </div>
   <div class="caixa6">
   <input type="submit" value="Registra"/>
   <input  type="reset" value="neteja el formulari"><br/>
  </div>
   </form>
           
 <?php
        
            
        ?>
    </div>
       
        <div id="footer">
            <div class="linksfooter1"><a href="practica07.php">link pag 1</div><div class="linksfooter2"><a href="practica07registre.php">link pag 2</div><div class="linksfooter3"><a href="registreresultat.php">link pag 3</div>
        </div>
        
       
    </body>
</html>
