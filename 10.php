<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
</head>
<body>
    <form method="post">
        <label>Digite um número para ver a sequência de Fibonacci até ele:</label>
        <input type="number" name="limiteFib" required>
        <button type="submit">Mostrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $limite = $_POST['limiteFib'];
        $anterior = 0;
        $atual = 1;

        echo "Sequência de Fibonacci até $limite:<br>";

        while ($anterior <= $limite) {
            echo "$anterior ";
            $proximo = $anterior + $atual;
            $anterior = $atual;
            $atual = $proximo;
        }
    }
    ?>
</body>
</html>