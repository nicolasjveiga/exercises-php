<?php

function soma($n1, $n2){
    return $n1 + $n2;
}

function subtracao($n1, $n2){
    return $n1 - $n2;
}

function multiplicacao($n1, $n2){
    return $n1 * $n2;
}

function divisao($n1, $n2){
    return $n1 / $n2;
}

echo "|Escolha operação:                     |\n";
echo "|1 - Soma                              |\n";
echo "|2 - Subtração                         |\n";              
echo "|3 - Multiplicação                     |\n";
echo "|4 - Divisão                           |\n";
echo "+--------------------------------------+ \n";
$quest = (int) readline("Digite a operação (1 a 4): ");

$n1 = (int) readline("Digite o primeiro valor: ");
$n2 = (int) readline("Digite o segundo valor: ");

switch($quest){
    case 1:
        echo soma($n1, $n2) . "\n";
        break;
    case 2:
        echo subtracao($n1, $n2) . "\n";
        break;
    case 3: 
        echo multiplicacao($n1, $n2) . "\n";
        break;    
    case 4: 
        echo divisao($n1, $n2) . "\n";
        break;
    default:
        echo "Operação inválida!";

}