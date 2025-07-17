<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>

<body>
    <form method="post">
        <label for="numeroDivisores">Digite um número para mostrar todos os seus divisores:</label>
        <input type="number" name="numeroDivisores" required>
        <button type="submit">Mostrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['numeroDivisores'])) {
            $numero = $_POST['numeroDivisores'];
            echo "Divisores de $numero:<ul>";
for ($conta = 1; $conta <= $numero; $conta++) {
    if ($numero % $conta == 0) {
        echo "<li>$conta</li>";
    }
}
echo "</ul>";
        }
    }
    ?>
</body>

</html>