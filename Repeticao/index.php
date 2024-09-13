<?php


echo "Bem vindo!\nDigite n: ";
$n = floatval(trim(fgets(STDIN)));

echo "Os $n Primeiros pares: \n";
for ($i = 1; $i<=$n; $i++)
echo $i * 2 . " ";

echo"\n";

echo "Os $n Primeiros impares: \n";
for ($i = 1; $i<=$n; $i++)
echo $i * 2 - 1 . " ";

?>
