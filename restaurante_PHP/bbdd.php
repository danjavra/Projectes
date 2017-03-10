<?php
/* 
 * Fichero donde englobaremos las funciones
 * que tengan relación con la bbdd.
 */

// Función que conecta con una bbdd
function conectar($database){
    $con = mysqli_connect("localhost","root","",$database)
            or die ("No se ha podido conectar con la BBDD.");
    return $con; 
}

//Función que cierra la conexión con la bbdd
function desconectar ($conexion){
    mysqli_close($conexion);
}

// Función que inserta un alumno en la bbdd
function insertarCocinero($nombre,$edad,$tfno,$sexo,$xper,$spel){
    //conectamos con la bbdd
    $con = conectar("restaurant");
    //preparamos la consulta insert del alumno
    $insert ="insert into cocinero values ('$nombre','$tfno','$sexo','$edad','$xper','$spel')";
    //ejecutamos la consulta
    if (mysqli_query($con,$insert)){
        //si ha ido bien
        echo "Cocinero registrado.<br>";
}else{
    //sino, mostramos error
    echo mysqli_error($con);
}
    //desconectamos de la bbdd
    desconectar($con);
    
    }
    
        
    // Funcion que devuelve la consulta para devolver el listado de alumnos con todos sus datos
    function selectAllCocineros(){
        // Primero conectamos con la BBDD
        $con = conectar("restaurant");
        //Definimos la consulta
        $query ="select*from cocinero";
        //Ejecutamos la consulta, recogiendo el resultado
        $resultado = mysqli_query($con,$query);
        // desconectamos de la bbdd
        desconectar($con);
        // Devolvemos el resultado de la consulta 
        return $resultado;
    }
    
       // Funcion que devuelve la consulta para devolver el listado de alumnos con todos sus datos
    function selectAllCocinerosExp(){
        // Primero conectamos con la BBDD
        $con = conectar("restaurant");
        //Definimos la consulta
        $query ="select*from cocinero where experiencia > 5";
        //Ejecutamos la consulta, recogiendo el resultado
        $resultado = mysqli_query($con,$query);
        // desconectamos de la bbdd
        desconectar($con);
        // Devolvemos el resultado de la consulta 
        return $resultado;
    }
    
           // Funcion que devuelve la consulta para devolver el listado de alumnos con todos sus datos
    function selectAllCocinerosEspentrantes(){
        // Primero conectamos con la BBDD
        $con = conectar("restaurant");
        //Definimos la consulta
        $query ="select*from cocinero where especialidad='entrantes'";
        //Ejecutamos la consulta, recogiendo el resultado
        $resultado = mysqli_query($con,$query);
        // desconectamos de la bbdd
        desconectar($con);
        // Devolvemos el resultado de la consulta 
        return $resultado;
    }
    
              // Funcion que devuelve la consulta para devolver el listado de alumnos con todos sus datos
    function selectAllCocinerosEspplatosprincipales(){
        // Primero conectamos con la BBDD
        $con = conectar("restaurant");
        //Definimos la consulta
        $query ="select*from cocinero where especialidad='platosprincipales'";
        //Ejecutamos la consulta, recogiendo el resultado
        $resultado = mysqli_query($con,$query);
        // desconectamos de la bbdd
        desconectar($con);
        // Devolvemos el resultado de la consulta 
        return $resultado;
    }
    
                  // Funcion que devuelve la consulta para devolver el listado de alumnos con todos sus datos
    function selectAllCocinerosEsppostres(){
        // Primero conectamos con la BBDD
        $con = conectar("restaurant");
        //Definimos la consulta
        $query ="select*from cocinero where especialidad='postres'";
        //Ejecutamos la consulta, recogiendo el resultado
        $resultado = mysqli_query($con,$query);
        // desconectamos de la bbdd
        desconectar($con);
        // Devolvemos el resultado de la consulta 
        return $resultado;
    }