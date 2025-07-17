<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
</head>

<body>
    <form method="post">
        <label>Digite seu peso (kg):</label>
        <input type="number" step="0.01" name="peso" required>
        <label>Digite sua altura (m):</label>
        <input type="number" step="0.01" name="altura" required>
        <button type="submit">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);

        echo "Seu IMC é " . number_format($imc, 2) . ". ";

        if ($imc < 18.5) {
            echo "Você está abaixo do peso.";
        } else if ($imc < 25) {
            echo "Seu peso está normal.";
        } else if ($imc < 30) {
            echo "Você está com sobrepeso.";
        } else {
            echo "Você está com obesidade.";
        }
    }
    ?>
</body>

</html>