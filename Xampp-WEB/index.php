<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>
<?php
$valor = $_POST['_valor'] ?? '';
//var_dump($_SERVER);

?>

<body>
    <header>
        <h1>Bem vindo!</h1>
    </header>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["SCRIPT_NAME"] ?>" method="post">
            <label for="idValor">Qual valor você deseja sacar? (R$)<sup>*</sup> </label>
            <input type="number" name="_valor" id="idValor" min="0" placeholder="Digite aqui" value="<?= $valor ?>"
                step="5">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar!">
        </form>
    </main>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $value = $valor;

        $_100 = floor($valor / 100);
        $valor %= 100;

        $_50 = (int) ($valor / 50);
        $valor %= 50;

        $_10 = floor($valor / 10);
        $valor %= 10;

        $_5 = (int) ($valor / 5);
        $valor %= 5;


        echo "<section>
        <h1>Saque de <strong> R$" . number_format($value, 2, ",", ".")  . "</strong> realizado.</h1>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src=\"../ex020./images/100-reais.jpg\" alt=\"Nota de 100\" class=\"nota\"> x$_100</li>
            <li><img src=\"../ex020./images/50-reais.jpg\" alt=\"Nota de 50\" class=\"nota\"> x$_50</li>
            <li><img src=\"../ex020./images/10-reais.jpg\" alt=\"Nota de 10\" class=\"nota\"> x$_10</li>
            <li><img src=\"../ex020./images/5-reais.jpg\" alt=\"Nota de 5\" class=\"nota\"> x$_5</li>
        </ul>
    </section>";
    }

    ?>

</body>

</html>