<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 18</title>
</head>

<body>
    <form method="post">
        <label>Digite o primeiro número:</label>
        <input type="number" name="numero1" required>
        <label>Digite o segundo número:</label>
        <input type="number" name="numero2" required>
        <label>Digite o terceiro número:</label>
        <input type="number" name="numero3" required>
        <button type="submit">Verificar Maior</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $n3 = $_POST['numero3'];

        $maior = max($n1, $n2, $n3);
        echo "O maior número é $maior.";
    }
    ?>
</body>

</html>