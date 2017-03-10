<?php

function conectar($database){
    $con = mysqli_connect("localhost","root","",$database)
            or die ("No se ha podido conectar con la BBDD.");
    return $con; 
}

function desconectar ($conexion){
    mysqli_close($conexion);
}

//funcion que da de alta a los conductores en la BBDD
function  altaEntrenador($nombre, $pokeball, $pocion, $puntos){
    $con = conectar("stukemon");
    $insert = "insert into trainer values ('$nombre','$pokeball','$pocion','$puntos')";
    if (mysqli_query($con,$insert)){
        //Si todo va bien damos mensaje de ok!
        echo"Entrenador dado de alta";
    }else{
        //Sino, damos mensaje de error
        echo mysqli_error($con);
    }
    //Cerramos la conexión con la BBDD
    desconectar($con);
}
 
function altaPokemon($nombre, $tipo, $habilidad, $ataque, $defensa, $velocidad, $vida, $nivel, $entrenador){
    $con = conectar("stukemon");
    $insert = "insert into pokemon values ('$nombre', '$tipo', '$habilidad', '$ataque', '$defensa', '$velocidad', '$vida', '$nivel', '$entrenador')";
    if (mysqli_query($con,$insert)){
        //Si todo va bien damos mensaje de ok!
        echo"Pokemon dado de alta";
    }else{
        //Sino, damos mensaje de error
        echo mysqli_error($con);
    }
    //Cerramos la conexión con la BBDD
    desconectar($con);
}

function selectEntrenadoresdisp(){
    	$conexion = conectar("stukemon");
	$query = "select name from trainer where name not in (select trainer from pokemon group by trainer having count(*)=6)";
	$resultado = mysqli_query($conexion,$query);
	desconectar($conexion);
	return $resultado;
}

function listaPokemons(){
            $conexion = conectar("stukemon");
            $query = "select * from pokemon order by level desc, life desc";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;
    }
    
    
function RankingEntrenadores(){
            $conexion = conectar("stukemon");
            $query = "select * from trainer order by points desc";
            $resultado = mysqli_query($conexion, $query);
            desconectar($conexion);
            return $resultado;
    }
    
function selectEntrenadores(){
    	$conexion = conectar("stukemon");
	$query = "select name from trainer where name in(select trainer from pokemon group by trainer having count(*) >0)";
	$resultado = mysqli_query($conexion,$query);
	desconectar($conexion);
	return $resultado;
}

function selectPokemonEntrenador($trainer){
    	$conexion = conectar("stukemon");
	$query = "select * from pokemon where trainer='$trainer' and life > 0 ";
	$resultado = mysqli_query($conexion,$query);
	desconectar($conexion);
	return $resultado;
}

function datospokemon($entrenador,$pokemon){
    $connectar = conectar("stukemon");
    $select="select * from pokemon where name='$pokemon' and trainer ='$entrenador'";
    $resultado = mysqli_query($connectar, $select);
    desconectar($connectar);
    return $resultado;
}

function SelectPuntos($name){
       $connectar = conectar("stukemon");
       $select = "select points from trainer where name='$name'";
        $resultado = mysqli_query($connectar, $select);
        desconectar($connectar);
        return $resultado;
}

function PuntosGanador($name,$points){
    $connectar = conectar("stukemon");
    $update = "update trainer set points=$points where name='$name'";
    if (mysqli_query($connectar, $update)){
        echo"¡$name ha ganado 10 puntos! <br><br>";
    }
    else{
        echo mysqli_error($connectar);
    }
    desconectar($connectar);
  
}

function PuntosPerdedor($name,$points){
     $connectar = conectar("stukemon");
    $update = "update trainer set points=$points where name='$name'";
    if (mysqli_query($connectar, $update)){
        echo"¡$name ha ganado 1 punto!<br><br>";
    }
    else{
        echo mysqli_error($connectar);
    }
    desconectar($connectar);
  
}

function UpdateVidaNivel1($name1,$life1,$level1){
      $connectar = conectar("stukemon");
      $update = "update pokemon set life='$life1',level='$level1'where name='$name1'";
      if(mysqli_query($connectar, $update)){
          echo"";
      }
      else{
          echo mysqli_error($connectar);
      }
       desconectar($connectar);
}

function UpdateVidaNivel2($name2,$life2,$level2){
      $connectar = conectar("stukemon");
      $update = "update pokemon set life='$life2',level='$level2' where name='$name2'";
      if(mysqli_query($connectar, $update)){
          echo"";
      }
      else{
          echo mysqli_error($connectar);
      }
       desconectar($connectar);
}

function PonerPokemonGanador($pokemon1,$pokemon2,$ganador){
    $connectar = conectar("stukemon");
    $insert = "insert into battle values(null,'$pokemon1','$pokemon2','$ganador')";
     if (mysqli_query($connectar, $insert)){
        echo"Se ha metido el pokemon ganador en la tabla BATTLE<br><br>";
    }
    else {
        echo mysqli_error($connectar);
    }
    desconectar($connectar);
}

function MostrarEntrenadores(){
    $connectar = conectar("stukemon");
    $select = "select * from trainer";
    $resultado = mysqli_query($connectar,$select);
    desconectar($connectar);
    return $resultado;
}

function PokemonEntrenador($name){
    $connectar = conectar("stukemon");
     $select = "select name from pokemon where trainer='$name'";
     $resultado = mysqli_query($connectar, $select);
     desconectar($connectar);
     return $resultado;
}

function SelectTodosPokemon(){
    $connectar = conectar("stukemon");
    $select = "select * from pokemon";
    $resultado = mysqli_query($connectar,$select);
    desconectar($connectar);
    return $resultado;
}

function SelectPociones($name){
    $connectar = conectar("stukemon");
    $select = "select potions from trainer where name='$name'";
    $resultado = mysqli_query($connectar, $select);
    desconectar($connectar);
    return $resultado;
}

function UpdateVida50($name){
    $connectar = conectar("stukemon");
    $update = "update pokemon set life=life+50 where name='$name'";
     if(mysqli_query($connectar, $update)){
          echo"Se ha aumentado la vida de $name<br>";
      }
      else{
          echo mysqli_error($connectar);
      }
       desconectar($connectar);
}

function GastarPociones($name,$potions){
    $connectar = conectar("stukemon");
    $update = "update trainer set potions=$potions where name='$name'";
     if(mysqli_query($connectar, $update)){
          echo"$name ha gastado una pocion<br>";
      }
      else{
          echo mysqli_error($connectar);
      }
       desconectar($connectar);
}

function ActualizarVidaPocion($potions,$points,$entrenador){
    $connectar = conectar("stukemon");
    $update = "update trainer set potions=$potions, points=$points where name='$entrenador'";
     if(mysqli_query($connectar, $update)){
          echo"";
      }
      else{
          echo mysqli_error($connectar);
      }
       desconectar($connectar);
}

function listaRankingBatallas (){
    $connectar = conectar("stukemon");
    $select = "select winner, count(*) as batallasganadas from battle group by winner order by batallasganadas desc";
    $resultado = mysqli_query($connectar, $select);
    desconectar($connectar);
    return $resultado;
}
