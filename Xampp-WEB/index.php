<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$segundos = $_REQUEST["_segundos"] ?? 0;
//var_dump($_SERVER);
?>

<body>
    <header>
        <h1>Bem vindo!</h1>
    </header>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idSeg">Qual é o total de segundos?</label>
            <input type="number" name="_segundos" id="idSeg" placeholder="Digite aqui" min="0" step="0"
                value="<?= $segundos ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $semanas = intdiv($segundos, 604_800); // "_" Separador visual, não afeta em nada.
        $resto = $segundos % 604_800;
        $dias = intdiv($resto, 86400);
        $resto = $resto % 86_400;
        $horas = intdiv($resto, 3600);
        $resto = $resto % 3600;
        $minutos = intdiv($resto, 60);
        $resto = $resto % 60;

        echo "<section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ",", ".") . " segundos</strong> equivalem a um total de: </p>
        <ul>
            <li>" . number_format($semanas, 0, ",", ".")  . " semanas</li>
            <li>" . number_format($dias, 0, ",", ".")  . " dias</li>
            <li>" . number_format($horas, 0, ",", ".") . " horas</li>
            <li>" . number_format($minutos, 0, ",", ".")   . " minutos</li>
            <li>" . number_format($resto, 0, ",", ".")  . " segundos</li>
        </ul> 
        </section>";
    }
    ?>

</body>

</html>