<?php

$count = 0;

echo "Bem-vindo!\n";
echo "Informe os votos do primeiro candidato: ";
$candidato1 = trim(fgets(STDIN));

echo "Informe os votos do segundo candidato: ";
$candidato2 = trim(fgets(STDIN));

// Converte as entradas para inteiros
$candidato1 = intval($candidato1);
$candidato2 = intval($candidato2);

// Compara os votos e exibe o resultado
if ($candidato1 > $candidato2) {
    echo "Candidato 1 ganhou!\n";
} else if ($candidato1 < $candidato2) {
    echo "Candidato 2 ganhou!\n";
} else {
    echo "Houve empate com $candidato1 votos\n";
    ++$count;
}

if ($count == 0) {
    echo "Votos do Candidato 1: $candidato1\n";
    echo "Votos do Candidato 2: $candidato2\n";
}

?>
