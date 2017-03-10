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
function insertarAlumno($nombre,$edad,$ciudad,$tfno,$sexo){
    //conectamos con la bbdd
    $con = conectar("escuela");
    //preparamos la consulta insert del alumno
    $insert ="insert into alumno values ('$nombre','$edad','$ciudad','$tfno','$sexo')";
    //ejecutamos la consulta
    if (mysqli_query($con,$insert)){
        //si ha ido bien
        echo "Alumno dado de alta.<br>";
}else{
    //sino, mostramos error
    echo mysqli_error($con);
}
    //desconectamos de la bbdd
    desconectar($con);
    
    }
    
    //Funcion que modifica los datos de un alumno
    function modificarAlumno($nombre, $edad, $ciudad, $telefono, $sexo) {
        $con =conectar("escuela");
        $update = "update alumno set edad=$edad, ciudad='$ciudad', telefono='$telefono', sexo='$sexo' where nombre ='$nombre'";
        if(mysqli_query($con, $update)) {
            echo "Alumno modificdo";
        } else {
            echo mysqli_error($con);
        }
        desconectar($con);
    }
    
    // Funcion que devuelve la consulta para devolver el listado de alumnos con todos sus datos
    function selectAllAlumnos(){
        // Primero conectamos con la BBDD
        $con = conectar("escuela");
        //Definimos la consulta
        $query ="select*from alumno";
        //Ejecutamos la consulta, recogiendo el resultado
        $resultado = mysqli_query($con,$query);
        // desconectamos de la bbdd
        desconectar($con);
        // Devolvemos el resultado de la consulta 
        return $resultado;
    }
    
    // Función que devuelve los nombres de todos los alumnos
    function selectNombreAlumnos(){
        $con =conectar("escuela");
        $query = "select nombre from alumno";
        $resultado = mysqli_query($con,$query);
        desconectar($con);
        return $resultado;
    }
    
    //Función que devuelve los datos de un alumno
    // cuyo nombre se pasa por parámetro
    function selectAlumnoByNombre($nombre){
        $con = conectar("escuela");
        $query ="select * from alumno where nombre='$nombre'";
        $resultado =mysqli_query($con,$query);
        desconectar($con);
        return $resultado;
    }