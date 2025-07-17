<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
</head>

<body>
    <form method="post">
        <label>Digite um ano:</label>
        <input type="number" name="ano" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ano = $_POST['ano'];

        if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
            echo "O ano $ano é bissexto.";
        } else {
            echo "O ano $ano não é bissexto.";
        }
    }
    ?>
</body>

</html>