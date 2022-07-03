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
    
        $numUno = 5;
        $numDos = 4;
        $numTres = 6;
        $numCuatro = 2;
        $numNegativo = -3;

        echo("<h3>Operadores aritmeticos</h3>");
        $resultado = $numUno + $numDos;
        print_r($resultado);
        echo("<hr>");
        $resultado = -$numUno;
        print_r($resultado);
        echo("<hr>");
        print_r($numNegativo);
        echo("<hr>");
        $resultado = -$numNegativo;
        print_r($resultado);
        echo("<hr>");
        $resultado = $numTres - $numDos;
        print_r($resultado);
        echo("<hr>");
        $resultado = $numUno * $numCuatro;
        print_r($resultado);
        echo("<hr>");
        $resultado = $numTres / $numDos;
        print_r($resultado);
        echo("<hr>");
        $resultado = $numTres % $numUno;
        print_r($resultado);
        echo("<hr>");
        $resultado = $numUno ** $numCuatro;
        print_r($resultado);
        echo("<hr>");
        $resultado = ($numDos + $numTres)/2;
        print_r($resultado);
        echo("<hr>");
        $resultado = $numDos + $numTres/2;
        print_r($resultado);

        echo("<h3>Operadores de asignacion</h3>");
        $numero = 7;
        print_r($numero);
        echo("<hr>");
        $numero += 2;
        print_r($numero);
        echo("<hr>");
        $numero -= 4;
        print_r($numero);
        echo("<hr>");
        echo("<hr>");
        $texto = "Hola Soy Texto";
        print_r($texto);
        echo("<hr>");
        echo("|");
        $texto = "Hola soy texto"."soy 2da parte";
        print_r($texto);
        echo("<hr>");
        $texto = "Hola soy texto"."Hola soy numero.$numero";
        print_r($texto);
        echo("<hr>");
        $varConcateno = "Primera Parte";
        print_r($varConcateno);
        echo("|");
        $varConcateno .= " Soy la 2da parte ";
        print_r($varConcateno); 

    
    
    
    
    ?>
     






</body>
</html>