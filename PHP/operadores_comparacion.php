<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    echo("<h3> Operadores de comparacion </h3>");
    echo("<hr>");

    $numUno = 4;
    $numDos = 6;
    $numTres = 9;
    $numCuatro= 4;
    $texto = "4";

    echo("Operador IGUAL == es TRUE si la $-a es igual a $-b despues de la manipulacion de tipos");
    echo("<hr>");
    $resultado = $numUno == $numDos;
    var_dump($resultado);
    $resultado = $numUno == $numCuatro;
    var_dump($resultado);
    $resultado = $numUno == $texto;
    var_dump($resultado);
    echo("<hr>");

    echo("Operador IDENTICO === true si $-a es igual a $-b, y son del mismo tipo");
    echo("<hr>");
    $resultado = $numUno === $texto;
    var_dump($resultado);
    echo("<hr>");

    echo("Operador DIFERENTE != <> true si $-a no es igual a $-b después de la manipulación de tipos    ");
    echo("<hr>");
    $resultado = $numUno != $numDos;
    var_dump($resultado);
    $resultado = $numUno != $numCuatro;
    var_dump($resultado);
    $resultado = $numUno != $texto;
    var_dump($resultado);
    echo("<hr>");
   
    echo("<hr>");
    echo("Operador NO IDENTICO !== true si $-a no es igual a $-b, o si no son del mismo tipo");
    echo("<hr>");
    $resultado = $numUno !== $texto;
    var_dump($resultado);
    echo("<hr>");

    echo("Operador MENOR QUE < true si $-a es estrictamente menor que $-b");
    echo("<hr>");
    $resultado = $numUno < $numDos;
    var_dump($resultado);
    echo("<hr>");
    echo("Operador MAYOR QUE > true si $-a es estrictamente mayor que $-b");
    echo("<hr>");
    $resultado = $numUno > $numDos;
    var_dump($resultado);
    echo("<hr>");

    echo("Operador MENOR O IGUAL QUE <= true si $-a es menor o igual que $-b");
    echo("<hr>");
    $resultado = $numUno <= $numDos;
    var_dump($resultado);
    echo("<hr>");

    echo("Operador MAYOR O IGUAL QUE >= true si $-a es mayor o igual que $-b");
    echo("<hr>");
    $resultado = $numUno >= $numDos;
    var_dump($resultado);
    echo("<hr>");







    ?>




</body>
</html>


