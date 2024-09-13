<?php


echo "Bem vindo!\nDigite n: ";
$n = floatval(trim(fgets(STDIN)));

for ($i = 1; $i<=$n; $i++)
echo $i * 2 . " ";

?>
