<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>

<body>
    <form method="post">
        <label for="numeroQualidade">Digite um número para saber se é positivo, negativo ou zero:</label>
        <input type="number" name="numeroQualidade" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['numeroQualidade'])) {
            $numero = $_POST['numeroQualidade'];
            if ($numero > 0) {
                echo "O número $numero é positivo.";
            } else {
                if ($numero < 0) {
                    echo "O número $numero é negativo.";
                } else {
                    echo "O número é zero.";
                }
            }
        }
    }
    ?>
</body>

</html>