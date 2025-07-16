<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>

<body>
    <form method="post">
        <label for="numeroFatorial">Digite um número para calcular o fatorial:</label>
        <input type="number" name="numeroFatorial" min="0" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['numeroFatorial'])) {
            $numero = $_POST['numeroFatorial'];
            $fatorial = 1;
            for ($contador = 1; $contador <= $numero; $contador++) {
                $fatorial *= $contador;
            }
            echo "O fatorial de $numero é $fatorial.";
        }
    }
    ?>
</body>

</html>
