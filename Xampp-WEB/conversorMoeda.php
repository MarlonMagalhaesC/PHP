<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moeda convertida</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Conversor de moeda R$ para $ </h1>

        <?php

        $valorReal = (float)$_GET["inputReal"];
        $valorCotacao = (float)$_GET["inputCotacao"];


        echo "<p> Valor <strong> R$: $valorReal </strong> </p>";
        echo "<p> Valor cotacao <strong> US$: $valorCotacao </strong> </p>";
        echo "<p> Valor convertido  para <strong> US$  " . $valorReal / $valorCotacao . "</strong> </p>";

        ?>
        <button> <a href="javascript:history.go(-1)">Voltar à página anterior</a> </button>

    </main>

</body>

</html>