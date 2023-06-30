<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8"/>
    <title>Calculadora</title>
</head>
<body>
<div>
    <?php
    $n1 = 5;
    $n2 = 10;

    // Resultado dos opredores
    $rs = $n1 + $n2;
    $rst = $n1 - $n2;
    $rm = $n1 * $n2;
    $rd = $n1 / $n2;

    echo "A soma entre $n1 e $n2 é igual a $rs <br />";
    echo "A subtração entre $n1 e $n2 é igual a $rst <br />";
    echo "A multiplicação entre $n1 e $n2 é igual a $rm <br />";
    echo "A divisão entre $n1 e $n2 é igual a $rd <br />";

    ?>
</div>
</body>
</html>
