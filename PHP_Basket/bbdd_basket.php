<?php

function conectar($database){
    $con = mysqli_connect("localhost","root","",$database)
            or die ("No se ha podido conectar con la BBDD.");
    return $con; 
}

function desconectar ($conexion){
    mysqli_close($conexion);
}

function altaEquipo($nameteam,$city,$creation){
    $con = conectar("basket");
    $insert ="insert into team values ('$nameteam','$city','$creation')";
    if (mysqli_query($con,$insert)){
        echo "Equipo dado de alta.<br>";
}else{
     echo mysqli_error($con);
}
    desconectar($con); 
    }
   
function altaJugador($nameplayer,$birth,$nbaskets,$nassists,$nrebounds,$position,$team){
    $con = conectar("basket");
    $insert ="insert into player values ('$nameplayer','$birth','$nbaskets','$nassists','$nrebounds','$position','$team')";
    if (mysqli_query($con,$insert)){
        echo "Jugador dado de alta.<br>";
}else{
    
    echo mysqli_error($con);
}
    desconectar($con);   
    }
    
    function selectEquipo(){
        $con = conectar("basket");
        $query = "select name from team";
        $resultado = mysqli_query($con,$query);
        desconectar($con);
        return $resultado;
    }
    
    function selectNombreJugadores(){
        $con =conectar("basket");
        $query = "select name from player";
        $resultado = mysqli_query($con,$query);
        desconectar($con);
        return $resultado;
    }
    
     function modificarEstadisticas($name,$nbaskets, $nassists, $nrebounds) {
        $con =conectar("basket");
        $update = "update player set nbaskets='$nbaskets', nassists='$nassists', nrebounds='$nrebounds' where name ='$name'";
        if(mysqli_query($con, $update)) {
            echo "Jugador modificado";
        } else {
            echo mysqli_error($con);
        }
        desconectar($con);
    }
    
    function selectJugadorByNombre($name){
        $con =conectar("basket");
        $query = "select * from player where name ='$name'";
        $resultado = mysqli_query($con,$query);
        desconectar($con);
        return $resultado;
    
    }
    
    function modificarEquipo($name2, $name){
	$conexion = conectar("basket");
	$query = "update player set team = '$name' where name = '$name2'";
	if(mysqli_query($conexion, $query)){
		echo "<script>
			alert('Equipo de jugador modificado');
			window.history.go(-3);
			</script>";
	}
	else{
		echo mysqli_error($conexion);
	}
	desconectar($conexion);
}
    function selectEquipo2(){
            $conexion = conectar("basket");
            $query = "select name from team";
            $resultado = mysqli_query($conexion,$query);
            desconectar($conexion);
            return $resultado;
    }

        function borrarJugador($name){
                $conexion = conectar("basket");
                $query = "delete from player where name = '$name'";
                if(mysqli_query($conexion, $query)){
                        echo "<script>
                                alert('Jugador eliminado con exito.');
                                window.history.go(-2);
                                </script>";
                }
                else{
                        echo mysqli_error($conexion);
                }
                desconectar($conexion);
            }

        function selectJugador(){
                $conexion = conectar("basket");
                $query = "select name from player";
                $resultado = mysqli_query($conexion,$query);
                desconectar($conexion);
                return $resultado;
        }
        
        function listaJugadores(){
            $conexion = conectar("basket");
            $query = "select * from player";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;
    }
    
        function listaEquipos(){
            $conexion = conectar("basket");
            $query = "select * from team";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;
    }

        function listaJugadoresEquipo($team){
            $conexion = conectar("basket");
            $query = "select * from player where team = '$team'";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;

    }
    
        function listaJugadoresCanastas($nbaskets){
            $conexion = conectar("basket");
            $query = "select * from player where nbaskets >= '$nbaskets'";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;
    }

        function listaEquiposCiudad($city){
                $conexion = conectar("basket");
                $query = "select * from team where city ='$city'";
                $resultado = mysqli_query($conexion, $query);
                desconectar($conexion);
                return $resultado;

    }
