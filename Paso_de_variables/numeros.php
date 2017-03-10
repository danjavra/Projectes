<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST["num1"])) {
                    $num1 = $_POST["num1"];
 for ($i = 1; $i <=$num1; $i++){
            echo"$i<br>";
        }
}