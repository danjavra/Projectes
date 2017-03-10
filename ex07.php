<?php

       $motor = 1;
            
       switch($motor){
                case 0:
                    echo"No hay establecido un valor definido para el tipo de
bomba<br>";
                    break;
                case 1:
                    echo "La bomba es una bomba de agua<br>";
                    break;
                case 2:
                    echo "La bomba es una bomba de gasolina<br>";
                    break;
                case 3:
                    echo "La bomba es una bomba de hormigón<br>";
                    break;
                case 4:
                    echo "La bomba es una bomba de pasta alimenticia<br>";
                    break;
               
                default:
                    echo "No existe un valor válido para tipo de bomba";
                    
            }