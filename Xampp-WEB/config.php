<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado! </h1>
    </header>

    <main>

        <?php

        echo "<h1>Analisador de número real! </h1>";

        $num = $_POST["numeroReal"] ?? 0;

        $inteiro = (int)$num;

        $decimal =  $num - $inteiro;

        echo "<p> Analisando o número <strong>" . number_format($num, 3, ",", ".") .  " </strong>informado pelo usuário. </p>";

        echo "<ul><li> A parte inteira  é  <strong>" .  number_format($inteiro, 0, ",", ".") . "</strong></li> <li>A parte decimal é <strong>" . number_format($decimal, 3, ",", ".") .  "</strong></li> </ul> ";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>

</html>