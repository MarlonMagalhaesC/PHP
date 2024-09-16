<?php

$cont = 0;

echo "Bem-vindo à eleição!\n";

while ($cont == 0) 
{
    echo "Digite o nome do candidato 1: ";
    $nome1 = trim(fgets(STDIN));

    echo "Digite o número de votos do candidato 1: ";
    $numero1 = intval(trim(fgets(STDIN))); 

    echo "Digite o nome do candidato 2: ";
    $nome2 = trim(fgets(STDIN));

    echo "Digite o número de votos do candidato 2: ";
    $numero2 = intval(trim(fgets(STDIN))); 

    if ($numero1 > $numero2)
    {
        echo "O candidato $nome1 ganhou com $numero1 votos!\n";
        $cont++;
    }
    else if ($numero1 < $numero2)
    {
        echo "O candidato $nome2 ganhou com $numero2 votos!\n";
        $cont++;
    }
    else 
        echo "Houve um empate de $numero1 votos. Uma nova eleição deve ser realizada!\n";
    
}

?>
