<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
    <style>
        .resultado-azul {
            color: blue;
        }
        .resultado-verde {
            color: green;
        }
        .resultado-vermelho {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Soma de Três Valores</h1>
    <form method="POST">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" required><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" required><br>

        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" required><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    function calcularSoma($valor1, $valor2, $valor3) {
        return $valor1 + $valor2 + $valor3;
    }

    function exibirResultado($soma, $valor1, $valor2, $valor3) {
        if ($valor1 > 10) {
            echo "<p class='resultado-azul'>Resultado: $soma</p>";
        } elseif ($valor2 < $valor3) {
            echo "<p class='resultado-verde'>Resultado: $soma</p>";
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            echo "<p class='resultado-vermelho'>Resultado: $soma</p>";
        } else {
            echo "<p>Resultado: $soma</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = floatval($_POST['valor1']);
        $valor2 = floatval($_POST['valor2']);
        $valor3 = floatval($_POST['valor3']);
        
        $soma = calcularSoma($valor1, $valor2, $valor3);
        exibirResultado($soma, $valor1, $valor2, $valor3);
    }
    ?>
</body>
</html>
