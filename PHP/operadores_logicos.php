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
        $a = true;
        $b = false;
        $c = true;
        $d = false;
       

        echo("<h1>Operadores logicos</h1>");
        var_dump($a);
        
        echo("<hr>");
        echo("<h3>Operador AND && TRUE si tanto $-A como $-B son TRUE</h3>");
        $resultado = $a && $b;
        var_dump($resultado);
        $resultado = $a && $c;
        var_dump($resultado);
        $resultado = $a && $d;
        var_dump($resultado);

        echo("<hr>");
        echo("<h3>Operador OR || TRUE si cualquiera $-a como $-b son TRUE</h3>");
        $resultado = $a || $b;
        var_dump($resultado);
        $resultado = $a || $c;
        var_dump($resultado);
        $resultado = $b || $d;
        var_dump($resultado);

        echo("<hr>");
        echo("<h3>operador XOR TRUE si $-a o $-b son TRUE pero no ambos<h3>");
        $resultado = $a xor $b;
        var_dump($resultado);
        $resultado = $a xor $c;
        var_dump($resultado);
        $resultado = $b xor $d;
        var_dump($resultado);

        echo("<hr>");
        echo("<h3>operador NOT es TRUE si $-a NO es TRUE<h3>");
        $resultado = !$a;
        var_dump($resultado);
        $resultado = !$b;
        var_dump($resultado);


    ?>
</body>
</html>


