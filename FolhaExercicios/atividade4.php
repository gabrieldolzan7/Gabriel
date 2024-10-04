<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Retângulo</h1>
    <form method="POST">
        <label for="ladoA">Digite o comprimento do lado A (em metros):</label>
        <input type="number" name="ladoA" required step="0.01"><br>

        <label for="ladoB">Digite o comprimento do lado B (em metros):</label>
        <input type="number" name="ladoB" required step="0.01"><br>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
    function calcularAreaRetangulo($ladoA, $ladoB) {
        return $ladoA * $ladoB;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = floatval($_POST['ladoA']);
        $ladoB = floatval($_POST['ladoB']);
        $area = calcularAreaRetangulo($ladoA, $ladoB);
        
        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }
    ?>
</body>
</html>
