<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Vamos a necesitar acceder a variables de sesión
session_start();

$actual = $_POST["passactual"];
$nueva = $_POST["nueva"];
$confirmar = $_POST["confirmar"];

if ($actual == $_SESSION["pass"]) {
    echo "Contraseña actual es correcta.<br>";
    if ($nueva == $confirmar) {
        echo "Contraseña modificada";
        $_SESSION["pass"] = $nueva; // Esto no lo pedía
    } else {
        echo "La contraseña nueva y su verificación no son iguales<br>";
    }
} else {
    echo "La contraseña actual es incorrecta.<br>";
}