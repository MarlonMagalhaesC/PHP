<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php


// Inicializando as variáveis
$anoNasc = $_POST["_dateNasc"] ?? "";
$anoDesejado = $_POST["_anoDesejado"] ?? "";
?>

<body>
    <header>
        <h1>Bem vindo!</h1>
    </header>
    <main>
        <h1>Calculando sua idade.</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idNasc">Digite sua data de nascimento: </label>
            <input type="date" name="_dateNasc" id="idNasc" value="<?= $anoNasc ?>">

            <label for="IdanoDesejado">Quer saber sua idade em que data? Atualmente estamos na data
                <strong><?= date('Y-m-d') ?></strong> </label>
            <input type="date" name="_anoDesejado" id="IdanoDesejado" value="<?= $anoDesejado ?>">

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Criar objetos DateTime
            $dataNascimento = new DateTime($anoNasc);
            $dataDesejada = new DateTime($anoDesejado);

            // Calcular a diferença
            $idade = $dataNascimento->diff($dataDesejada);

            // Exibir resultado
            echo "<h1><strong>Resultado</strong>:</h1> 
            <ul>
                <li>A sua idade será de <strong> {$idade->y} anos, {$idade->m} meses e {$idade->d} dias</strong>.</li>
            </ul>";
        }
        ?>
    </main>
</body>

</html>