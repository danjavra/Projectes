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
        require_once 'bbdd_msg.php';
        // Función que inserta un usuario de tipo usuario

function insertUser($nusuario, $passcif, $name, $surname, $type, $cpass){
    $conexion = conectar("msg");
    $insert = "insert into user values"
            ."('$nusuario','$passcif', '$name', '$surname', '$type')";
    if (mysqli_query($conexion, $insert)){
        echo "<p>Usuario dado de alta</p>";
    }else{
        echo mysqli_error($conexion);
    }
    desconectar($conexion);
}

// Función que devuelve true si existe un usuario con el nombre de usuario que se le pasa y false si no existe
function existeUsuario($nusuario){
    $conexion = conectar("msg");
    $consulta = "select * from user where username='$nusuario';";
    //Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
    $contador =mysqli_num_rows($resultado);
    desconectar($conexion);
    //Si devueve 1 es que ya existe un usuario con ese nombre de usuario, si devuelve 0 no existe
    if($contador == 0){
        return false;
    }else{
        return true;
    }
}


        ?>
    </body>
</html>
