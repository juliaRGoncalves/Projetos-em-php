
<!DOCTYPE html>
<html>
<head>
    <meta charset= "UTF - 8"/>
    <title>Calculadora</title>
</head>
<body>
    <div>
    <?php
    $n1 = 0;
    $n2 = 0;
    $resultado = 0;
    $calc = "somar";
    
    if (isset($_GET["n1"], $_GET["n2"], $_GET["calc"])){ //função de validação de variável
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $calc = $_GET["calc"];

        switch($calc){

            case "somar":
                $resultado = $n1 + $n2;
                break;

            case "subtrair":
                $resultado = $n1 - $n2;
                break;

            case "multiplicar":
                $resultado = $n1 * $n2;
                break;

            case "dividir":
                $resultado = $n1 / $n2;
                break;
        }
    }
    
?>

    </div>

    <form> 
        
        Digite o primeiro número <br />
        <input type = "numero" name = "n1"  value = <?= $n1?> /><br />
       
        Digite o segundo número <br />
        <input type = "numero" name = "n2" value = <?= $n2?> /><br />
       
        <select name = "calcular">
            <option value="somar" <?= ($calc== 'somar')?'Selected':'';?> >Somar</option>
            <option value="subtrair" <?= ($calc== 'subtrair')?'Selected':'';?> >Subtrair</option>
            <option value="multiplicar"<?= ($calc== 'multiplicar')?'Selected':'';?> >Multiplicar</option>
            <option value="divisão"<?= ($calc== 'divisão')?'Selected':'';?> >Divisão</option>
        </select>

        <br /><br />
        <input type= "submit" value="calcular"/>
        <br /><br />
        
        <p> Resultado é: <?= $resultado ?></p>
</form>
</body>
</html>

<!-- input type = "resultado" name = "Resultado" value = ?= $resultado? -->