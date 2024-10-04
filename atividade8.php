<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Parcelas da Moto</title>
</head>
<body>
    <h1>Cálculo do Valor das Parcelas da Moto</h1>

    <?php
    $precoAVista = 8654.00; 
    $parcelas = [24, 36, 48, 60]; 
    $taxaInicial = 0.015; 
    $aumentoTaxa = 0.005; 

    foreach ($parcelas as $n) {
        
        $taxaJuros = $taxaInicial + (($n - 24) / 12) * $aumentoTaxa; 
        
        $valorTotalFinanciado = $precoAVista * (1 + ($taxaJuros * $n));
        
        $valorParcela = $valorTotalFinanciado / $n;

        echo "<p>Para $n vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . " (juros de " . ($taxaJuros * 100) . "%).</p>";
    }
    ?>
</body>
</html>
