<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>

<body>
    <form method="post">
        <label for="numerosAmigos">Digite dois números para saber se são números amigos:</label>
        <input type="number" name="primeiroNumero" required>
        <input type="number" name="segundoNumero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])) {
            $num1 = intval($_POST['primeiroNumero']);
            $num2 = intval($_POST['segundoNumero']);

            function somaDivisores($num)
            {
                $soma = 0;
                for ($i = 1; $i < $num; $i++) {
                    if ($num % $i == 0) $soma += $i;
                }
                return $soma;
            }

            $soma1 = somaDivisores($num1);
            $soma2 = somaDivisores($num2);

            if ($soma1 == $num2 && $soma2 == $num1) {
                echo "$num1 e $num2 são números amigos.";
            } else {
                echo "$num1 e $num2 não são números amigos.";
            }
        }
    }
    ?>
</body>

</html>