<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor R$ para US$</title>
    <link rel="stylesheet" href="../ex006/style.css">
</head>

<body>

    <main>
        <h1>Conversor de moeda R$ para US$ </h1>

        <?php

        require 'API.php'; // permite usar os codigos de outro arquivo php 

        $valorReal = $_GET["inputReal"];

        $valorCotacao = $cotacao; // $cotacao ao inves de ser digitado pelo usario, agora é pego pela API do bacen.

        $resDolar = $valorReal / $valorCotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo " <p> Valor digitado <strong> " . numfmt_format_currency($padrao, $valorReal, "BRL") . " </strong> </p> <p>Cotação atual: <em> " .  numfmt_format_currency($padrao, $cotacao, "BRL") .  "</em></p>";
        echo "<p> Valor convertido  para <strong> " . numfmt_format_currency($padrao, $resDolar, "USD") . "</strong> </p>";

        ?>
        <button> <a href="javascript:history.go(-1)">Voltar à página anterior</a> </button>

    </main>

</body>

</html>