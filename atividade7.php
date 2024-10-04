<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento de Carro</title>
</head>
<body>
    <h1>Cálculo de Juros do Financiamento do Carro</h1>
    
    <?php
    $precoAVista = 22500.00; 
    $numeroParcelas = 60; 
    $valorParcela = 489.65; 

    $valorTotalFinanciado = $numeroParcelas * $valorParcela;

    $jurosPagos = $valorTotalFinanciado - $precoAVista;

    echo "<p>O valor à vista do carro é R$ " . number_format($precoAVista, 2, ',', '.') . ".</p>";
    echo "<p>O valor total pago com o financiamento é R$ " . number_format($valorTotalFinanciado, 2, ',', '.') . ".</p>";
    echo "<p>O valor gasto somente em juros é R$ " . number_format($jurosPagos, 2, ',', '.') . ".</p>";
    ?>
</body>
</html>
