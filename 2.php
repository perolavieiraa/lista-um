<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>

<body>
    <form method="post">
        <label for="numeroTabuada">Digite um número para ver sua tabuada:</label>
        <input type="number" name="numeroTabuada" required>
        <button type="submit">Mostrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['numeroTabuada'])) {
            $numero = $_POST['numeroTabuada'];
        echo "Tabuada do $numero:<ul>";
        for ($vezes = 1; $vezes <= 10; $vezes++) {
            $resultado = $numero * $vezes;
            echo "<li>$numero x $vezes = $resultado</li>";
        }
        echo "</ul>";
    }
}
    ?>
</body>

</html>