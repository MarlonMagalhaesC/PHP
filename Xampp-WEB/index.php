<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Médias</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_REQUEST["_valor1"] ?? '';
    $valor2 = $_REQUEST["_valor2"] ?? '';
    $peso1 = $_REQUEST["_peso1"] ?? '';
    $peso2 = $_REQUEST["_peso2"] ?? '';

    ?>

    <header>
        <h1>Bem vindo!</h1>
    </header>

    <main>
        <h1>Calculando Média Aritmética</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idvalor1">1° Valor:</label>
            <input type="number" name="_valor1" id="idvalor1" min="1" placeholder="Digite aqui" value="<?= $valor1 ?>"
                required>

            <label for="idpeso1">Peso do 1° Valor:</label>
            <input type="number" name="_peso1" id="idpeso1" min="1" placeholder="Digite aqui" value="<?= $peso1 ?>"
                required>

            <label for="idvalor2">2° Valor:</label>
            <input type="number" name="_valor2" id="idvalor2" min="1" placeholder="Digite aqui" value="<?= $valor2 ?>"
                required>

            <label for="idPeso2">Peso do 2° Valor:</label>
            <input type="number" name="_peso2" id="idPeso2" min="1" placeholder="Digite aqui" value="<?= $peso2 ?>"
                required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $mediaS = ($valor1 + $valor2) / 2;
            $mediaP = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores <strong>$valor1</strong> e <strong>$valor2</strong>:</p>
        <ul>
            <li>A <strong>média aritmética simples</strong> entre os valores é de <em>" . number_format($mediaS, 2, ",", ".") . "</em></li>
            <li>A <strong>média aritmética ponderada</strong> entre os valores é de <em>" . number_format($mediaP, 2, ",", ".") . "</em></li>
        </ul>";
        }
        ?>

    </section>
</body>

</html>