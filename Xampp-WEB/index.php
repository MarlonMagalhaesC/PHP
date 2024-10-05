<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $numero = $_POST["_numero"] ?? 1;
    ?>

    <header>
        <h1>Bem-vindo!</h1>
    </header>
    <main>
        <h1>Raízes de um número:</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idNum">Informe um número:</label>
            <input type="number" name="_numero" id="idNum" placeholder="Digite aqui" min="1" value="<?= $numero ?>">
            <input type="submit" value="Ver Raízes">
        </form>
    </main>

    <section>
        <h1>Resultado final:</h1>

        <?php
        $raizQ = number_format(sqrt($numero), 3, ",", ".");
        $raizC = number_format(pow($numero, 1 / 3), 3, ",", ".");

        echo "<p>Analisando o número <strong>$numero</strong> temos:</p>      
        <ul>
            <li>A sua raiz quadrada é <strong>$raizQ</strong></li>
            <li>A sua raiz cúbica é <strong>$raizC</strong></li>
        </ul>";
        ?>
    </section>
</body>

</html>