<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>
    <form method="post">
        <label>Digite o primeiro número:</label>
        <input type="number" name="numero1" required>
        <label>Digite o segundo número:</label>
        <input type="number" name="numero2" required>
        <button type="submit">Somar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inicio = $_POST['numero1'];
        $fim = $_POST['numero2'];
        $soma = 0;

        if ($inicio > $fim) {
            list($inicio, $fim) = [$fim, $inicio];
        }

        for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }

        echo "A soma dos números entre $inicio e $fim é $soma.";
    }
    ?>
</body>
</html>