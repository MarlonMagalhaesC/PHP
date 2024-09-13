<?php

echo "Bem vindo ao caixa eletronico!\nDigite o saldo atual da conta corrente: ";
$amount = floatval(trim(fgets(STDIN)));

if ($amount < 0)
throw New Exception("Erro, o valor do saldo nao pode ser negativo. ");

echo "1)Saque\n2)Depósito\n3)Pagamento de Conta\n4)Transferência\nDigite uma operação:";
$option = intval(trim(fgets(STDIN)));

if ($option < 1 || $option > 4) 
    throw New Exception("Opção inválida. Selecione uma opção entre 1 e 4.");   

try {

echo "Digite o valor da operação:";
$value = floatval(trim(fgets(STDIN)));

if ($value <= 0)
throw New Exception("Somente valores positivos sao aceitos.");    

if ($option == 2 )
$amount+=$value;

else if ($option != 2)
$amount -= $value;

}
catch (Exception $e){
  echo"Erro: " . $e->getMessage();
}

echo"Saldo final da conta $amount";

?>
