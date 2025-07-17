<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 17</title>
</head>

<body>
    <form method="post">
        <label>Dia:</label>
        <input type="number" name="dia" required>
        <label>Mês:</label>
        <input type="number" name="mes" required>
        <label>Ano:</label>
        <input type="number" name="ano" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if (checkdate($mes, $dia, $ano)) {
            echo "A data $dia/$mes/$ano é válida.";
        } else {
            echo "A data $dia/$mes/$ano não é válida.";
        }
    }
    ?>
</body>

</html>