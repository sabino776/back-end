<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];

        $imc = $peso / ($altura * $altura);

        echo "<h2>Resultado do IMC</h2>";
        echo "<p>$nome, você está com $idade anos e seu IMC é: " . number_format($imc, 2) . "</p>";

        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "<p>Classificação: Sobrepeso</p>";
        } else {
            echo "<p>Classificação: Obesidade</p>";
        }
    }
    ?>

    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="altura">Altura (em metros):</label>
        <input type="text" id="altura" name="altura" required><br><br>

        <label for="peso">Peso (em kg):</label>
        <input type="text" id="peso" name="peso" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>
