<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Frutas e Verduras</title>
    <style>
        .resultado-vermelho {
            color: red;
        }
        .resultado-azul {
            color: blue;
        }
        .resultado-verde {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Compra de Frutas e Verduras de Joãozinho</h1>
    <form method="POST">
        <h2>Produtos:</h2>

        <label for="preco_macas">Preço da maçã (por kg):</label>
        <input type="number" name="preco_macas" required step="0.01"><br>
        <label for="qtd_macas">Quantidade de maçãs (kg):</label>
        <input type="number" name="qtd_macas" required step="0.01"><br>

        <label for="preco_melancia">Preço da melancia (por kg):</label>
        <input type="number" name="preco_melancia" required step="0.01"><br>
        <label for="qtd_melancia">Quantidade de melancia (kg):</label>
        <input type="number" name="qtd_melancia" required step="0.01"><br>

        <label for="preco_laranja">Preço da laranja (por kg):</label>
        <input type="number" name="preco_laranja" required step="0.01"><br>
        <label for="qtd_laranja">Quantidade de laranja (kg):</label>
        <input type="number" name="qtd_laranja" required step="0.01"><br>

        <label for="preco_repolho">Preço do repolho (por kg):</label>
        <input type="number" name="preco_repolho" required step="0.01"><br>
        <label for="qtd_repolho">Quantidade de repolho (kg):</label>
        <input type="number" name="qtd_repolho" required step="0.01"><br>

        <label for="preco_cenoura">Preço da cenoura (por kg):</label>
        <input type="number" name="preco_cenoura" required step="0.01"><br>
        <label for="qtd_cenoura">Quantidade de cenoura (kg):</label>
        <input type="number" name="qtd_cenoura" required step="0.01"><br>

        <label for="preco_batatinha">Preço da batatinha (por kg):</label>
        <input type="number" name="preco_batatinha" required step="0.01"><br>
        <label for="qtd_batatinha">Quantidade de batatinha (kg):</label>
        <input type="number" name="qtd_batatinha" required step="0.01"><br>

        <button type="submit">Calcular Total</button>
    </form>

    <?php
    function calcularTotal($preco, $quantidade) {
        return $preco * $quantidade;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $saldo = 50.00;
        $total = 0;

        $produtos = [
            'maçã' => [
                'preco' => floatval($_POST['preco_macas']),
                'quantidade' => floatval($_POST['qtd_macas'])
            ],
            'melancia' => [
                'preco' => floatval($_POST['preco_melancia']),
                'quantidade' => floatval($_POST['qtd_melancia'])
            ],
            'laranja' => [
                'preco' => floatval($_POST['preco_laranja']),
                'quantidade' => floatval($_POST['qtd_laranja'])
            ],
            'repolho' => [
                'preco' => floatval($_POST['preco_repolho']),
                'quantidade' => floatval($_POST['qtd_repolho'])
            ],
            'cenoura' => [
                'preco' => floatval($_POST['preco_cenoura']),
                'quantidade' => floatval($_POST['qtd_cenoura'])
            ],
            'batatinha' => [
                'preco' => floatval($_POST['preco_batatinha']),
                'quantidade' => floatval($_POST['qtd_batatinha'])
            ],
        ];

        foreach ($produtos as $produto) {
            $total += calcularTotal($produto['preco'], $produto['quantidade']);
        }

        echo "<p>O total da compra é R$ " . number_format($total, 2, ',', '.') . ".</p>";

        if ($total > $saldo) {
            $falta = $total - $saldo;
            echo "<p class='resultado-vermelho'>Falta R$ " . number_format($falta, 2, ',', '.') . " para completar a compra.</p>";
        } elseif ($total < $saldo) {
            $sobrando = $saldo - $total;
            echo "<p class='resultado-azul'>Joãozinho ainda pode gastar R$ " . number_format($sobrando, 2, ',', '.') . ".</p>";
        } else {
            echo "<p class='resultado-verde'>O saldo para compras foi esgotado.</p>";
        }
    }
    ?>
</body>
</html>
