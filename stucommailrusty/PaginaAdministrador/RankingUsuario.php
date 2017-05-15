<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>RankingUsuarios</title>
    </head>
    
    <style>
         *{
            font-family: cursive;
        }
        h1{
            text-align: center;
        }
        
        .logout {
            text-decoration: none;
            background-color: red;
            color: white;
            padding: 0.5em 3em;
            display: table;
            margin: auto;

        }
        td,th{
            border:solid black 3px;
            padding: 10px 50px;
        }
        table{
            text-align: center;
                margin-left: 37%;
                height: 300px;
                width: 25%;
                font-size: 20px;
        }
    </style>    
    <body>
        <h1>Ranking de los usuarios por cantidad de mensajes enviados</h1>
        <table>
            <tr>
                <th>Usuario</th>
                <th>Cantidad</th>
            </tr>
        <?php
        require_once '../BBDD/bbddObtenerRankingMensaje.php';
        $rankingUsuario = rankingUsuario();
        while($fila = mysqli_fetch_array($rankingUsuario)){
            extract($fila);
            echo"<tr><td>$sender</td><td>$mensajes_enviados</td></tr>";
        }
        ?>
        </table>
        <br><br><br><a href="PaginaAdministrador.php">Volver a la pagina del administrador</a>
        <a href="../PaginaPrincipal/LogOut.php" class="logout">LogOUt</a>
    </body>
</html>
