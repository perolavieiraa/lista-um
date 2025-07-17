<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 20</title>
</head>

<body>
    <form method="post">
        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Entrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $usuarioCorreto = "admin";
        $senhaCorreta = "1234";

        if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
            echo "Login bem-sucedido. Bem-vindo, $usuario!";
        } else {
            echo "Usuário ou senha incorretos.";
        }
    }
    ?>
</body>

</html>