<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
</head>

<body>
    <form method="post">
        <label>Digite uma palavra:</label>
        <input type="text" name="palavra" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $palavra = strtolower(str_replace(' ', '', $_POST['palavra']));
        $invertida = strrev($palavra);

        if ($palavra == $invertida) {
            echo "A palavra é um palíndromo.";
        } else {
            echo "A palavra não é um palíndromo.";
        }
    }
    ?>
</body>

</html>