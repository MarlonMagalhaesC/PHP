<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Conversor de moeda R$ para US$ </h1>

        <?php

        $valorReal = $_GET["inputReal"];
        $valorCotacao = $_GET["inputCotacao"];
        $resDolar = $valorReal / $valorCotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p> Valor digitado <strong> " . numfmt_format_currency($padrao, $valorReal, "BRL") . " </strong> </p>";
        echo "<p> Valor convertido  para <strong> " . numfmt_format_currency($padrao, $resDolar, "USD") . "</strong> </p>";

        ?>
        <button> <a href="javascript:history.go(-1)">Voltar à página anterior</a> </button>

    </main>

</body>

</html>