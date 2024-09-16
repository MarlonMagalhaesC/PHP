<?php

$cont = 0;

echo "Bem-vindo à eleição!\n";

// Solicita a quantidade de eleitores
do {
    echo "Digite a quantidade de eleitores: ";
    $n = intval(trim(fgets(STDIN)));

    if ($n < 10) {
        echo "Quantidade mínima é 10 eleitores. Digite novamente:\n";
    }
} while ($n < 10);

// Solicita os números dos candidatos

echo "Digite o nome do Candidato 1: ";
$nome1 = trim(fgets(STDIN));

echo "Digite o número do $nome1: ";
$candidato1 = intval(trim(fgets(STDIN)));

echo "Digite o nome do Candidato 2: ";
$nome2 = trim(fgets(STDIN));

echo "Digite o número do Candidato 2: ";
$candidato2 = intval(trim(fgets(STDIN)));

// Inicializa as contagens de votos
$votosC1 = 0;
$votosC2 = 0;
$nulo = 0;


for ($i = 1; $i <= $n; $i++) {
    echo "Eleitor $i, digite o número que corresponde ao seu candidato: (0 para NULO): ";
    $voto = intval(trim(fgets(STDIN)));

    if ($voto === $candidato1) {
        $votosC1++;
    } else if ($voto === $candidato2) {
        $votosC2++;
    } else if ($voto === 0) {
        $nulo++;
    } else {
        echo "Digite um voto válido. ";
        $i--; 
    }
}

echo "Resultado: \nCandidato $nome1: $votosC1 votos\nCandidato $nome2: $votosC2 votos\nNulos: $nulo votos\n";

if ($votosC1 > $votosC2) {
    echo "O vencedor é o Candidato $nome1.\n";
} else if ($votosC1 < $votosC2) {
    echo "O vencedor é o Candidato $nome2.\n";
} else {
    echo "Empate! Uma nova eleição deve ser realizada.\n";
}

?>
