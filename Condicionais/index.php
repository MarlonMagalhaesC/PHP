<?php

echo "Digite a idade da pessoa: ";
$age = trim(fgets(STDIN));

$age = intval($age);

if ($age < 16)
echo "Nao eleitor ";
else if ($age < 18 || $age > 65 )
echo "Eleitor facultativo. ";
else 
echo "Eleitor obrigatorio";


?>
