<?php

try {

echo "Bem vindo!\nDigite o primeiro valor: ";
$value1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo valor: ";
$value2 = floatval(trim(fgets(STDIN)));

echo "1. Adição\n2. Subtração\n3. Divisão\n4. Multiplicação\n5. Potência\nDigite uma operação:";
$option = intval(trim(fgets(STDIN)));

if ($option < 0 || $option > 5)
throw New Exeception("Erro! ");

$res;

if ($option == 1)
$res = $value1+$value2;

else if ($option == 2)
$res = $value1-$value2;

else if ($option == 3)
$res = $value1/$value2;

else if ($option == 4)
$res = $value1*$value2;

else if ($option == 5)
$res = pow($value1,$value2);

echo "O resultado da operacao e $res .";
}

catch (Exeception $e){
    echo "Erro: " . $e->getMessage() . "";
}

?>
