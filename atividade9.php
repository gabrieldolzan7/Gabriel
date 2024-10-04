<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Parcelas da Moto com Juros Compostos</title>
</head>
<body>
    <h1>Cálculo do Valor das Parcelas da Moto (Juros Compostos)</h1>

    <?php
    $precoAVista = 8654.00; 
    $parcelas = [24, 36, 48, 60]; 
    $taxaInicial = 0.02; 
    $aumentoTaxa = 0.003; 

    foreach ($parcelas as $n) {

        $taxaJuros = $taxaInicial + (($n - 24) / 12) * $aumentoTaxa; 
        
        $montante = $precoAVista * pow((1 + $taxaJuros), $n);
        
        $valorParcela = $montante / $n;

        echo "<p>Para $n vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . " (juros de " . ($taxaJuros * 100) . "%).</p>";
    }
    ?>
</body>
</html>
