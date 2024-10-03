<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $valor1 = $_GET["v1"] ?? 0;
    $valor2 = $_GET["v2"] ?? 0;
    ?>

    <header>
        <h1>Somando numeros</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">

            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="v2" value="<?= $valor1 ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>O resultado da soma: </h2>

        <?php
        $soma = $valor1 + $valor2;

        echo "<p> O resultado da soma sera dos valores $valor1 e $valor2 sera de <strong> $soma </strong> </p>";
        ?>

    </section>
</body>

</html>