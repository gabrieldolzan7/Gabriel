<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Divisibilidade</title>
</head>
<body>
    <h1>Verifique se um Número é Divisível por 2</h1>
    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    function verificarDivisibilidade($numero) {
        return $numero % 2 === 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);
        
        if (verificarDivisibilidade($numero)) {
            echo "<p>Valor divisível por 2</p>";
        } else {
            echo "<p>O valor não é divisível por 2</p>";
        }
    }
    ?>
</body>
</html>
