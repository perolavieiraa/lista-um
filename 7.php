<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>

<body>
    <form method="post">
        <label>Digite um número para saber se ele é perfeito:</label>
        <input type="number" name="numeroPerfeito" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numeroPerfeito'];
        $soma = 0;

        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $soma += $i;
            }
        }

        if ($soma == $numero) {
            echo "O número $numero é perfeito.";
        } else {
            echo "O número $numero não é perfeito.";
        }
    }
    ?>
</body>

</html>