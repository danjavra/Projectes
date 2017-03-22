<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Perfil</title>
    </head>
    <body>
       <h1>Modificar Perfil del Usuario</h1>
       <form action="ModificarPerfil.php" method="post">
<?php 
	require_once 'bbddmodperfil.php';
	$nusuario = selectUsuario();

	echo "<label>Selecciona el usuario a modificar: ";
	echo "<select name='nombre' id=''>";	
	while($fila = mysqli_fetch_array($nusuario)){
		extract($fila);
		echo "<option value= $username>$username</option>";
	}
	echo "</select></label>";


 ?>
 	<input type="submit" value="Modificar">
</form>
        <form action="" method="POST">
            <p>Nombre de usuario: <input type="hidden" name="nombre"></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Email: <input type="email" name="email"></p>
            <input type="submit" value="Modificar" name="modificar">
        </form>
        <?php
       require_once 'bbddmodperfil.php';
        //Si han pulsado el botón registramos el usuario
        if(isset($_POST["modificar"])){
            $nusuario = $_POST["nombre"];
            $pass = $_POST["pass"];
            $email = $_POST["email"];
            modificarPerfil($nusuario,$pass,$email);
        }
        else{

	$nusuario = $_POST["nombre"];

	$datos = selectUsuario($nusuario);

	echo "<form action='' method='post'>";

	echo "<h1>Datos del Usuario $nusuario</h1>";

	$fila = mysqli_fetch_array($datos);

	extract($fila);
        echo "<input type='hidden' value='$nusuario' name='nombre'>";
	echo "<label>Password: <input type='password' value='$pass' name='password'></label>";
	echo "<label>Email: <input type='mail' value='$email' name='email'></label>";

	echo "<input type='submit' name='modificar' value='Modificar datos'>";
	echo "</form>";

	}
        ?>
    </body>
</html>
