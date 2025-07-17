<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 16</title>
</head>

<body>
    <form method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nomePessoa" required>
        <label>Digite sua idade:</label>
        <input type="number" name="idadePessoa" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nomePessoa'];
        $idade = $_POST['idadePessoa'];

        if ($idade >= 16) {
            echo "$nome, você já pode votar!";
        } else {
            echo "$nome, você ainda não pode votar.";
        }
    }
    ?>
</body>

</html>