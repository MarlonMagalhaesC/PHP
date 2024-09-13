<?php


echo "Bem vindo!\nQual a quantidade abastecida? ";
$quantidade = floatval(trim(fgets(STDIN)));

echo "Qual preco do litro de combustivel? ";
$preco = floatval(trim(fgets(STDIN)));

$total = $quantidade * $preco;

if ($quantidade >= 10 && $quantidade <= 30)
$total *= 0.99;

else if ($quantidade > 30 && $quantidade < 40)
$total *= 0.98;

else if ($quantidade > 40)
$total *= 0.975;

echo "Voce abasteceu: $quantidade\nPreco Gasolina L: R$$preco\nTotal a pagar: $total";

?>
