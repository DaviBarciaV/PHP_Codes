<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Fatorial">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê o número fornecido pelo usuário
        $numero = intval($_POST['numero']);

        // Inicializa a variável do fatorial
        $fatorial = 1;

        // Calcula o fatorial
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }

        // Exibe o resultado
        echo "O fatorial de $numero é: $fatorial";
    }
    ?>
</body>
</html>
