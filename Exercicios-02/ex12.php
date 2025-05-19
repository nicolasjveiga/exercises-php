<?php

// Lê os quatro números
$n1 = (int) readline("Digite o 1º número: ");
$n2 = (int) readline("Digite o 2º número: ");
$n3 = (int) readline("Digite o 3º número: ");
$n4 = (int) readline("Digite o 4º número: ");

$numeros = [$n1, $n2, $n3, $n4];

$menorPar = null;

foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        if ($menorPar === null || $num < $menorPar) {
            $menorPar = $num;
        }
    }
}

if ($menorPar !== null) {
    echo "O menor número par é: $menorPar\n";
} else {
    echo "Nenhum número par foi digitado.\n";
}
