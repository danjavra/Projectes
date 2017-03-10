<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de tu perfil</title>
    </head>
    <body>
        <form action="registro02.php" autocomplete="on" method="get">
             <div style=" margin-left: 470px; margin-right:470px;   border: solid black;">
                 <img style="display:inline-block; border: solid yellow; " src="picotaro.JPG" alt="Registrate!" title="We Want You" height="200px" width="250px"/>
           
             
              <h1 style="display:inline-block; vertical-align: top; padding-left: 50px; padding-top: 60px; ">Alta de tu perfil</h1>
             </div>
            
        
                         <div style="background-color: lightsteelblue; margin-left: 470px; margin-right: 470px; height:250px; padding-top: 20px; padding-left: 20px; color:red;" >
                 
   Usuario:<input required maxlength="10" pattern=".{3,10}"  type="text" name="fname" placeholder="Nombre"> 
   <text style="margin-left: 10px;">Nacimiento:<input  required style="margin-left: 10px" type="date" name="nacimiento" ><br/><br/>
   Blog:<input required  style="margin-left: 19px; " type="url" name="blog" placeholder="Introcudir Blog">
   <text style="margin-left: 10px;">Marca Mobil:<select required name="mobilbrand" >
  <option value=""> </option>
  <option value="Apple">Apple</option>
  <option value="Sony">Sony</option>
  <option value="Samsung">Samsung</option>
  <option value="Huawei">Huawei</option>
</select><br/>
<br />
Numero de hermanos:<input required type="number" name="hermanos" min="0" max="20"><br/><br/>
   Sexo:
   <input required style="margin-left: 20px;" type="radio" name="sexo" value="hombre">hombre<input style="margin-left: 20px;" type="radio" name="sexo" value="mujer">mujer<br/><br/>
   Comida favorita:
   <input   style="margin-left: 20px;" type="checkbox" name="comida[]" value="chocolate">chocolate<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="pan">pan<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="acelgas">acelgas<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="espaguetis">espaguetis<input style="margin-left: 20px;" type="checkbox" name="comida[]" value="lentejas">lentejas<br/><br/>
   <input style="margin-left: 170px; margin-top: 10px;" type="submit" value="Registrate"/>
   <input  type="reset" value="limpia el formulario"><br/>
  
             </div>
    </body>
</html>
