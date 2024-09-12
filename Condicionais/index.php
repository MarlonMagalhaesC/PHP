<?php

echo "Informe o primeiro número: ";
$number = trim(fgets(STDIN));


echo "Informe o segundo número: ";
$number2 = trim(fgets(STDIN));

// Converte as entradas para float
$number = floatval($number);
$number2 = floatval($number2);

if ($number > $number2) 
    echo "O primeiro número ($number) é maior que o segundo número ($number2).\n";
 else if ($number < $number2) 
    echo "O segundo número ($number2) é maior que o primeiro número ($number).\n";
 else 
    echo "Ambos os números são iguais.\n";

?>
