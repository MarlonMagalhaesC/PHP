<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        // var_dump($_GET);
        $n = $_GET["nameinput"];
        $sn = $_GET["snameinput"];

        if ($n && $sn) {

            echo "<p>Bem vindo <strong> $n $sn</strong>, é um prazer te conhecer! </p>";
        } else if (!$n && !$sn) {
            echo "<p>Nenhuma opcão preenchida. Volte e digite seu nome completo </p>";
        } else {

            echo "<p>Você preencheu apenas uma opcão.Volte e digite seu nome completo </p>";
        }  //(!$n || !$sn)
        ?>

        <p><a href="javascript:history.go(-1
        )">Voltar à página anterior</a></p>
    </main>
</body>

</html>