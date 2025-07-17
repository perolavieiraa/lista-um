<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 19</title>
</head>

<body>
    <form method="post">
        <label>Digite uma senha:</label>
        <input type="text" name="senhaDigitada" required>
        <button type="submit">Verificar Força</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha = $_POST['senhaDigitada'];
        $temNumero = preg_match('/\d/', $senha);
        $temLetra = preg_match('/[a-zA-Z]/', $senha);
        $tamanhoOk = strlen($senha) >= 8;

        if ($temNumero && $temLetra && $tamanhoOk) {
            echo "Sua senha é forte!";
        } else {
            echo "Sua senha não é forte. Ela precisa ter pelo menos 8 caracteres, com letras e números.";
        }
    }
    ?>
</body>

</html>