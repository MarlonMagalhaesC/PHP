<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de precos!</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$preco = $_REQUEST["price"] ?? '';
$reajuste = $_REQUEST["reajuste"] ?? '';
//var_dump($_SERVER);
?>

<body>
    <header>
        <h1> Bem vindo! </h1>
    </header>
    <main>
        <h1>Reajustador de preços: </h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

            <label for="idPrice">Preco do produto R$</label>
            <input type="number" name="price" id="idPrice" step="0.01" placeholder="Digite aqui" min="0.01"
                value="<?= $preco ?>">

            <label for="idReaj">Qual sera o percentual de reajuste? (<strong><span id="p"></span>%</strong>) </label>
            <input type="range" name="reajuste" id="idReaj" min="0" max="100" step="1" oninput="mudaValor()"
                value="<?= $reajuste ?>">

            <input type="submit" value="Enviar">
        </form>

    </main>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $precoReajustado = $preco + ($preco * ($reajuste / 100));

        echo "<section><h1><strong> Resultado: </strong> </h1><p>O produto que custava <strong>" . numfmt_format_currency($padrao, $preco, "BRL") . " </strong> com <strong>" . $reajuste . "</strong>% de aumento vai passar a custar <strong>" . numfmt_format_currency($padrao, $precoReajustado, "BRL") . "</strong> a partir de agora. </p> </section> ";
    }
    ?>

    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = idReaj.value;
        }
    </script>
</body>

</html>