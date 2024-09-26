<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado: </h1>
    </header>

    <main>

        <h1>Trabalhando com numeros aleatorios </h1>
        <p>Gerando um numero aleatorio entre 0 e 100.</p>

        <?php
        $numeroAleatorio = rand(1, 100); // Gera um número entre 1 e 100
        echo "<p> <strong>Numero gerado: </strong> $numeroAleatorio </p>";

        ?>
        <form action="geradorNumero.php" method="get">
            <input type="submit" value=" Gerar outro ">
        </form>


    </main>
</body>

</html>