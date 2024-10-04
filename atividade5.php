<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Triângulo Retângulo</h1>
    <form method="POST">
        <label for="base">Digite a base do triângulo (em metros):</label>
        <input type="number" name="base" required step="0.01"><br>

        <label for="altura">Digite a altura do triângulo (em metros):</label>
        <input type="number" name="altura" required step="0.01"><br>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
    function calcularAreaTriangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);
        $area = calcularAreaTriangulo($base, $altura);
        
        echo "<p>A área do triângulo retângulo com base $base metros e altura $altura metros é $area metros quadrados.</p>";
    }
    ?>
</body>
</html>
