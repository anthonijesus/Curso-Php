<?php

    $a = 20;
    $b = "20";
    if($a < $b){
        echo "<h2> la variable A es mayor que la variable B </h2>";

    }

    if (($a < $b) || ($a > $b)){
        echo "<h2> Prueba de operador OR </h2>";
        }

    echo "<hr>";
    echo "<hr>";
    
    if ($a > $b) {
        echo "<h2> A es mayor que B </h2>";
    }else{
        echo "<h2> B es mayor que AAA </h2>";
    }
    echo "<hr>";
    echo "<hr>";
    if (($a < $b) && ($a > 5)){
        echo "<h2> Pruba Nro. 4 de operador de control ELSE </h2>";
    }else{
        echo "<h2> Prueba de ELSE </h2>";
    }
    echo "<hr>";
    echo "<hr>";

    if ($a > $b) {
        echo "<h2>Estructura IF</h2>";
    }elseif($a === $b){
        echo "<h2>Estructura ELSEIF</h2>";
    }elseif($a == $b){
        echo "<h2> Estructura ELSEIF 2 </h2>";
    }else{
        echo "<h2>Estructura ELSE</h2>";
    }
    echo "<hr>";
    echo "<hr>";

    $i = "hola";
    switch($i){
        case 0:
            echo "<h2> Variable I vale 0";
            break;
        case 1:
            echo "<h2> Variable I vale 1";
            break;
        case 2:
            echo "<h2> Variable I vale 2";
            break;
        case 3:
            echo "<h2> Variable I vale 3";
            break;
        case "hola":
            echo "<h2> Variable I vale Hola";
            break;
        default:
            echo "<h2> Variable I default";
             }

?>