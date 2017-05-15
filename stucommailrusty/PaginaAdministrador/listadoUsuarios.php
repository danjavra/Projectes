<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado Usuarios</title>
    </head>
    <style>
        *{
              font-family: cursive;
        }
        h1{
            text-align: center;
        }
        table{
                border-collapse: collapse;
              
                margin-left: 37%;
                    height: 50px;
                width: 25%;
                border: 3px solid black;
                font-size: 20px;
        }
        td, th {
         border: 3px solid black;
         text-align: center;
        padding: 8px 20px;
}

.logout {
            text-decoration: none;
            background-color: red;
            color: white;
            padding: 0.5em 3em;
            display: table;
            margin: auto;

        }
    </style>
    <body>
        <h1>Listado de los usuarios</h1>
        
        <table>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Surname</th>
            </tr>
        <?php
        require_once '../BBDD/bbddListadoUsuarios.php';
        $listadoUsuarios = listadoUsuario();
        while($fila = mysqli_fetch_array($listadoUsuarios)){
            extract($fila);
            echo"<tr><td>$username</td><td>$name</td><td>$surname</td></tr>";
        }
        ?>
        </table>
        
        <br><br><a href="PaginaAdministrador.php">Volver a la pagina del administrador</a>
        
        <br><br><a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
