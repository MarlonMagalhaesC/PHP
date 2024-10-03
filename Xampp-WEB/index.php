<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador Salário Minimo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //var_dump($_SERVER);
    $salarioMin = $_POST["salarioMin"] ?? 1;
    $salario = $_POST["amount"] ?? 0;

    ?>
    <header>
        <h1>Bem vindo!</h1>
    </header>
    <main>
        <h1>Informe seu salário</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

            <label for="idSalario">Seu Salário (R$):</label>
            <input type="number" name="amount" id="idSalario" step="0.01" min="0" value="<?= $salario ?>">

            <label for="idSalario">Salário minimo atual (R$):</label>
            <input type="number" name="salarioMin" id="idSalario" step="0.01" min="1" value="<?= $salarioMin ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $quantity =  intdiv($salario, $salarioMin);

        $resto = (($salario / $salarioMin) - $quantity) * $salarioMin; //quero o resto com os decimais
        echo "<p>Seu salario <em>" . numfmt_format_currency($padrao, $salario, "BRL") . " </em> equivale a  <strong>  $quantity  salários mínimos </strong> ";

        if ($salario > $salarioMin) {
            echo "+ <em>" . numfmt_format_currency($padrao, $resto, "BRL") . " </em>";
        }

        echo "</p>";

        ?>
    </section>
</body>

</html>