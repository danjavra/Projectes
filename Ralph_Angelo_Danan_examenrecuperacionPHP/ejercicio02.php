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
           <h1>Introduzca la asignatura y la nota correspondiente del alumno.</h1>
         <form action="calculoex02.php" formtarget="result" autocomplete="on" method="POST">
             Asignatura 1:<input required maxlength="10" pattern=".{3,10}"  type="text" name="asig1" placeholder="Nombre de la asignatura1">
             Nota 1:<input required type="number" name="nota1" min="0" max="10"><br>
             Asignatura 2:<input required maxlength="10" pattern=".{3,10}"  type="text" name="asig2" placeholder="Nombre de la asignatura2">
             Nota 2:<input required type="number" name="nota2" min="0" max="10"><br>
             Asignatura 3:<input required maxlength="10" pattern=".{3,10}"  type="text" name="asig3" placeholder="Nombre de la asignatura3">
             Nota 3:<input required type="number" name="nota3" min="0" max="10"><br>
             Asignatura 4:<input required maxlength="10" pattern=".{3,10}"  type="text" name="asig4" placeholder="Nombre de la asignatura4">
             Nota 4:<input required type="number" name="nota4" min="0" max="10"><br><br>
             <input type="submit" value="Registrar"/>
      
    </body>
</html>
