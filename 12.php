<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
</head>

<body>
    <form method="post">
        <label>Digite um texto:</label>
        <input type="text" name="frase" required>
        <button type="submit">Contar Vogais</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $texto = strtolower($_POST['frase']);
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;

        for ($i = 0; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], $vogais)) {
                $contador++;
            }
        }

        echo "O texto tem $contador vogais.";
    }
    ?>
</body>

</html>