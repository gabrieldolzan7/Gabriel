<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Quadrado</title>
</head>
<body>
    <h1>Cálculo da Área do Quadrado</h1>
    <form method="POST">
        <label for="lado">Digite o comprimento do lado do quadrado (em metros):</label>
        <input type="number" name="lado" required step="0.01"><br>
        <button type="submit">Calcular Área</button>
    </form>

    <?php
    function calcularAreaQuadrado($lado) {
        return $lado * $lado;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = floatval($_POST['lado']);
        $area = calcularAreaQuadrado($lado);
        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
    }
    ?>
</body>
</html>
