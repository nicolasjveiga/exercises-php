<?php

$n = null;
$maior = null;
$menor = null;

while($n !== 0){
    $n = (int) readline("Digite o número: ");
    if($n === null || $n < $menor && $n !== 0){
        $menor = $n;
    }
    if($n > $maior){
        $maior = $n;
    }
}
echo "Maior: " . $maior . "\n";
echo "Menor: " . $menor . "\n";