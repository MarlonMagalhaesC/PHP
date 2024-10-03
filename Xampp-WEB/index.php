<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisor</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php
    $dividendo = $_POST["dividendo"] ?? 0;
    $divisor =   $_POST["divisor"] ?? 1;


    ?>

    <header>
        <h1>Bem vindo! </h1>
    </header>

    <main>
        <h1>Anatomia de uma divisao: </h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idDividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="idDividendo" min="0" value="<?= $dividendo ?>">

            <label for="idDividendo">Divisor: </label>
            <input type="number" name="divisor" id="idDividendo" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>

        <h2>Estrutura de uma divisao: </h2>

        <?php
        $resto = $dividendo % $divisor;
        $quociente = (int)($dividendo / $divisor);
        // $quociente = intdiv($dividendo, $divisor);

        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>

        </table>




    </section>
</body>

</html>