<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
</head>

<body>
    <form method="post">
        <label>Digite a temperatura em Celsius:</label>
        <input type="number" name="celsius" required>
        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "$celsius°C equivalem a $fahrenheit°F.";
    }
    ?>
</body>

</html>