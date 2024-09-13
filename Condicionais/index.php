<?php


echo "Bem vindo!\nDigite os votos do primeiro candidato: ";
$candidato1 = floatval(trim(fgets(STDIN)));

echo "Digite os votos do segundo candidato: ";
$candidato2 = floatval(trim(fgets(STDIN)));

echo "Digite os votos do terceiro candidato: ";
$candidato3 = floatval(trim(fgets(STDIN)));

if ($candidato1 > $candidato2 && $candidato1 > $candidato3 )
echo "Canditado 1 ganhou ";

else if ($candidato2 > $candidato1 && $candidato2 > $candidato3 )
echo "Canditado 2 ganhou";

else if ($candidato3 > $candidato1 && $candidato3 > $candidato2 )
echo "Canditado 3 ganhou";

else 
echo "Houve empate entre os 3 canditados!";


?>
