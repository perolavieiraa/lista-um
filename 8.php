<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>

<body>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numeroLimite" required>
        <button type="submit">Contar Pares</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $limite = $_POST['numeroLimite'];
        $quantidade = 0;

        for ($i = 1; $i <= $limite; $i++) {
            if ($i % 2 == 0) {
                $quantidade++;
            }
        }

        echo "Existem $quantidade números pares entre 1 e $limite.";
    }
    ?>
</body>

</html>