<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <title>Exercício 1</title>
</head>

<body>
   <form method="POST" action="">
      <label for="imparOuPar">Digite um número para saber se é par ou ímpar:</label>
      <input type="number" id="imparOuPar" name="imparOuPar" required>
      <button type="submit" name="imparOuPar">Verificar</button>
   </form>
   <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['imparOuPar'])) {
         $numero = $_POST['imparOuPar'];
         if ($numero % 2 == 0) {
            echo 'O número $numero é par.';
         } else {
            echo 'O número $numero é ímpar.';
         }
      }
   }
   ?>
</body>

</html>